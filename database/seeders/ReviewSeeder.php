<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' =>'1',
            'user' =>'@Muhammad_Fikri',
            'rating' => '3/5',
            'date' => '26 Desember 2024', 
        ]);
    
        Review::create([
            'id' => 2,
            'movie_id' =>'2',
            'user' =>'@Muhammad_Faisal',
            'rating' => '3,5/5',
            'date' => '16 April 2024',   
        ]);
    
        Review::create([
            'id' => 3,
            'movie_id' =>'3',
            'user' =>'@Muhammad_Dendi',
            'rating' => '4/5',
            'date' => '11 Mey 2024',   
        ]);
    
       
    }
}
