@extends('user.layout')
@section('title', 'Lapangan')
@section('content')
    <section class="px-4">
        <div class="container mx-auto pt-28">
            <p class="text-gray-400">Lapangan/Jadwal</p>
            <form method="GET" action="{{ route('user.lapangan-pemesanan', ['id' => $id]) }}">
                <div class="flex items-center justify-center h-10 mt-4">
                    <input type="date" name="tgl_main" value="{{ $date }}"
                        class="w-1/2 h-full px-4 py-2 text-gray-400 rounded-l-lg outline-none">
                    <button type="submit"
                        class="flex items-center justify-center h-full px-4 py-2 text-white rounded-r-lg sm:w-1/12 lg:w-[82px] bg-sky-400 hover:bg-sky-500">
                        <ion-icon name="search"></ion-icon>
                    </button>
                </div>
            </form>
            <form id="bookingForm" method="POST" action="{{ route('user.simpan-pemesanan') }}">
                @csrf
                <input type="hidden" name="id_lapangan" value="{{ $id }}">
                <input type="hidden" name="tgl_main" value="{{ $date }}">
                <div class="flex flex-wrap justify-center gap-4 mt-10">
                    @foreach (['08:00-09:00', '09:00-10:00', '10:00-11:00', '11:00-12:00', '12:00-13:00', '13:00-14:00', '14:00-15:00', '15:00-16:00', '16:00-17:00', '17:00-18:00', '18:00-19:00', '19:00-20:00', '20:00-21:00', '21:00-22:00', '22:00-23:00'] as $time)
                        @php
                            $isBooked = in_array($time, $bookedTimes);
                        @endphp
                        <label class="relative cursor-pointer">
                            <input type="checkbox" name="times[]" value="{{ $time }}" class="sr-only peer"
                                {{ $isBooked ? 'disabled' : '' }}>
                            <div
                                class="h-[184px] w-[177px] {{ $isBooked ? 'bg-red-500' : 'bg-white' }} p-5 flex flex-col justify-center items-center rounded-md peer-checked:bg-sky-400 peer-checked:text-white peer-checked:scale-[1.05] transition-all duration-300 ease-in-out hover:scale-[1.03] shadow-xl {{ $isBooked ? '' : 'border-transparent hover:border-blue-400 border-2' }}">
                                @if (!$isBooked)
                                    <ion-icon name="add-circle-sharp"
                                        class="absolute text-2xl text-white top-3 left-3"></ion-icon>
                                @endif
                                <ion-icon name="logo-yen" class="{{ $isBooked ? 'text-white' : '' }} text-8xl"></ion-icon>
                                <p class="mt-4 font-bold {{ $isBooked ? 'text-white' : '' }}">{{ $time }}</p>
                                @if ($isBooked)
                                    <p class="mt-4 font-bold text-white">BOOKED</p>
                                @endif
                            </div>
                        </label>
                    @endforeach
                </div>
                <div class="flex items-center justify-center h-15 mt-14">
                    <button type="button" id="pesanButton" style="display:none"
                        class="flex items-center justify-center w-1/2 h-full px-4 py-2 text-white rounded-md shadow-lg bg-sky-400 hover:bg-sky-500"
                        onclick="showConfirmationModal()">PESAN</button>
                </div>
            </form>
        </div>
    </section>
    <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Konfirmasi</h3>
            <p class="py-4">Apakah Anda yakin ingin menyimpan pesanan?</p>
            <div class="modal-action">
                <button class="btn btn-primary" onclick="submitForm()">Ya</button>
                <button class="btn btn-neutral" onclick="my_modal_5.close()">Tidak</button>
            </div>
        </div>
    </dialog>
    <dialog id="successModal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Sukses!</h3>
            <p class="py-4">Pesanan berhasil disimpan.</p>
            <div class="modal-action">
                <button class="btn" onclick="successModal.close()">Close</button>
            </div>
        </div>
    </dialog>
    <script>
        function showConfirmationModal() {
            const modal = document.getElementById('my_modal_5');
            modal.showModal();
        }

        function submitForm() {
            const form = document.getElementById('bookingForm');
            form.submit();
            showSuccessModal(); // Menambahkan pemanggilan showSuccessModal()
        }

        function showSuccessModal() {
            const modal = document.getElementById('successModal');
            modal.showModal();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const pesanButton = document.querySelector('#pesanButton');

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    let anyChecked = false;
                    checkboxes.forEach(function(cb) {
                        if (cb.checked && !cb.disabled) {
                            anyChecked = true;
                        }
                    });

                    if (anyChecked) {
                        pesanButton.style.display = 'block';
                    } else {
                        pesanButton.style.display = 'none';
                    }
                });
            });
        });
    </script>

@endsection
