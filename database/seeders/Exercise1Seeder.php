<?php

namespace Database\Seeders;

use App\Models\Exercise1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Exercise1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            ['answer' => 'Kuning'],
            ['answer' => 'Oranye'],
            ['answer' => 'Merah'],
            ['answer' => 'Hijau'],
            ['answer' => '2'],
            ['answer' => '4'],
            ['answer' => '6'],
            ['answer' => '5'],
            ['answer' => '3'],
            ['answer' => '7'],
            ['answer' => 'U'],
            ['answer' => 'J'],
            ['answer' => 'O'],
            ['answer' => 'P'],
            ['answer' => 'A'],
            ['answer' => 'J'],
        ];

        foreach ($answers as $answer) {
            Exercise1::create($answer);
        }
    }
}
