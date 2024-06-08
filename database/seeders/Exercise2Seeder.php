<?php

namespace Database\Seeders;

use App\Models\Exercise2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Exercise2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'answer' => '7',
                'answer2' => '6',
                'answer3' => '13',
            ], [
                'answer' => '6',
                'answer2' => '5',
                'answer3' => '11',
            ], [
                'answer' => '6',
                'answer2' => '8',
                'answer3' => '14',
            ], [
                'answer' => '8',
                'answer2' => '8',
                'answer3' => '16',
            ], [
                'answer' => '1',
            ], [
                'answer' => '2',
            ], [
                'answer' => '4',
            ], [
                'answer' => '8',
            ], [
                'answer' => 'Malas',
            ], [
                'answer' => 'Ceroboh',
            ], [
                'answer' => 'Terang',
            ], [
                'answer' => 'Banyak',
            ], [
                'answer' => 'Dekat',
            ], [
                'answer' => 'Karena mengantuk',
            ], [
                'answer' => 'Digigit nyamuk',
            ], [
                'answer' => 'Indra pendengaran - telinga',
            ], [
                'answer' => 'Di taman',
            ], [
                'answer' => 'Meraut pensil',
            ]
        ];
        foreach ($answers as $answer) {
            Exercise2::create($answer);
        }

    }
}
