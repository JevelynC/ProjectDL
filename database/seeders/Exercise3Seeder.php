<?php

namespace Database\Seeders;

use App\Models\Exercise3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Exercise3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'answer' => 'Pengalaman'
            ], [
                'answer' => 'Makan'
            ], [
                'answer' => 'Angin'
            ], [
                'answer' => 'Celengan'
            ], [
                'answer' => 'Mengapa'
            ], [
                'answer' => 'Jus jeruk'
            ], [
                'answer_desc' => 'Kaus Monica yang kotor namun Monica tidak mau menyerahkan kausnya untuk dicuci. Apabila Monica langsung memberikan kausnya, maka tidak akan ada tarik menarik kaus, sehingga kaus Monica tidak akan melar dan bisa digunakan kembali oleh Monica',
            ], [
                'answer' => 'false'
            ], [
                'answer' => 'true'
            ], [
                'answer' => 'true'
            ], [
                'answer' => 'false'
            ],
        ];
        foreach ($answers as $answer) {
            Exercise3::create($answer);
        }
    }
}
