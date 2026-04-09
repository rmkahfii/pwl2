<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Home</title>
</head>

<body class="h-full">
<div class="min-h-full">

@include('partials.header')

<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
    </div>
</header>

<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 space-y-6">

    <!-- 🔹 STATISTIC CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <x-card>
            <p class="text-sm text-gray-500">Total User</p>
            <h2 class="text-2xl font-bold">120</h2>
        </x-card>

        <x-card>
            <p class="text-sm text-gray-500">Artikel</p>
            <h2 class="text-2xl font-bold">45</h2>
        </x-card>

        <x-card>
            <p class="text-sm text-gray-500">Reports</p>
            <h2 class="text-2xl font-bold">18</h2>
        </x-card>

        <x-card>
            <p class="text-sm text-gray-500">Contact</p>
            <h2 class="text-2xl font-bold">12</h2>
        </x-card>
    </div>

    <!-- 🔹 SOCIAL CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-blue-600 text-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="font-semibold">Facebook</h2>
            <p class="text-sm mt-2">35K Followers</p>
        </div>

        <div class="bg-sky-500 text-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="font-semibold">Twitter</h2>
            <p class="text-sm mt-2">58K Followers</p>
        </div>

        <div class="bg-blue-800 text-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="font-semibold">LinkedIn</h2>
            <p class="text-sm mt-2">75K Connections</p>
        </div>

        <div class="bg-red-500 text-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="font-semibold">Google</h2>
            <p class="text-sm mt-2">450 Users</p>
        </div>
    </div>

    <!-- 🔹 TABLE REPORT -->
    <x-card>
        <h2 class="font-semibold mb-4">Latest Reports</h2>

        <table class="w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-3">No</th>
                    <th class="p-3">Name</th>
                    <th class="p-3">Type</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>

            <tbody>
                @for($i = 1; $i <= 5; $i++)
                <tr class="border-b">
                    <td class="p-3">{{ $i }}</td>
                    <td class="p-3">User {{ $i }}</td>
                    <td class="p-3">Report</td>
                    <td class="p-3">
                        <span class="px-2 py-1 text-xs bg-green-100 text-green-600 rounded">
                            Done
                        </span>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </x-card>

</div>
</main>

</div>
</body>
</html>