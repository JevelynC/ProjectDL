<?php

namespace Database\Seeders;

use App\Models\Exercise4;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Exercise4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'answer_desc' => 'Semua tergantung pilihanmu masing-masing dan prioritas. Apabila kamu merasa sudah menguasai materi yang ada, maka ikut bermain sebentar bersama teman teman tidak jadi masalah. Sebagai manusia, kita juga butuh istirahat sesekali dari kesibukan kita. Namun apabila kamu belum memahami materi yang ada, maka coba untuk tolah dengan halus ajakn temanmu dan fokus belajar terlebih dahulu. Mungkin kamu bisa menawarkan hari lain untuk bermain bersama, mungkin setelah ujian'
            ],
            [
                'answer_desc' => 'Dalam perbandingan 3:5, jumlah bagian adalah 3+5 = 8. Kita dapat menentukan jumlah siswa laki-laki dan perempuan dengan cara mengalikan rasio siswa per keseluruhan jumlah bagian dengan jumlah seluruh siswa.
Untuk mendapatkan jumlah siswa laki-laki kita akan mengalikan ⅜ dengan 24 dan siswa perempuan dengan mengalikan ⅝. Sehingga didapatkan jumlah siswa laki-laki sebanyak 8 dan jumlah siswa perempuan sebanyak 16.'
            ],
            [
                'answer_desc' => 'Kita dapat menyelesaikan soal ini dengan menggunakan sistem persamaan. Kita bisa menyatakan kedua bilangan sebagai x dan y. Dari informasi yang diberikan, kita dapat menyusun persamaan sebagai berikut:
x + y = 15 (persamaan 1) 
x - y = 3 (persamaan 2)
Dari persamaan 1, kita dapat menyatakan y sebagai y = 15 - x. Kita bisa substitusi y ke dalam persamaan 2 sehingga didapatkan:
x - (15 - x) = 3 
Kita buka tanda kurungnya dengan mengalikan tanda - untuk tiap variabel di dalam kurung
x - 15 + x = 3 
2x - 15 = 3 
2x = 18 
x = 9
Kita dapat substitusi x ke dalam salah satu persamaan untuk mencari nilai y. Kita dapat menggunakan persamaan 1 sehingga didapatkan:
9 + y = 15 
y = 6
Jadi, kedua bilangan adalah 9 dan 6.
'
            ],
            [
                'answer_desc' => 'Merasa marah atau sedih saat didorong teman hingga terjatuh adalah hal yang wajar, karena tiap manusia pasti memiliki serta merasakan emosi atau perasaan. Tidak ada emosi yang salah asalkan kita tidak menyalurkan emosi itu ke hal-hal buruk misalnya memukul atau berkata kasar pada teman yang mendorong Budi hingga terjatuh',
                'answer_desc2' => 'Apabila kamu pernah merasakan hal itu, apakah kamu memiliki perasaan yang sama dengan Budi? Jika iya, maka hal itu wajar. Tapi apabila kalian tidak merasakan hal yang sama dengan Budi, misal menganggap itu sebagai guyonan maka hal itu juga wajar asalkan semua pihak yang terlibat sama-sama menanggapi dengan baik.',
                'answer_desc3' => 'Apabila kamu didorong hingga terjatuh dan merasa marah atau sedih, kamu dapat mengatasinya dengan melakukan hal-hal yang membuatmu lebih baik. Misalnya memaafkan teman yang mendorongmu. Mungkin mereka tidak sengaja mendorongmu dan memaafkan mereka dapat menjadi salah satu cara untuk kamu menjadi lebih baik dan tidak memendam perasaan.',
                'answer_desc4' => 'Apabila kamu melihat Budi terjatuh, kamu dapat menolong Budi dan memberikannya semangat atau menenangkannya agar tidak sedih kembali.'
            ],
            [
                'answer_desc' => 'Merasa senang ketika mendapat nilai bagus adalah hal yang wajar. Namun apabila nilai itu didapatkan dari cara yang kurang tepat, pasti akan ada rasa bersalah yang akan menghampiri Siti di kemudian hari',
                'answer_desc2' => 'Kamu pasti senang ketika mendapatkan nilai bagus dan dipuji oleh orang-orang sekitar. Namun apabila kamu mendapatkannya dari hasil mencontek, pasti lama kelamaan kamu akan merasa bersalah karena telah menipu orang-orang disekitarmu. Apabila orang-orang mengetahui bahwa kamu menyontek pasti mereka akan merasa sedih dan kecewa dengan tindakanmu.',
                'answer_desc3' => 'Kamu dapat merasa lebih baik dengan tidak mengulangi tindakan itu dan belajar dengan rajin untuk mendapatkan nilai yang bagus tanpa menyontek. Apabila kamu merasa siap, kamu juga dapat menceritakan dengan orang yang lebih tua dan kamu percayai bahwa kamu pernah menyontek. Pasti mereka akan memaafkan dan menasehatimu agar tidak menyontek lagi.',
                'answer_desc4' => 'Apabila kamu melihat Siti menyontek saat ujian, kamu dapat langsung menegurnya untuk tidak melakukan hal itu. Kamu juga dapat melaporkan kepada guru apabila melihat temanmu menyontek',
            ],
        ];
        foreach ($answers as $answer) {
            Exercise4::create($answer);
        }
    }
}
