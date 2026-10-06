<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            ['name' => 'Teknologi', 'description' => 'Buku seputar teknologi dan komputer'],
            ['name' => 'Novel', 'description' => 'Buku fiksi dan cerita'],
            ['name' => 'Sains', 'description' => 'Buku ilmu pengetahuan alam'],
        ]);
    }
}