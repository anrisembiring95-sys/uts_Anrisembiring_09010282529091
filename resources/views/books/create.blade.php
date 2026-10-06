<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Buku Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Judul Buku</label>
                        <input type="text" name="title" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Kategori</label>
                        <select name="category_id" class="w-full border border-gray-300 rounded px-3 py-2" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Penulis</label>
                        <input type="text" name="author" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Penerbit</label>
                        <input type="text" name="publisher" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Tahun Terbit</label>
                        <input type="number" name="year" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Stok</label>
                        <input type="number" name="stock" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                    <a href="{{ route('books.index') }}" class="ml-2 text-gray-600">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>