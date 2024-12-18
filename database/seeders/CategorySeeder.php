<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'SiKecil', 'description' => 'Kelas 1-3'],
            ['name' => 'Siaga', 'description' => 'Kelas 4-6'],
            ['name' => 'Penggalang', 'description' => 'Kelas 7-9'],
            ['name' => 'Penegak', 'description' => 'Kelas 10-12']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
