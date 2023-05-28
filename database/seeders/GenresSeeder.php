<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Action',
            'desk' => 'Genre about action-packed movies',
        ]);

        Genre::create([
            'nama' => 'Comedy',
            'desk' => 'Genre of funny and humorous movies',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'desk' => 'Genre of movies with emotional and serious themes',
        ]);
    }
}
