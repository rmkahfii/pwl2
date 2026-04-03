@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Artikel</h1>
            <p class="text-gray-500 mt-1">Daftar artikel terbaru</p>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">
            + Tambah Artikel
        </button>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        @for($i = 1; $i <= 6; $i++)
        <div class="bg-white rounded-xl shadow p-5 hover:shadow-md transition">
            <h2 class="font-semibold text-lg">Judul Artikel {{ $i }}</h2>
            <p class="text-gray-500 text-sm mt-1">Kategori • {{ date('d M Y') }}</p>
            <p class="text-gray-600 text-sm mt-3">
                Ini adalah ringkasan singkat dari artikel yang ditampilkan pada dashboard admin.
            </p>
            <button class="mt-4 text-blue-600 text-sm hover:underline">Read more →</button>
        </div>
        @endfor
    </div>
</div>
@endsection