<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Buku Perpustakaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Tombol Tambah Buku -->
                <div class="mb-4">
                    <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                        + Tambah Buku
                    </a>
                </div>

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="min-w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">No</th>
                            <th class="border border-gray-300 px-4 py-2">Judul</th>
                            <th class="border border-gray-300 px-4 py-2">Kategori</th>
                            <th class="border border-gray-300 px-4 py-2">Penulis</th>
                            <th class="border border-gray-300 px-4 py-2">Penerbit</th>
                            <th class="border border-gray-300 px-4 py-2">Tahun</th>
                            <th class="border border-gray-300 px-4 py-2">Stok</th>
                            <th class="border border-gray-300 px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $index => $book)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->category->name ?? '-' }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->author }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->publisher }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ $book->year }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ $book->stock }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <a href="{{ route('books.show', $book->id) }}" class="text-blue-600 mr-2">Detail</a>
                                    <a href="{{ route('books.edit', $book->id) }}" class="text-yellow-600 mr-2">Edit</a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>