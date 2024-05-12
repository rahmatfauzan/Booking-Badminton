@extends('user.layout')
@section('title', 'Lapangan')
@section('content')
    <section class="px-4">
        <div class="container mx-auto pt-28">
            <h2 class="text-5xl font-bold text-center text-sky-500">Lapangan</h2>
            <section class="px-4 mt-10">
                <div class="container mt-6">
                    <div class="grid grid-cols-12 gap-5 m-auto">
                        <div
                            class="items-center col-span-12 overflow-hidden bg-white border rounded-md cursor-pointer sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
                            <img src="{{ asset('assets/img/lap1.jpg') }}" alt="" class="object-cover w-full h-48">
                            <div class="p-4">
                                <h2 class="text-2xl font-bold text-center text-sky-500">Lapangan 1A</h2>
                                <div class="flex gap-3 mt-2 mb-2">
                                    <img src="{{ asset('assets/img/kok.svg') }}" alt="">
                                    <p class="text-[12px] ">Badminton</p>
                                </div>
                                <div class="flex gap-3 mb-2">
                                    <img src="{{ asset('assets/img/lapangan.svg') }}" alt="">
                                    <p class="text-[12px] ">Vynil</p>
                                </div>
                                <div class="flex gap-3">
                                    <img src="{{ asset('assets/img/dollar.svg') }}" alt="">
                                    <p class="text-[12px] mx-2">Rp. 50.000 <span
                                            class="text-[8px] text-gray-400">/jam</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="items-center col-span-12 overflow-hidden bg-white border rounded-md cursor-pointer sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
                            <img src="{{ asset('assets/img/lap1.jpg') }}" alt="" class="object-cover w-full h-48">
                            <div class="p-4">
                                <h2 class="text-2xl font-bold text-center text-sky-500">Lapangan 1A</h2>
                                <div class="flex gap-3 mt-2 mb-2">
                                    <img src="{{ asset('assets/img/kok.svg') }}" alt="">
                                    <p class="text-[12px] ">Badminton</p>
                                </div>
                                <div class="flex gap-3 mb-2">
                                    <img src="{{ asset('assets/img/lapangan.svg') }}" alt="">
                                    <p class="text-[12px] ">Vynil</p>
                                </div>
                                <div class="flex gap-3">
                                    <img src="{{ asset('assets/img/dollar.svg') }}" alt="">
                                    <p class="text-[12px] mx-2">Rp. 50.000 <span
                                            class="text-[8px] text-gray-400">/jam</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="items-center col-span-12 overflow-hidden bg-white border rounded-md cursor-pointer sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
                            <img src="{{ asset('assets/img/lap1.jpg') }}" alt="" class="object-cover w-full h-48">
                            <div class="p-4">
                                <h2 class="text-2xl font-bold text-center text-sky-500">Lapangan 1A</h2>
                                <div class="flex gap-3 mt-2 mb-2">
                                    <img src="{{ asset('assets/img/kok.svg') }}" alt="">
                                    <p class="text-[12px] ">Badminton</p>
                                </div>
                                <div class="flex gap-3 mb-2">
                                    <img src="{{ asset('assets/img/lapangan.svg') }}" alt="">
                                    <p class="text-[12px] ">Vynil</p>
                                </div>
                                <div class="flex gap-3">
                                    <img src="{{ asset('assets/img/dollar.svg') }}" alt="">
                                    <p class="text-[12px] mx-2">Rp. 50.000 <span
                                            class="text-[8px] text-gray-400">/jam</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="items-center col-span-12 overflow-hidden bg-white border rounded-md cursor-pointer sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
                            <img src="{{ asset('assets/img/lap1.jpg') }}" alt="" class="object-cover w-full h-48">
                            <div class="p-4">
                                <h2 class="text-2xl font-bold text-center text-sky-500">Lapangan 1A</h2>
                                <div class="flex gap-3 mt-2 mb-2">
                                    <img src="{{ asset('assets/img/kok.svg') }}" alt="">
                                    <p class="text-[12px] ">Badminton</p>
                                </div>
                                <div class="flex gap-3 mb-2">
                                    <img src="{{ asset('assets/img/lapangan.svg') }}" alt="">
                                    <p class="text-[12px] ">Vynil</p>
                                </div>
                                <div class="flex gap-3">
                                    <img src="{{ asset('assets/img/dollar.svg') }}" alt="">
                                    <p class="text-[12px] mx-2">Rp. 50.000 <span
                                            class="text-[8px] text-gray-400">/jam</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
