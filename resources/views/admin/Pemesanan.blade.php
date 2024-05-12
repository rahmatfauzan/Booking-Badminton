@extends('admin.layout')
@section('title', 'Data Pemesanan')
@section('content')
    <section class="flex-1 px-4">
        <div class="container pt-6 mx-auto">
            <h2 class="text-3xl font-bold">Data Pemesanan</h2>
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
                                <!-- Open the modal using ID.showModal() method -->
                                <button class="px-4 py-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-700"
                                    onclick="my_modal_1.showModal()">Tambah</button>
                                <dialog id="my_modal_1" class="modal">
                                    <div class="modal-box">
                                        <h3 class="text-lg font-bold">Hello!</h3>
                                        <hr>
                                        <p class="py-4">Press ESC key or click the button below to close</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <!-- if there is a button in form, it will close the modal -->
                                                <button class="btn">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>

                            <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            NO
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Pemesanan
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
