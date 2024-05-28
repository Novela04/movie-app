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
            'title' =>'Jojo Bijare Adventure',
            'user' =>'@Muhammad_Fikri',
            'rating' => '3/5',
            'date' => '26 Desember 2024', 
        ]);
    
        Review::create([
            'id' => 2,
            'title' =>'Noragami',
            'user' =>'@Muhammad_Faisal',
            'rating' => '3,5/5',
            'date' => '16 April 2024',   
        ]);
    
        Review::create([
            'id' => 3,
            'title' =>'Wind Breaker',
            'user' =>'@Muhammad_Dendi',
            'rating' => '4/5',
            'date' => '11 Mey 2024',   
        ]);

        Review::create([
            'id' => 4,
            'title' =>'Spy x Family',
            'user' =>'@Muhammad_Adi',
            'rating' => '4,5/5',
            'date' => '10 Juli 2024',   
        ]);
    
        Review::create([
            'id' => 5,
            'title' =>'Attack on Titan',
            'user' =>'@Muhammad_Asep',
            'rating' => '5/5',
            'date' => '15 Novemver 2024',     
        ]);
    }
}
