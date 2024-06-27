@extends('user.layout')
@section('title', 'Lapangan')
@section('content')
    <section class="px-4">
        <div class="container mx-auto pt-28">
            <h2 class="text-3xl font-bold">Data Pesanan</h2>
            <div class="grid grid-cols-12 mt-4 ">
                <div class="col-span-12 p-5 bg-white rounded-lg">
                    <div>
                        <div class="relative overflow-x-auto sm:rounded-lg">
                            <div class="flex items-center justify-end gap-2 mb-3">
                                <div class="flex items-center gap-2">
                                    <label for="table-search p-3" class="sr-only">Search</label>
                                    <div class="relative flex items-center mt-1">
                                        <div
                                            class="absolute inset-y-0 flex items-center pointer-events-none rtl:inset-r-0 start-0 ps-3">
                                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                        </div>
                                        <input type="text" id="table-search"
                                            class="block h-10 py-1 text-sm text-gray-700 border border-gray-300 rounded-lg outline-none ps-10 w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                            wire:model.live="search" aria-describedby="search"
                                            placeholder="Search for items">

                                    </div>
                                </div>
                            </div>

                            <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            NO
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Lapangan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tgl Pemesanan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tgl-Main
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jam-Main
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($booking as $item)
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->lapangan->nama }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->tgl_pemesanan }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->tgl_main }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $item->jam }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if ($item->status == 'paid')
                                                    <span
                                                        class="text-white bg-green-600 px-2 py-1 rounded item-center justify-center">{{ $item->status }}</span>
                                                @elseif ($item->status == 'pending')
                                                    <span
                                                        class="text-white bg-yellow-600 px-2 py-1 rounded item-center justify-center">{{ $item->status }}</span>
                                                @elseif ($item->status == 'cancelled')
                                                    <span
                                                        class="text-white bg-red-600 px-2 py-1 rounded item-center justify-center">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                @if ($item->status == 'pending')
                                                    <a href="{{ route('user.batalBooking', $item->id) }}"
                                                        class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600"
                                                        onclick="return confirm('Yakin ingin membatalkan pemesanan?')">Batal</a>
                                                @endif
                                                @if ($item->status != 'paid'&&$item->status != 'cancelled')
                                                    <button
                                                        class="px-4 py-2 text-white rounded-md bg-sky-400 hover:bg-sky-500"
                                                        onclick="showConfirmationModal('{{ $item->snap_token }}', '{{ $item->id }}')">Bayar</button>


                                                    <dialog id="modal_{{ $item->id }}"
                                                        class="modal modal-bottom sm:modal-middle">
                                                        <div class="modal-box">
                                                            <h3 class="text-lg font-bold">Konfirmasi</h3>
                                                            <p class="py-4">Apakah Anda yakin ingin melakukan pembayaran?
                                                            </p>
                                                            <div class="modal-action">
                                                                <button class="btn"
                                                                    onclick="pay('{{ $item->snap_token }}', '{{ $item->id }}')">Ya</button>
                                                                <button class="btn"
                                                                    onclick="closeModal('{{ $item->id }}')">Tidak</button>
                                                            </div>
                                                        </div>
                                                    </dialog>
                                                @endif
                                            </td>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key={{ env('MIDTRANS_CLIENT_KEY') }}></script>
    <script type="text/javascript">
        function pay(snapToken, id) {
            const modal = document.getElementById('modal_' + id);
            modal.close();
            // SnapToken acquired from parameter
            snap.pay(snapToken, {
                // Optional
                onSuccess: function(result) {
                    // Redirect to success page using the route() function
                    var url = 'pesanan/bayar/sukses/' + id;
                    window.location.href = url;
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        }


        function showConfirmationModal(snapToken, id) {
            const modal = document.getElementById('modal_' + id);
            modal.showModal();
        }


        function closeModal(id) {
            const modal = document.getElementById('modal_' + id);
            modal.close();
        }
    </script>
@endsection
