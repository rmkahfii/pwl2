@include('partials.header')
@include('partials.sidebar')

<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 space-y-6">

    <!-- 🔹 STATISTIC CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

        <x-card>
            <p class="text-sm text-gray-500">Total User</p>
            <h2 class="text-2xl font-bold">4</h2>
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

    <!-- 🔹 TABLE USERS -->
    <x-card>
        <h2 class="font-semibold mb-4">User Data</h2>

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
                {{-- @foreach($users as $user)
                <tr class="border-b">
                    <td class="p-3">{{ $loop->iteration }}</td>
                    <td class="p-3">{{ $user->name }}</td>
                    <td class="p-3">User</td>
                    <td class="p-3">
                        <span class="px-2 py-1 text-xs bg-green-100 text-green-600 rounded">
                            Active
                        </span>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>

            {{-- <td>{{ $user->email }}</td> --}}
        </table>
    </x-card>

</div>
</main>

</div>
</body>
</html>
