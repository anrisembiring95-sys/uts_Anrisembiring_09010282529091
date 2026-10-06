<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['category_id' => 1, 'title' => 'Belajar Laravel', 'author' => 'Andi', 'publisher' => 'MediaKita', 'year' => 2022, 'stock' => 10],
            ['category_id' => 1, 'title' => 'Pemrograman Web', 'author' => 'Budi', 'publisher' => 'Informatika', 'year' => 2023, 'stock' => 5],
            ['category_id' => 2, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang', 'year' => 2005, 'stock' => 8],
            ['category_id' => 2, 'title' => 'Bumi', 'author' => 'Tere Liye', 'publisher' => 'Gramedia', 'year' => 2014, 'stock' => 12],
            ['category_id' => 3, 'title' => 'Fisika Dasar', 'author' => 'Sutrisno', 'publisher' => 'Erlangga', 'year' => 2019, 'stock' => 7],
        ]);
    }
}