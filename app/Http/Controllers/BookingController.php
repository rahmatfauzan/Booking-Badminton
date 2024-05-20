<?php

namespace App\Http\Controllers;

use App\Models\booking;
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
            Booking::create([
                'id_user' => auth()->id(), // Assuming user is authenticated
                'id_lapangan' => $request->id_lapangan,
                'tgl_pemesanan' => Carbon::today()->toDateString(), // Set tgl_pemesanan to today
                'tgl_main' => $request->tgl_main,
                'jam' => $time,
                'status' => 'pending', // Set default status to pending
            ]);
        }

        return redirect()->route('user.lapangan-pemesanan', ['id' => $request->id_lapangan, 'tgl_main' => $request->tgl_main])
            ->with('success', 'Pemesanan berhasil disimpan.');
    }
}
