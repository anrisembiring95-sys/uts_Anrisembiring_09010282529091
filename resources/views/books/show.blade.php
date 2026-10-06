<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <strong>Judul:</strong> {{ $book->title }}
                </div>
                <div class="mb-4">
                    <strong>Kategori:</strong> {{ $book->category->name ?? '-' }}
                </div>
                <div class="mb-4">
                    <strong>Penulis:</strong> {{ $book->author }}
                </div>
                <div class="mb-4">
                    <strong>Penerbit:</strong> {{ $book->publisher }}
                </div>
                <div class="mb-4">
                    <strong>Tahun Terbit:</strong> {{ $book->year }}
                </div>
                <div class="mb-4">
                    <strong>Stok:</strong> {{ $book->stock }}
                </div>
                <a href="{{ route('books.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
            </div>
        </div>
    </div>
</x-app-layout>