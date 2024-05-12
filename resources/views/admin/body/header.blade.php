<div class="flex items-center justify-between w-full bg-white border h-18 navbar px-7">
    <button @click="navOpen = !navOpen"
        class="flex items-center justify-center w-12 h-12 transition duration-300 bg-white rounded-full hover:bg-gray-200 ">
        <ion-icon name="menu" class="p-1 text-4xl text-sky-500 hover:text-sky-600"></ion-icon>
    </button>

    <div class="text-sky-500 text-4xl font-bold font-['Sora']">MintonKuy</div>
    <div class="order-3 hidden md:block">
        <button class="text-sky-50 text-[15px] hover:bg-red-600 bg-red-500 px-4 py-2"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
    </div>
    <div class="lg:hidden "></div>
</div>
