<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#f8fafc] font-sans">

<div class="flex min-h-screen">
    
    <div class="w-64 bg-[#1e293b] text-white flex-shrink-0 shadow-xl">
        <div class="p-6 flex items-center space-x-3 border-b border-slate-700/50">
            <img src="https://upload.wikimedia.org/wikipedia/en/7/7a/Manchester_United_FC_crest.svg" class="h-8 w-8" alt="Logo">
            <span class="text-lg font-bold tracking-tight">Dashboard</span>
        </div>
        
        <nav class="p-4 mt-2 space-y-1">
            <a href="/dashboard" class="flex items-center px-4 py-3 bg-slate-800 border-l-4 border-blue-500 rounded-r-lg text-white font-medium transition">
                <span>Dashboard</span>
            </a>
            <a href="/list-data" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition">
                <span>List Data</span>
            </a>
            <a href="/activity" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition">
                <span>Activity</span>
            </a>
            <a href="/logout" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition">
                <span>Log Out</span>
            </a>
        </nav>
    </div>

    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
        
        <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-8 z-10">
            <h2 class="text-xl font-bold text-gray-800 tracking-tight">Dashboard</h2>
            
            <div class="flex items-center space-x-4" x-data="{ open: false }">
                <div class="relative">
                    <button @click="open = !open" class="flex items-center focus:outline-none hover:opacity-80 transition">
                        <img class="h-9 w-9 rounded-full object-cover ring-2 ring-gray-100" 
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Profile">
                    </button>
                    
                    <div x-show="open" @click.outside="open = false" 
                         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl py-1 border border-gray-100 z-50">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Your profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 font-bold">Dashboard</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Artikel</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">About</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Contact</a>
                        <hr class="my-1 border-gray-100">
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign out</a>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-8">
            <div class="max-w-7xl mx-auto">
                <div class="mb-8">
                    <h1 class="text-3xl font-extrabold text-gray-900">Dashboard</h1>
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