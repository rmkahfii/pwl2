@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Reports</h1>
        <p class="text-gray-500 mt-1">Data laporan sistem</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-xl shadow">
            <p class="text-sm text-gray-500">Total User</p>
            <h2 class="text-2xl font-bold">120</h2>
        </div>
        <div class="bg-white p-5 rounded-xl shadow">
            <p class="text-sm text-gray-500">Total Artikel</p>
            <h2 class="text-2xl font-bold">45</h2>
        </div>
        <div class="bg-white p-5 rounded-xl shadow">
            <p class="text-sm text-gray-500">Laporan Masuk</p>
            <h2 class="text-2xl font-bold">18</h2>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
        <h2 class="font-semibold mb-4">Tabel Laporan</h2>
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-3">No</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Jenis</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 5; $i++)
                <tr class="border-b">
                    <td class="p-3">{{ $i }}</td>
                    <td class="p-3">User {{ $i }}</td>
                    <td class="p-3">Keluhan</td>
                    <td class="p-3">
                        <span class="px-2 py-1 text-xs bg-green-100 text-green-600 rounded">
                            Selesai
                        </span>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection