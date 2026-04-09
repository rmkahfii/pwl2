<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Profile</title>
</head>

<body class="h-full">

@include('partials.header')

<div class="max-w-7xl mx-auto p-6">

    <x-card>
    <div class="flex flex-col md:flex-row items-center gap-6">

        <!-- FOTO -->
        <div class="flex-shrink-0">
            <img src="https://cdn.antaranews.com/cache/1200x800/2026/04/02/WhatsApp-Image-2026-04-02-at-08.40.27-3.jpeg"
                class="w-32 h-32 rounded-full object-cover border-4 border-gray-200 shadow">
        </div>

        <!-- INFO -->
        <div class="text-center md:text-left">
            <h2 class="text-2xl font-bold text-gray-800">Kelompok PWL 2</h2>

            <p class="text-gray-500 mt-2">NPM: 5520123000</p>
            <p class="text-gray-500">Kelas: IF-B</p>
            <p class="text-gray-500">Email: kelpwl2@gmail.com</p>

            <!-- BUTTON -->
            <div class="mt-4">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Edit Profile
                </button>
            </div>

            <div class="max-w-4xl mx-auto mt-10">
            </div>
        </div>

    </div>
</x-card>

</div>

<x-footer />

</body>
</html>