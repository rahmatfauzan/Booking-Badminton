<div class="h-screen p-4 bg-white shadow-lg  w-4/12 sm:w-[250px] lg:w-[300px]">
    <div
        class="flex items-center w-full h-10 p-4 my-3  rounded-md {{ request()->is('admin/dataUser') ? 'bg-sky-500 text-white hover:bg-sky-600' : 'hover:bg-primary' }}">
        <h2 class="font-semibold">Data User</h2>
    </div>
    <div
        class="flex items-center w-full h-10 p-4 my-3 rounded-md {{ request()->is('admin/dataPemesanan') ? 'bg-sky-500 text-white hover:bg-sky-600' : 'hover:bg-primary' }}">
        <h2 class="font-semibold">Data Pemesanan</h2>
    </div>
    <div
        class="flex items-center w-full h-10 p-4 my-3 rounded-md {{ request()->is('admin/dataLapangan') ? 'bg-sky-500 text-white hover:bg-sky-600' : 'hover:bg-primary' }}">
        <h2 class="font-semibold">Data Lapangan</h2>
    </div>
</div>
