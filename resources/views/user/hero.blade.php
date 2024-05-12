<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>MintonKuy</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    @include('user.body.header_hero')

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

    @include('user.body.footer')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
