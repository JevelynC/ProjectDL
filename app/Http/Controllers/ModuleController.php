<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function module()
    {
        $modules = [
            [
                'title' => 'Modul Pembelajaran 1',
                'description' => 'Modul ini ditujukan kepada anak berusia 3-5 tahun. Modul ini akan membantu anak dalam mengenal warna, angka, dan huruf',
                'assessment' => '/exercise1',
                'module' => '/module1',
                'image' => 'asset/modul1.png'
            ], [
                'title' => 'Modul Pembelajaran 2',
                'description' => 'Modul ini ditujukan kepada anak berusia 6-9 tahun. Modul ini akan melatih perhitungan sederhana, membaca jam, membedakan posisi, antonim, dan identifikasi masalah',
                'assessment' => '/exercise2',
                'module' => '/module2',
                'image' => 'asset/modul1.png'
            ], [
                'title' => 'Modul Pembelajaran 3',
                'description' => 'Modul ini ditujukan kepada anak berusia 10-12 tahun. Modul ini akan melatih pengetahuan umum, menyelesaikan masalah, dan menentukan kebenaran',
                'assessment' => '/exercise3',
                'module' => '/module3',
                'image' => 'asset/modul1.png'
            ], [
                'title' => 'Modul Pembelajaran 4',
                'description' => 'Modul ini ditujukan kepada anak berusia diatas 12 tahun. Modul ini akan melatih pengambilan keputusan, menyelesaikan masalah, dan pendidikan moral',
                'assessment' => '/exercise4',
                'module' => '/module4',
                'image' => 'asset/modul1.png'
            ]
        ];
        return view('user.module', ['modules' => $modules]);
    }

    public function exercise1()
    {

        $multipleChoices = [
            [
                'img' => 'asset/module1/lemon.jpg',
                'question' => 'Apa warna lemon pada gambar berikut?',
                'option1' => 'Hijau',
                'option2' => 'Kuning',
                'option3' => 'Ungu',
                'option4' => 'Biru'
            ], [
                'img' => 'asset/module1/carrot.jpg',
                'question' => 'Apa warna wortel pada gambar berikut?',
                'option1' => 'Kuning',
                'option2' => 'Hijau',
                'option3' => 'Ungu',
                'option4' => 'Oranye'
            ], [
                'img' => 'asset/module1/chili.png',
                'question' => 'Apa warna cabai pada gambar berikut?',
                'option1' => 'Merah',
                'option2' => 'Biru',
                'option3' => 'Hijau',
                'option4' => 'Kuning'
            ], [
                'img' => 'asset/module1/cabbage.jpg',
                'question' => 'Apa warna kubis pada gambar berikut?',
                'option1' => 'Merah',
                'option2' => 'Ungu',
                'option3' => 'Hijau',
                'option4' => 'Kuning'
            ], [
                'img' => 'asset/module1/2animals.jpg',
                'question' => 'Berapa jumlah hewan pada gambar berikut?',
                'option1' => '3',
                'option2' => '5',
                'option3' => '2',
                'option4' => '1'
            ], [
                'img' => 'asset/module1/4animals.jpg',
                'question' => 'Berapa jumlah hewan pada gambar berikut?',
                'option1' => '3',
                'option2' => '5',
                'option3' => '7',
                'option4' => '4'
            ], [
                'img' => 'asset/module1/6animals.jpg',
                'question' => 'Berapa jumlah hewan pada gambar berikut?',
                'option1' => '9',
                'option2' => '6',
                'option3' => '7',
                'option4' => '8'
            ], [
                'img' => 'asset/module1/5animals.jpg',
                'question' => 'Berapa jumlah hewan pada gambar berikut?',
                'option1' => '6',
                'option2' => '7',
                'option3' => '5',
                'option4' => '4'
            ], [
                'img' => 'asset/module1/3animals.jpg',
                'question' => 'Berapa jumlah hewan pada gambar berikut?',
                'option1' => '2',
                'option2' => '4',
                'option3' => '5',
                'option4' => '3'
            ], [
                'img' => 'asset/module1/7animals.jpeg',
                'question' => 'Berapa jumlah hewan pada gambar berikut?',
                'option1' => '7',
                'option2' => '6',
                'option3' => '9',
                'option4' => '8'
            ],
        ];


        $letters = [
            [
                'img' => 'asset/module1/chair.avif',
                'word1' => 'K',
                'word2' => 'RSI',
            ], [
                'img' => 'asset/module1/table.png',
                'word1' => 'ME',
                'word2' => 'A',
            ], [
                'img' => 'asset/module1/wheel.jpg',
                'word1' => 'R',
                'word2' => 'DA',
            ], [
                'img' => 'asset/module1/hat.jpg',
                'word1' => 'TO',
                'word2' => 'I',
            ], [
                'img' => 'asset/module1/ball.jpg',
                'word1' => 'BOL',
                'word2' => '',
            ], [
                'img' => 'asset/module1/shirt.avif',
                'word1' => 'BA',
                'word2' => 'U',
            ]
        ];
        return view('user.exercise1', ['multipleChoices' => $multipleChoices, 'letters' => $letters]);
    }

    public function exercise2()
    {

        $additions = [
            [
                'img1' => 'asset/module2/apple1.jpg',
                'img2' => 'asset/module2/apple2.jpg'
            ], [
                'img1' => 'asset/module2/pear1.jpg',
                'img2' => 'asset/module2/pear2.jpg'
            ], [
                'img1' => 'asset/module2/strawberry1.jpg',
                'img2' => 'asset/module2/strawberry2.jpg'
            ], [
                'img1' => 'asset/module2/pineapple1.jpg',
                'img2' => 'asset/module2/pineapple1.jpg'
            ]
        ];

        $multipleChoices1 = [
            [
                'question' => 'Rina juara kelas karena <u>rajin</u> belajar.',
                'option1' => 'Giat',
                'option2' => 'Malas',
                'option3' => 'Tekun',
                'option4' => 'Ceroboh',
            ], [
                'question' => 'Soal itu harus dikerjakan secara <u>teliti</u>.',
                'option1' => 'Giat',
                'option2' => 'Malas',
                'option3' => 'Tekun',
                'option4' => 'Ceroboh',
            ], [
                'question' => 'Semalam mati listrik, rumahku jadi <u>gelap</u> gulita.',
                'option1' => 'Giat',
                'option2' => 'Malas',
                'option3' => 'Tekun',
                'option4' => 'Ceroboh',
            ], [
                'question' => 'Rena hanya memiliki <u>sedikit</u> permen.',
                'option1' => 'Giat',
                'option2' => 'Malas',
                'option3' => 'Tekun',
                'option4' => 'Ceroboh',
            ], [
                'question' => 'Rumah Rina <u>jauh</u> dari rumah Desi.',
                'option1' => 'Asing',
                'option2' => 'Dekat',
                'option3' => 'Larut',
                'option4' => 'Renggang',
            ]
        ];

        $multipleChoices2 = [
            [
                'img' => 'asset/module2/sleep.jpg',
                'question' => 'Alasan kita membutuhkan tidur?',
                'option1' => 'Karena mengantuk',
                'option2' => 'Karena ingin bermain',
                'option3' => 'Karena lapar',
            ], [
                'img' => 'asset/module2/itchy.jpg',
                'question' => 'Apa yang mungkin membuat kulit kita gatal?',
                'option1' => 'Sabun mandi',
                'option2' => 'Air bersih',
                'option3' => 'Digigit nyamuk',
            ], [
                'img' => 'asset/module2/hearing.jpg',
                'question' => 'Bagian tubuh apa yang digunakan untuk mendengar?',
                'option1' => 'Indra pengecap - lidah',
                'option2' => 'Indra pendengaran - telinga',
                'option3' => 'Indra penglihatan - mata',
            ], [
                'img' => 'asset/module2/playing.jpg',
                'question' => 'Dimana mereka bermain?',
                'option1' => 'Di rumah sakit',
                'option2' => 'Di taman',
                'option3' => 'Di jalan raya',
            ], [
                'img' => 'asset/module2/pencil.jpg',
                'question' => 'Saat sedang mengerjakan tugas, tiba-tiba pensilmu tumpul atau patah. Apa yang harus dilakukan?',
                'option1' => 'Meraut pensil',
                'option2' => 'Menulis dengan pensil tumpul',
                'option3' => 'Tidak jadi mengerjakan tugas',
            ]
        ];
        return view('user.exercise2', [
            'additions' => $additions,
            'multipleChoices1' => $multipleChoices1,
            'multipleChoices2' => $multipleChoices2
        ]);
    }

    public function exercise3()
    {
        $multipleChoices1 = [
            [
                'question' => 'Kejadian yang pernah kita alami pada masa lalu disebut',
                'option1' => 'Legenda',
                'option2' => 'Dongeng',
                'option3' => 'Pengalaman',
            ], [
                'question' => 'Gelas, piring, dan sendok termasuk peralatan',
                'option1' => 'Mandi',
                'option2' => 'Makan',
                'option3' => 'Memasak',
            ], [
                'question' => 'Perahu dapat berlayar karena ada',
                'option1' => 'Angin',
                'option2' => 'Udara',
                'option3' => 'Air',
            ], [
                'question' => 'Kita dapat menabung uang di … setiap hari',
                'option1' => 'Celengan',
                'option2' => 'Bantal',
                'option3' => 'Toko',
            ], [
                'question' => 'Kata tanya yang digunakan untuk menanyakan alasan atau penyebab',
                'option1' => 'Apa',
                'option2' => 'Siapa',
                'option3' => 'Mengapa',
            ], [
                'question' => 'Benda yang bentuknya berubah-ubah dan memiliki volume tetap adalah',
                'option1' => 'Sedotan',
                'option2' => 'Jeruk',
                'option3' => 'Jus jeruk',
            ], [
                'question' => 'Monica selalu menggunakan kaus pelanginya untuk melakukan seluruh kegiatan mulai dari memetik buah beri, bermain lumpur, membersihkan tangan sebelum kana, hingga membersihkan mulutnya setelah makan. Karena kaus Monica sangat kotor dan bau, ibu meminta agar kaus Monica dicuci terlebih dahulu, namun, Monica menolaknya. Ibu memaksa Monica untuk membuka kausnya tetapi Monica tidak mau melepaskan kaus tersebut hingga sehingga mereka berdua saling menarik kaus pelangi Monica. setelah lama ditarik, akhirnya Monica mau mencuci kausnya. Setelah dicuci, Mo ingin memakai kaus pelanginya. Tapi ternyata kaus tersebut melar karena ditarik-tarik.',
                'option1' => '',
                'option2' => 'Jeruk',
                'option3' => 'Jus jeruk',
            ]
        ];

        $tnfs = [
            [
                'question' => 'Menyontek',
            ],  [
                'question' => 'Membantu seorang bapak yang terlihat kesusahan',
            ],  [
                'question' => 'Mengambil sampah yang berserakan',
            ],  [
                'question' => 'Mengabaikan teman yang meminta tolong karena sikapnya menyebalkan',
            ]
        ];
        return view('user.exercise3', [
            'multipleChoices1' => $multipleChoices1,
            'tnfs' => $tnfs
        ]);
    }

    public function exercise4()
    {
        return view('user.exercise4', []);
    }
}
