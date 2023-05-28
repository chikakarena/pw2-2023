<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Parasite',
            'user_id' => 'User 1',
            'rating' => 9.0,
            'review' => 'Film drama yang berkisahkan tentang satu keluarga yang sedang dalam masalah',
            'tanggal' => '19-12-2021',
        ]);

        Review::create([
            'film' => 'I Saw The Devil',
            'user_id' => 'User 2',
            'rating' => 7.6,
            'review' => 'Film misteri thriller menegangkan antara protagonis dengan serial killer',
            'tanggal' => '19-12-2021',
        ]);
    }
}
