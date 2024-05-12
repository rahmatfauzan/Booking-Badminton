{{-- INSTALL LIVE WIRE TERLEBIH DAHULU --}}
@extends('user.layout')
@section('title', 'Lapangan')
@section('content')
    <section class="px-4">
        <div class="container mx-auto pt-28">
            <p class="text-gray-400">Lapangan/Jadwal</p>
            <div class="flex items-center justify-center h-10 mt-4">
                <input type="date" class="w-1/2 h-full px-4 py-2 text-gray-400 rounded-l-lg outline-none "
                    placeholder="Silahkan pilih tanggal terlebih dahulu">
                <button
                    class="flex items-center justify-center h-full px-4 py-2 text-white rounded-r-lg sm:w-1/12 lg:w-[82px] bg-sky-400 hover:bg-sky-500 ">
                    <ion-icon name="search"></ion-icon>
                </button>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mt-10">
                <label class="relative cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div
                        class="h-[184px] w-[177px] bg-white p-5 flex flex-col justify-center items-center rounded-md peer-checked:bg-sky-400 peer-checked:text-white peer-checked:scale-[1.05] transition-all duration-300 ease-in-out hover:scale-[1.03] shadow-xl  border-transparent hover:border-blue-400 border-2">
                        <ion-icon name="add-circle-sharp" class="absolute text-2xl text-white top-3 left-3"></ion-icon>
                        <ion-icon name="logo-yen" class="text-8xl"></ion-icon>
                        <p class="mt-4 font-bold">08.00-09.00</p>
                    </div>
                </label>
                <label class="relative cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div
                        class="h-[184px] w-[177px] bg-white p-5 flex flex-col justify-center items-center rounded-md peer-checked:bg-sky-400 peer-checked:text-white peer-checked:scale-[1.05] transition-all duration-300 ease-in-out hover:scale-[1.03] shadow-xl  border-transparent hover:border-blue-400 border-2">
                        <ion-icon name="add-circle-sharp" class="absolute text-2xl text-white top-3 left-3"></ion-icon>
                        <ion-icon name="logo-yen" class="text-8xl"></ion-icon>
                        <p class="mt-4 font-bold">09.00-10.00</p>
                    </div>
                </label>
                <label class="relative cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div
                        class="h-[184px] w-[177px] bg-white p-5 flex flex-col justify-center items-center rounded-md peer-checked:bg-sky-400 peer-checked:text-white peer-checked:scale-[1.05] transition-all duration-300 ease-in-out hover:scale-[1.03] shadow-xl  border-transparent hover:border-blue-400 border-2">
                        <ion-icon name="add-circle-sharp" class="absolute text-2xl text-white top-3 left-3"></ion-icon>
                        <ion-icon name="logo-yen" class="text-8xl"></ion-icon>
                        <p class="mt-4 font-bold">10.00-11.00</p>
                    </div>
                </label>
                <label class="relative cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div
                        class="h-[184px] w-[177px] bg-white p-5 flex flex-col justify-center items-center rounded-md peer-checked:bg-sky-400 peer-checked:text-white peer-checked:scale-[1.05] transition-all duration-300 ease-in-out hover:scale-[1.03] shadow-xl  border-transparent hover:border-blue-400 border-2">
                        <ion-icon name="add-circle-sharp" class="absolute text-2xl text-white top-3 left-3"></ion-icon>
                        <ion-icon name="logo-yen" class="text-8xl"></ion-icon>
                        <p class="mt-4 font-bold">11.00-12.00</p>
                    </div>
                </label>
                <label class="relative cursor-pointer">
                    <input type="checkbox" class="sr-only peer" disabled>
                    <div
                        class="h-[184px] w-[177px] bg-red-500 p-5 flex flex-col justify-center items-center rounded-md shadow-xl ">
                        <ion-icon name="logo-yen" class="text-white text-8xl"></ion-icon>
                        <p class="mt-4 font-bold text-white">BOOKED</p>
                    </div>
                </label>
            </div>
            <div class="flex items-center justify-center h-15 mt-14 ">
                <button id="pesanButton" onclick="my_modal_1.showModal()" style="display:none"
                    class="flex items-center justify-center w-1/2 h-full px-4 py-2 text-white rounded-md shadow-lg bg-sky-400 hover:bg-sky-500">
                    PESAN
                </button>

                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold">Konfirmasi</h3>
                        <p class="py-4">Apakah anda yakin ingin memesankan lapangan ini</p>
                        <hr>
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn btn-error">YES</button>
                                <button class="btn">NO</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const pesanButton = document.querySelector('#pesanButton');

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    let anyChecked = false;
                    checkboxes.forEach(function(cb) {
                        if (cb.checked) {
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
