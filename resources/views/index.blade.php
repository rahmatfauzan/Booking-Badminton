<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <nav x-data="{ navOpen: true }" class="fixed left-0 z-50 flex items-center w-full h-20 px-4 py-5 bg-white right-0h-20">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div class="text-sky-500 text-4xl font-bold font-['Sora'] order-0 sm:order-2">MintonKuy</div>
                <div class="order-2 hidden lg:block">
                    <ul class="flex gap-12 text-gray-400 text-[15px]">
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Lapangan</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
                <button class="lg:hidden">
                    <ion-icon @click="navOpen = !navOpen" name="menu"
                        class="text-5xl sm:order-2 text-sky-500 hover:text-sky-600"></ion-icon>
                </button>
                <div class="order-3 hidden sm:block ">
                    <button class=" text-[15px] text-gray-400  px-4 py-2">Masuk</button>
                    <button class="text-sky-50 text-[15px] hover:bg-red-600 bg-red-500 px-4 py-2">Daftar</button>
                </div>
            </div>
        </div>
        <div x-show="navOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90" x-data="{ open: false }"
            class="fixed bottom-0 left-0 right-0 p-4 bg-white border lg:hidden">
            <ul class="flex justify-between te">
                <li>
                    <button class="flex flex-col items-center justify-center gap-1 flex-center text-sky-500">
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                        <span class="text-sm">Dashboard</span>
                    </button>
                </li>
                <li>
                    <button class="flex flex-col items-center justify-center gap-1 opacity-50 text-gray flex-center">
                        <ion-icon name="logo-electron" class="text-2xl"></ion-icon>
                        <span class="text-sm">Lapangan</span>
                    </button>
                </li>
                <li>
                    <button class="flex flex-col items-center justify-center gap-1 opacity-50 text-gray flex-center">
                        <ion-icon name="call-outline" class="text-2xl"></ion-icon>
                        <span class="text-sm">About</span>
                    </button>
                </li>
                <li>
                    <button @click="open = !open"
                        class="flex flex-col items-center justify-center gap-1 opacity-50 text-gray flex-center">
                        <ion-icon name="chevron-collapse-outline" class="text-2xl"></ion-icon>
                        <span class="text-sm">More</span>
                    </button>
                </li>
            </ul>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="absolute flex justify-center w-3/4 gap-4 -translate-x-1/2 bottom-24 left-1/2">
                <button class="px-8 py-4 text-sm font-semibold bg-white grow hover:bg-gray-50">
                    Sign Up
                </button>
                <button
                    class="px-8 py-4 text-sm font-semibold text-white bg-red-500 rounded-full grow hover:bg-red-600">
                    Login
                </button>
            </div>
        </div>
    </nav>

    <section class="px-4">
        <div class="container mx-auto pt-28">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-7">
                    <p class="text-4xl font-bold">Kami menyediakan Lapangan <br> <span
                            class="text-5xl text-sky-500">Badminton</span> </p>
                    <p class="mt-8 text-sm md:max-w-[463px]">Sekarang anda tidak perlu datang langsung ke
                        Lapang hanya
                        sekedar
                        untuk
                        Membooking lapangan, anda dapat memesannya langsung dari Gadget Anda</p>
                    <div class="flex mt-8">
                        <button>
                            <span class="px-4 py-4 text-white bg-red-500 hover:bg-red-600">Book-Now</span>
                        </button>
                        <ion-icon name="chevron-forward" class="text-6xl hover:text-gray-800"></ion-icon>
                    </div>
                </div>
                <div class="hidden col-span-5 row-span-2 md:block">
                    <img src="{{ asset('assets/img/hero-1.jpg') }}" alt="Error" class="rounded-xl">
                </div>
                <div class="hidden col-span-7 mt-8 lg:block">
                    <div class="flex justify-around gap-2 ">
                        <img src="{{ asset('assets/img/hero-2.jpg') }}" alt="Error" class="rounded-md">
                        <img src="{{ asset('assets/img/hero-3.jpg') }}" alt="Error" class="rounded-md">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="px-4 mt-16">
        <h1 class="flex justify-center text-4xl font-bold text-sky-500">Lapangan Kami</h1>
        <div class="container mt-6">
            <div class="grid grid-cols-12 gap-5 m-auto">
                <div
                    class="items-center col-span-12 overflow-hidden bg-white border rounded-md sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
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
                            <p class="text-[12px] mx-2">Rp. 50.000 <span class="text-[8px] text-gray-400">/jam</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="items-center col-span-12 overflow-hidden bg-white border rounded-md sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
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
                            <p class="text-[12px] mx-2">Rp. 50.000 <span class="text-[8px] text-gray-400">/jam</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="items-center col-span-12 overflow-hidden bg-white border rounded-md sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
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
                            <p class="text-[12px] mx-2">Rp. 50.000 <span class="text-[8px] text-gray-400">/jam</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="items-center col-span-12 overflow-hidden bg-white border rounded-md sm:col-span-6 md:col-span-4 lg:col-span-3 hover:shadow-xl">
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
                            <p class="text-[12px] mx-2">Rp. 50.000 <span class="text-[8px] text-gray-400">/jam</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="container px-4 mt-14">
        <div class="flex items-end justify-between">
            <div>
                <h1 class="my-2 text-4xl font-bold text-sky-500">MintonKuy</h1>
                <h2 class="my-2 text-base font-semibold">PT Minton Maju Jaya</h2>
                <p class="my-2 text-base text-gray-400 max-w-64">Kos Pak Mansur Jl. Joyosuko GG 2 No 25, Merjosari,
                    Lowokwaru,
                    Malang</p>
            </div>
            <div class="text-gray-400">
                <div class="items-center hidden gap-1 mb-3 sm:flex">
                    <ion-icon name="call-outline" class="text-2xl text-gray-500"></ion-icon>
                    <p class="">+62 822 1234 5678</p>
                </div>
                <div class="flex items-center gap-4 my-2 text-xl">
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-facebook"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                    <ion-icon name="logo-youtube"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                </div>
            </div>
        </div>
        <hr class="text-gray-400">
        <p class="mt-2 mb-10 text-[10px] text-gray-400 ">© 2024 MintonKuy All Right Reserved</p>
    </footer>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
