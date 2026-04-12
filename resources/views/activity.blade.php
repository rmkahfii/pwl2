@include('partials.header')
@include('partials.sidebar')

<div class="p-6 space-y-6">
    <!-- 🔹 ACTIVITY CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <x-card>
            <p class="text-sm text-gray-500">User Aktif</p>
            <h2 class="text-2xl font-bold">5</h2>
        </x-card>

        <x-card>
            <p class="text-sm text-gray-500">Login Hari Ini</p>
            <h2 class="text-2xl font-bold">32</h2>
        </x-card>

        <x-card>
            <p class="text-sm text-gray-500">Total Activity</p>
            <h2 class="text-2xl font-bold">120</h2>
        </x-card>

    </div>

    <!-- 🔹 TABLE ACTIVITY -->
    <x-card>
        <h2 class="font-semibold mb-4">Recent Activity</h2>

        <table class="w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-3">No</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Activity</th>
                    <th class="p-3">Waktu</th>
                </tr>
            </thead>

            <tbody>
                @for ($i = 1; $i <= 5; $i++)
                <tr class="border-b">
                    <td class="p-3">{{ $i }}</td>
                    <td class="p-3">User {{ $i }}</td>
                    <td class="p-3">Login</td>
                    <td class="p-3">Hari ini</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </x-card>

</div>

@include('partials.footer')
