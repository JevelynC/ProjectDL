<?php

namespace App\Http\Controllers;

use App\Models\Exercise1;
use App\Models\Exercise2;
use App\Models\Exercise3;
use App\Models\Exercise4;
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
                'option1' => 'Ceroboh',
                'option2' => 'Malas',
                'option3' => 'Bodoh',
                'option4' => 'Rajin',
            ], [
                'question' => 'Semalam mati listrik, rumahku jadi <u>gelap</u> gulita.',
                'option1' => 'Malam',
                'option2' => 'Suram',
                'option3' => 'Terang',
                'option4' => 'Susah',
            ], [
                'question' => 'Rena hanya memiliki <u>sedikit</u> permen.',
                'option1' => 'Kecil',
                'option2' => 'Kurang',
                'option3' => 'Banyak',
                'option4' => 'Minim',
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
                'option2' => 'Api',
                'option3' => 'Tanah',
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
            ]
        ];

        $tnfs = [
            [
                'question' => 'Menyontek pekerjaan orang lain',
            ], [
                'question' => 'Membantu seorang bapak yang terlihat kesusahan',
            ], [
                'question' => 'Mengambil sampah yang berserakan',
            ], [
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
        return view('user.exercise4');
    }

    public function check1(Request $request)
    {

        $status = [];
        $true = 0;
        for ($i = 0; $i < 16; $i++) {
            $currentAnswer = $request->input('answers' . $i);
            if ($currentAnswer == Exercise1::where('id', $i + 1)->first()->answer) {
                $status[$i] = 'true';
                $true++;
            } else {
                $status[$i] = 'false';
            }
        }

        return redirect()->route('exercise1')->with([
            'grade' => round($true * 6.25),
            'mulchoice1' => $status[0],
            'mulchoice2' => $status[1],
            'mulchoice3' => $status[2],
            'mulchoice4' => $status[3],
            'mulchoice5' => $status[4],
            'mulchoice6' => $status[5],
            'mulchoice7' => $status[6],
            'mulchoice8' => $status[7],
            'mulchoice9' => $status[8],
            'mulchoice10' => $status[9],
            'letters11' => $status[10],
            'letters12' => $status[11],
            'letters13' => $status[12],
            'letters14' => $status[13],
            'letters15' => $status[14],
            'letters16' => $status[15],
        ]);
    }

    public function check2(Request $request)
    {

        $status1 = [[], [], [], []];
        $true1 = 0;
        for ($i = 0; $i < 4; $i++) {
            $answer1 = $request->input('additionA' . $i);
            $answer2 = $request->input('additionB' . $i);
            $answer3 = $request->input('additionC' . $i);
            if ($answer1 == Exercise2::where('id', $i + 1)->first()->answer) {
                $true1++;
                $status1[$i][0] = 'true';
            } else {
                $status1[$i][0] = 'false';
            }
            if ($answer2 == Exercise2::where('id', $i + 1)->first()->answer2) {
                $true1++;
                $status1[$i][1] = 'true';
            } else {
                $status1[$i][1] = 'false';
            }
            if ($answer3 == Exercise2::where('id', $i + 1)->first()->answer3) {
                $true1++;
                $status1[$i][2] = 'true';
            } else {
                $status1[$i][2] = 'false';
            }
        }
        $status2 = [];
        $true2 = 0;
        for ($i = 0; $i < 14; $i++) {
            $answer = $request->input('answers' . $i);
            if ($answer == Exercise2::where('id', $i + 5)->first()->answer) {
                $true2++;
                $status2[$i] = 'true';
            } else {
                $status2[$i] = 'false';
            }
        }

        $grading = 0;
        $totalTrue = $true1 + $true2;
        $grading = round($totalTrue * 3.846153846153846);


        return redirect()->route('exercise2')->with([
            'grade' =>  $grading,
            'additionA1' => $status1[0][0],
            'additionB1' => $status1[0][1],
            'additionC1' => $status1[0][2],
            'additionA2' => $status1[1][0],
            'additionB2' => $status1[1][1],
            'additionC2' => $status1[1][2],
            'additionA3' => $status1[2][0],
            'additionB3' => $status1[2][1],
            'additionC3' => $status1[2][2],
            'additionA4' => $status1[3][0],
            'additionB4' => $status1[3][1],
            'additionC4' => $status1[3][2],
            'answers1' => $status2[0],
            'answers2' => $status2[1],
            'answers3' => $status2[2],
            'answers4' => $status2[3],
            'answers5' => $status2[4],
            'answers6' => $status2[5],
            'answers7' => $status2[6],
            'answers8' => $status2[7],
            'answers9' => $status2[8],
            'answers10' => $status2[9],
            'answers11' => $status2[10],
            'answers12' => $status2[11],
            'answers13' => $status2[12],
            'answers14' => $status2[13],
        ]);
    }
    public function check3(Request $request)
    {

        $status = [];
        $true = 0;
        for ($i = 0; $i < 11; $i++) {
            if ($i != 6) {
                $currentAnswer = $request->input('answers' . $i);
                if ($currentAnswer == Exercise3::where('id', $i + 1)->first()->answer) {
                    $status[$i] = 'true';
                    $true++;
                } else {
                    $status[$i] = 'false';
                }
            }
        }
        $answer_desc7 = Exercise3::where('id', '7')->first()->answer_desc;
        return redirect()->route('exercise3')->with([
            'grade' => round($true * 10),
            'answers1' => $status[0],
            'answers2' => $status[1],
            'answers3' => $status[2],
            'answers4' => $status[3],
            'answers5' => $status[4],
            'answers6' => $status[5],
            'answers7' => $answer_desc7,
            'answers8' => $status[7],
            'answers9' => $status[8],
            'answers10' => $status[9],
            'answers11' => $status[10]
        ]);
    }
    public function check4(Request $request)
    {


        $answer_desc1 = Exercise4::where('id', '1')->first()->answer_desc;
        $answer_desc2 = Exercise4::where('id', '2')->first()->answer_desc;
        $answer_desc3 = '<p>Kita dapat menyelesaikan soal ini dengan menggunakan sistem persamaan. Kita bisa menyatakan kedua bilangan sebagai x dan y. Dari informasi yang diberikan, kita dapat menyusun persamaan sebagai berikut:</p>
        <p>x + y = 15 (persamaan 1) </p> <p>x - y = 3 (persamaan 2)</p> <p>Dari persamaan 1, kita dapat menyatakan y sebagai y = 15 - x. Kita bisa substitusi y ke dalam persamaan 2 sehingga didapatkan:
x - (15 - x) = 3</p><p>Kita buka tanda kurungnya dengan mengalikan tanda - untuk tiap variabel di dalam kurung</p> <p>x - 15 + x = 3 </p>
<p>2x - 15 = 3</p><p> 2x = 18</p><p>x = 9</p><p>Kita dapat substitusi x ke dalam salah satu persamaan untuk mencari nilai y. Kita dapat menggunakan persamaan 1 sehingga didapatkan:</p>
<p>9 + y = 15 </p><p>y = 6</p><p>Jadi, kedua bilangan adalah 9 dan 6.</p>';
        $answer_desc4 = Exercise4::where('id', '4')->first();
        $answer_desc5 = Exercise4::where('id', '5')->first();
        return redirect()->route('exercise4')->with([
            'grade' => 100,
            'answers1' => $answer_desc1,
            'answers2' => $answer_desc2,
            'answers3' => $answer_desc3,
            'answers4' => $answer_desc4,
            'answers5' => $answer_desc5,
        ]);
    }

    public function module1()
    {
        return view('user.module1');
    }

    public function module2()
    {
        return view('user.module2');
    }

    public function module3()
    {
        return view('user.module3');
    }

    public function module4()
    {
        return view('user.module4');
    }
}
