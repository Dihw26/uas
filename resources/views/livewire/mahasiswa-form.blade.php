<div>
    <!-- Form -->
    <form wire:submit.prevent="save" class="p-4 bg-gray-50 rounded-lg shadow-md space-y-4">
        <h2 class="text-xl font-semibold text-gray-800">Form Mahasiswa</h2>
        <div class="flex flex-col">
            <label for="npm" class="text-sm font-medium text-gray-700">NPM</label>
            <input type="text" id="npm" wire:model="npm" required
                class="mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <div class="flex flex-col">
            <label for="nama" class="text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="nama" wire:model="nama" required
                class="mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <div class="flex flex-col">
            <label for="prodi" class="text-sm font-medium text-gray-700">Prodi</label>
            <input type="text" id="prodi" wire:model="prodi" required
                class="mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <div>
            <button type="submit"
            class="px-3 py-1 text-white font-semibold rounded-md bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:outline-none">
            save the data
            </button>
        </div>
    </form>

    <!-- Data Mahasiswa -->
    <div class="mt-6 p-4 bg-white rounded-lg shadow-md">
        <h3 class="text-lg font-medium text-gray-800 mb-4">Data Mahasiswa</h3>
        <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">NPM</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Prodi</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($mahasiswa as $mahasiswa)
                <tr class="border-b border-gray-200">
                    <td class="px-4 py-2 text-gray-800">{{ $mahasiswa->npm }}</td>
                    <td class="px-4 py-2 text-gray-800">{{ $mahasiswa->nama }}</td>
                    <td class="px-4 py-2 text-gray-800">{{ $mahasiswa->prodi }}</td>
                    <td class="px-4 py-2">
                        <button wire:click="delete({{ $mahasiswa->id }})"
                            class="px-3 py-1 text-white font-semibold rounded-md bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:outline-none">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Export Buttons -->
    <div class="mt-4 flex space-x-4">
        <button wire:click="exportExcel"
        class="px-3 py-1 text-white font-semibold rounded-md bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:outline-none">
            Buat Excel
        </button>
    </div>
</div>
