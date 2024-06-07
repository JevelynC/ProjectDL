@extends('layout')

<style>
    * {
        font-family: 'Inter', sans-serif;
        color: var(--contrast);
    }

    body {
        background-color: var(--neutral);
        overflow-x: hidden;
    }

    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* For Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

@section('body')
    <section class="min-h-screen w-screen flex flex-col items-center pb-10">
        <h1 class="font-bold text-4xl text-center  pt-10 pb-5 max-sm:w-[280px]">Latihan Soal Modul 4</h1>
        <div class="soal-container md:w-3/5 max-md:w-4/5">
            @php
                $index = 0;
            @endphp
            <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                <div>
                    <p>Kamu harus belajar untuk ujian minggu depan, namun teman-temanmu mengajak untuk bermain game. Kamu
                        berpikir untuk ikut bermain game, toh ujian masih minggu depan. Tapi, kamu juga berpikir untuk
                        menolak
                        ajakan teman-temanmu karena ujian minggu depan sangat susah. Kira-kira pilihan mana yang akan kamu
                        ambil? Belajar atau bermain?</p>
                    <textarea name="" cols="30" rows="5" class="w-full my-3"></textarea>
                </div>
            </div>
            <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                <div>
                    <p>Dalam sebuah kelas terdapat 24 siswa dengan perbandingan jumlah siswa
                        laki-laki dan perempuan adalah 3:5. Berapa jumlah siswa perempuan dan laki-laki dalam kelas
                        tersebut?</p>
                    <textarea name="" cols="30" rows="5" class="w-full my-3"></textarea>
                </div>
            </div>
            <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                <div>
                    <p>Hasil penjumlahan dua bilangan positif adalah 15 dan selisihnya adalah 3. Apa bilangan tersebut?</p>
                    <textarea name="" cols="30" rows="5" class="w-full my-3"></textarea>
                </div>
            </div>
            <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                <div>
                    <ol class="list-[lower-alpha]">Budi didorong temannya hingga terjatuh
                        <li class="ml-5">Menurutmu apa yang dirasakan oleh Budi?</li>
                        <li class="ml-5">Apakah kamu pernah merasa seperti itu?</li>
                        <li class="ml-5">Apa yang akan membuatmu merasa lebih baik?</li>
                        <li class="ml-5">Apa yang bisa kamu katakan atau lakukan untuk Budi?</li>
                    </ol>
                    <textarea name="" cols="30" rows="5" class="w-full my-3" maxlength="2000"></textarea>
                </div>
            </div>
            <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                <div>
                    <ol class="list-[lower-alpha]">Siti mendapatkan nilai bagus namun kamu mengetahui bahwa itu adalah hasil menyontek
                        <li class="ml-5">Menurutmu apa yang dirasakan oleh Siti?</li>
                        <li class="ml-5">Apakah kamu pernah merasa seperti itu?</li>
                        <li class="ml-5">Apa yang akan membuatmu merasa lebih baik?</li>
                        <li class="ml-5">Apa yang bisa kamu katakan atau lakukan untuk Siti?</li>
                    </ol>
                    <textarea name="" cols="30" rows="5" class="w-full my-3" maxlength="2000"></textarea>
                </div>
            </div>
            <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                <div>
                    <p>Hasil penjumlahan dua bilangan positif adalah 15 dan selisihnya adalah 3. Apa bilangan tersebut?</p>
                    <textarea name="" cols="30" rows="5" class="w-full my-3" maxlength="1000"></textarea>
                </div>
            </div>
            <button class="w-full h-[50px] bg-[var(--primary)] text-xl font-bold">Submit</button>
        </div>
    </section>
@endsection
