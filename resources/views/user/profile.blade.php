@extends('user.layout')
@section('title', 'Lapangan')
@section('content')
    <section class="px-9">
        <div class="container mx-auto pt-28">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 bg-white rounded-lg shadow-lg md:col-span-6">
                    <div class="p-6">
                        <h1 class="mb-4 text-2xl font-bold text-gray-800">User Information</h1>
                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex items-center mb-2">
                                <span class="mr-2 font-semibold text-gray-600">ID:</span> <span
                                    class="text-gray-800">{{ $user->id }}</span>
                            </div>
                            <div class="flex items-center mb-2">
                                <span class="mr-2 font-semibold text-gray-600">Name:</span> <span
                                    class="text-gray-800">{{ $user->name }}</span>
                            </div>
                            <div class="flex items-center mb-2">
                                <span class="mr-2 font-semibold text-gray-600">Username:</span> <span
                                    class="text-gray-800">{{ $user->username }}</span>
                            </div>
                            <div class="flex items-center mb-2">
                                <span class="mr-2 font-semibold text-gray-600">Email:</span> <span
                                    class="text-gray-800">{{ $user->email }}</span>
                            </div>
                            <div class="flex items-center mb-2">
                                <span class="mr-2 font-semibold text-gray-600">Telepon:</span> <span
                                    class="text-gray-800">{{ $user->telepon }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- You can add more elements or styles here -->
            </div>
        </div>
    </section>
@endsection
