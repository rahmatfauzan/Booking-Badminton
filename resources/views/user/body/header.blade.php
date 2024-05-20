<nav x-data="{ navOpen: true }"
    class="fixed left-0 z-50 flex items-center w-full h-20 px-4 py-5 bg-white shadow-sm right-0h-20">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <div class="text-sky-500 text-4xl font-bold font-['Sora'] order-0 sm:order-2">MintonKuy</div>
            <div class="order-2 hidden lg:block">
                <ul class="flex gap-12 text-gray-400 text-[15px]">
                    <li>
                        <a href="{{ route('user.lapangan') }}"
                            class="{{ request()->is('user/lapangan') ? 'text-sky-500' : '' }}">Lapangan</a>
                    </li>

                    <li><a href="{{ route('user.pesanan') }}"
                            class="{{ request()->is('user/pesanan') ? 'text-sky-500' : '' }}">Pesanan</a>
                    </li>
                    <li><a href="" class="{{ request()->is('user/profil') ? 'text-sky-500' : '' }}">Profil</a>
                    </li>
                </ul>
            </div>
            <button class="lg:hidden">
                <ion-icon @click="navOpen = !navOpen" name="menu"
                    class="text-5xl sm:order-2 text-sky-500 hover:text-sky-600"></ion-icon>
            </button>
            <div class="order-3 hidden sm:block ">
                <button class="text-sky-50 text-[15px] hover:bg-red-600 bg-red-500 px-4 py-2"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
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
                <button
                    class="flex flex-col items-center justify-center gap-1 opacity-50 {{ request()->is('user/lapangan') ? 'text-sky-600' : ' text-gray' }} flex-center">
                    <ion-icon name="logo-electron" class="text-2xl"></ion-icon>
                    <span class="text-sm">Lapangan</span>
                </button>
            </li>
            <li>
                <button
                    class="flex flex-col items-center justify-center gap-1 opacity-50 {{ request()->is('user/pesanan') ? 'text-sky-600' : ' text-gray' }} flex-center">
                    <ion-icon name="newspaper" class="text-2xl"></ion-icon>
                    <span class="text-sm">Pesanan</span>
                </button>
            </li>
            <li>
                <button
                    class="flex flex-col items-center justify-center gap-1 opacity-50 {{ request()->is('user/profil') ? 'text-sky-600' : ' text-gray' }} flex-center">
                    <ion-icon name="people" class="text-2xl"></ion-icon>
                    <span class="text-sm">Profil</span>
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
            <button class="px-8 py-4 text-sm font-semibold text-white bg-red-500 rounded-full grow hover:bg-red-600">
                Logout
            </button>
        </div>
    </div>
</nav>
