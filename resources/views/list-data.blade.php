
@include('partials.header')
<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <div class="p-6">
        <x-card>
            <div class="flex flex-col">
                <x-button class="self-start bg-green-500 text-white">
                    Tambah Data
                </x-button>
                <div class="border-t border-gray-200 m-4"></div>
                <table class="border-collapse border border-gray-400">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="border border-gray-300 px-6 py-3 text-left font-semibold">No</th>
                            <th class="border border-gray-300 px-6 py-3 text-left font-semibold">Nama</th>
                            <th class="border border-gray-300 px-6 py-3 text-left font-semibold">NPM</th>
                        </tr>

                    </thead>
                    <tbody class="text-gray-600">
                        <tr>
                            <td class="border border-gray-300 px-6 py-4 text-left">1</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">Agisna Rizkan Rizkullah</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">5520123041</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-6 py-4 text-left">2</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">Raden Muhammad Kahfi</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">5520123066</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-6 py-4 text-left">3</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">Piqri</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">5520123041</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-6 py-4 text-left">4</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">Hana Sabatina</td>
                            <td class="border border-gray-300 px-6 py-4 text-left">5520123041</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>
    </div>
</div>
