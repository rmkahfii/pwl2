@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">About</h1>
        <p class="text-gray-500 mt-1">Informasi tentang sistem admin panel</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-xl shadow">
            <h2 class="font-semibold text-lg">Visi</h2>
            <p class="text-gray-600 mt-2 text-sm">
                Membangun sistem manajemen yang efisien, modern, dan mudah digunakan.
            </p>
        </div>

        <div class="bg-white p-5 rounded-xl shadow">
            <h2 class="font-semibold text-lg">Misi</h2>
            <ul class="text-gray-600 mt-2 text-sm list-disc ml-4 space-y-1">
                <li>Menyediakan dashboard informatif</li>
                <li>Meningkatkan produktivitas admin</li>
                <li>Mempermudah pengelolaan data</li>
            </ul>
        </div>

        <div class="bg-white p-5 rounded-xl shadow">
            <h2 class="font-semibold text-lg">Fitur</h2>
            <ul class="text-gray-600 mt-2 text-sm list-disc ml-4 space-y-1">
                <li>Manajemen artikel</li>
                <li>Laporan data</li>
                <li>Kontak & komunikasi</li>
            </ul>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-3">Tentang Project</h2>
        <p class="text-gray-600 text-sm leading-relaxed">
            Project ini merupakan tugas kelompok untuk membangun tampilan admin panel menggunakan Tailwind CSS
            dengan struktur komponen reusable seperti header, navbar, content, dan footer.
        </p>
    </div>
</div>
@endsection