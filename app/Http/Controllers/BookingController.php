<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\lapangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{

    public function viewPesanan()
    {
        $booking = booking::where('id_user', auth()->user()->id)->get();

        return view('user.pesanan',  ['booking' => $booking]);
    }

    // public function pilihjam($id)
    // {
    //     // $booking = booking::findOrFail($id);
    //     return view('user.lapangan-pemesanan', compact('id'));
    // }


    public function pilihjam(Request $request, $id)
    {
        $date = $request->input('tgl_main');
        $bookedTimes = [];

        if ($date) {
            Log::info('Selected Date: ', [$date]);
            $bookedTimes = booking::where('id_lapangan', $id)
                ->where('tgl_main', $date)
                ->where('status', '!=', 'cancelled')
                ->pluck('jam')
                ->toArray();

            Log::info('Booked Times: ', $bookedTimes);
        }

        return view('user.lapangan-pemesanan', compact('id', 'date', 'bookedTimes'));
    }



    public function batalBooking($id)
    {
        $booking = booking::findOrFail($id);
        if ($booking->status != 'pending') {
            return redirect('user/pesanan')->with('warning', 'Pemesanan tidak dapat dibatalkan');
        }
        $booking->status = 'cancelled';
        $booking->save();
        return redirect('user/pesanan')->with('success', 'Pemesanan berhasil dibatalkan');
    }

    // LapanganController.php

    public function simpanPemesanan(Request $request)
    {
        $request->validate([
            'id_lapangan' => 'required|exists:lapangans,id',
            'tgl_main' => 'required|date',
            'times' => 'required|array',
            'times.*' => 'required|string'
        ]);


        foreach ($request->times as $time) {
            $booknow = Booking::create([
                'id_user' => auth()->id(), // Assuming user is authenticated
                'id_lapangan' => $request->id_lapangan,
                'tgl_pemesanan' => Carbon::today()->toDateString(), // Set tgl_pemesanan to today
                'tgl_main' => $request->tgl_main,
                'jam' => $time,
                'status' => 'pending', // Set default status to pending
            ]);


            $harga = lapangan::find($request->id_lapangan)->harga;
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtran.serverKey');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;


            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $harga,
                ),
                'customer_details' => array(
                    'first_name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                ),
            );




            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $booknow->snap_token = $snapToken;
            $booknow->save();
        }

        return redirect()->route('user.lapangan-pemesanan', ['id' => $request->id_lapangan, 'tgl_main' => $request->tgl_main])
            ->with('success', 'Pemesanan berhasil disimpan.');
    }

    public function bayarBooking($id)
    {
        $booking = booking::findOrFail($id);
        if ($booking->status != 'pending') {
            return redirect('user/pesanan')->with('warning', 'Pemesanan tidak dapat dibatalkan');
        }
        $booking->status = 'paid';
        $booking->save();
        return redirect('user/pesanan')->with('success', 'Pemesanan berhasil dibatalkan');
    }


    public function bayarsukses($id)
    {
        booking::where('id', $id)->update(['status' => 'paid']);


        return redirect('user/pesanan')->with('success', 'Pembayaran berhasil');
    }
}
