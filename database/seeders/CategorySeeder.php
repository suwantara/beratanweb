<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Produk Susu' => 'Informasi tentang produk susu dan olahannya',
            'Peternakan' => 'Artikel seputar peternakan sapi perah',
            'Tips & Trik' => 'Panduan dan tips seputar pengolahan susu',
            'Kesehatan' => 'Informasi kesehatan terkait susu dan produk dairy',
            'Berita' => 'Berita terbaru seputar industri susu'
        ];

        foreach ($categories as $name => $description) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}
