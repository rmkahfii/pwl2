@include('partials.header')
@include('partials.sidebar')


        <main class="flex-1 overflow-y-auto p-8">
            <div class="max-w-7xl mx-auto">
                <div class="mb-8">
                    <p class="text-gray-500 mt-1">Selamat datang kembali di panel kendali sistem Anda.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <x-card class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transform transition-all duration-300 hover:scale-105 hover:shadow-md cursor-pointer">
                        <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">Total User</span>
                        <p class="text-4xl font-black text-gray-800 mt-2">5</p>
                    </x-card>
                    <x-card class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transform transition-all duration-300 hover:scale-105 hover:shadow-md cursor-pointer">
                        <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">Artikel</span>
                        <p class="text-4xl font-black text-gray-800 mt-2">45</p>
                    </x-card>
                    <x-card class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transform transition-all duration-300 hover:scale-105 hover:shadow-md cursor-pointer">
                        <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">Reports</span>
                        <p class="text-4xl font-black text-gray-800 mt-2">18</p>
                    </x-card>
                    <x-card class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transform transition-all duration-300 hover:scale-105 hover:shadow-md cursor-pointer">
                        <span class="text-[11px] font-bold text-gray-400 uppercase tracking-widest">Contact</span>
                        <p class="text-4xl font-black text-gray-800 mt-2">12</p>
                    </x-card>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-[#2563eb] text-white p-6 rounded-2xl shadow-lg shadow-blue-100 transform transition-all duration-300 hover:scale-105 hover:brightness-110 cursor-pointer">
                        <h4 class="font-bold text-lg">Facebook</h4>
                        <p class="text-blue-100 text-sm opacity-80">35K Followers</p>
                    </div>
                    <div class="bg-[#38bdf8] text-white p-6 rounded-2xl shadow-lg shadow-sky-100 transform transition-all duration-300 hover:scale-105 hover:brightness-110 cursor-pointer">
                        <h4 class="font-bold text-lg">Twitter</h4>
                        <p class="text-sky-50 text-sm opacity-80">50K Followers</p>
                    </div>
                    <div class="bg-[#4338ca] text-white p-6 rounded-2xl shadow-lg shadow-indigo-100 transform transition-all duration-300 hover:scale-105 hover:brightness-110 cursor-pointer">
                        <h4 class="font-bold text-lg">LinkedIn</h4>
                        <p class="text-indigo-100 text-sm opacity-80">75K Connections</p>
                    </div>
                    <div class="bg-[#ef4444] text-white p-6 rounded-2xl shadow-lg shadow-red-100 transform transition-all duration-300 hover:scale-105 hover:brightness-110 cursor-pointer">
                        <h4 class="font-bold text-lg">Google</h4>
                        <p class="text-red-50 text-sm opacity-80">450 Users</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-bold text-xl text-gray-800">Latest Reports</h3>
                            <a href="#" class="text-blue-600 font-bold text-sm hover:underline">View All</a>
                        </div>
                        <table class="w-full text-left">
                            <thead class="text-gray-400 text-[10px] uppercase font-bold tracking-widest border-b border-gray-50">
                                <tr>
                                    <th class="pb-4">No</th>
                                    <th class="pb-4">Name</th>
                                    <th class="pb-4">Type</th>
                                    <th class="pb-4">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600">
                                @foreach(['User 5', 'User 4', 'User 3'] as $index => $user)
                                <tr class="border-b border-gray-50 last:border-none hover:bg-gray-50 transition">
                                    <td class="py-4 text-sm">{{ $index + 1 }}</td>
                                    <td class="py-4 font-bold text-gray-800">{{ $user }}</td>
                                    <td class="py-4 text-sm">User</td>
                                    <td class="py-4">
                                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-[10px] font-bold">Active</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 flex flex-col items-center justify-center transform transition-all duration-500 hover:shadow-lg">
                        <div class="relative flex items-center justify-center mb-4 transition-transform hover:rotate-12 duration-500">
                            <svg class="w-32 h-32 transform -rotate-90">
                                <circle cx="64" cy="64" r="58" stroke="currentColor" stroke-width="8" fill="transparent" class="text-gray-100" />
                                <circle cx="64" cy="64" r="58" stroke="currentColor" stroke-width="10" fill="transparent" stroke-dasharray="364" stroke-dashoffset="100" class="text-blue-500" stroke-linecap="round" />
                            </svg>
                            <span class="absolute text-3xl font-black text-gray-800">72%</span>
                        </div>
                        <h4 class="font-bold text-gray-800">Target Reached</h4>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
