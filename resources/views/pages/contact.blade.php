@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Contact</h1>
        <p class="text-gray-500 mt-1">Hubungi admin atau kirim pesan</p>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-xl shadow space-y-4">
            <h2 class="text-lg font-semibold">Form Kontak</h2>

            <input type="text" placeholder="Nama"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-200">

            <input type="email" placeholder="Email"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-200">

            <textarea rows="4" placeholder="Pesan"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-200"></textarea>

            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">
                Kirim
            </button>
        </div>

        <div class="bg-white p-6 rounded-xl shadow space-y-3">
            <h2 class="text-lg font-semibold">Informasi Kontak</h2>
            <p class="text-gray-600 text-sm">📍 Cianjur, Indonesia</p>
            <p class="text-gray-600 text-sm">📧 admin@email.com</p>
            <p class="text-gray-600 text-sm">📞 0812-3456-7890</p>
        </div>
    </div>
</div>
@endsection