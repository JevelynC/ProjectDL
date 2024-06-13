@extends('layout')

<style>
    * {
        font-family: 'Inter', sans-serif;
        color: var(--contrast);
    }

    body {
        /* background: var(--secondary); */
        min-height: 100vh;
        min-width: 100vw;
        padding: 0;
        margin: 0;
        overflow-x: hidden;
        background-color: hsla(0, 45%, 87%, 1);
        /* background-image:
            radial-gradient(at 0% 63%, hsla(177, 96%, 78%, 0.74) 0px, transparent 50%),
            radial-gradient(at 40% 20%, hsla(28, 100%, 74%, 0.39) 0px, transparent 50%),
            radial-gradient(at 80% 0%, hsla(189, 100%, 56%, 0.64) 0px, transparent 50%),
            radial-gradient(at 80% 50%, hsla(340, 100%, 76%, 1) 0px, transparent 50%),
            radial-gradient(at 16% 83%, hsla(22, 100%, 77%, 1) 0px, transparent 50%),
            radial-gradient(at 75% 97%, hsla(240, 100%, 70%, 0.74) 0px, transparent 50%),
            radial-gradient(at 4% 21%, hsla(335, 100%, 76%, 0.77) 0px, transparent 50%); */
        background-size: cover;
    }

    .color-container {
        background: rgb(255, 247, 226);
        background-size: cover;
    }

    .number-container {
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{ asset('asset/module/angka/bg-sky.png') }});
        background-size: cover;
    }

    .cloud:nth-child(2) {
        top: 25% !important;
    }

    .cloud:nth-child(4) {
        top: 70% !important;
    }

    .cloud:nth-child(5) {
        top: 140% !important;
    }
</style>

@section('body')
<section class="min-h-screen min-w-screen py-10  px-5 sm:px-0">
    <div class="clouds">
        @for ($i = 1; $i <= 7; $i++)
            <div class="cloud cloud{{ $i }}"></div>
        @endfor
    </div>
    <div class="w-full flex items-center flex-col">
        <div class="w-full sm:w-9/12 mb-10">
            <a href="{{ route('user.module') }}">
                <button type="button"
                    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto hover:bg-gray-100">
                    <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <span>Kembali</span>
                </button>
            </a>

        </div>
    </div>
    <div class="w-full flex items-center flex-col">
        <div
            class="title-container w-full sm:w-9/12 py-10 bg-[var(--neutral)] rounded-2xl border-[var(--white)] border-[6px]">
            <h1
                class="text-4xl sm:text-5xl font-extrabold drop-shadow-2xl text-[var(--contrast)] uppercase text-center">
                Modul 4</h1>
        </div>
        <div class="color-container sm:w-9/12 mt-10 p-5 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
            <h1
                class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center lg:px-4 py-2">
                Decision Making</h1>
            <div class="flex flex-col sm:px-5 sm:pt-5">
                <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4">Sebelum kamu memutuskan
                    jawaban dari sebuah masalah, berikut hal-hal yang harus kamu lakukan:

                </h1>
                <div class="grid grid-cols-12">
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">1.
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Mengidentifikasi
                            masalahnya
                        </h1>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">2.
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Mengumpulkan
                            informasi dan data yang terkait (jika ada)

                        </h1>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">3.
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Pertimbangkan dan
                            buat berbagai alternatif pilihan

                        </h1>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">4.
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Memikirkan pilihan
                            mana yang terbaik

                        </h1>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">5.
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Pilih pilihan yang
                            terbaik
                        </h1>
                    </div>
                </div>
                <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4">
                    Tips: jangan takut salah karena sukses berawal dari kegagalan.</h1>
            </div>

        </div>

        <div class="color-container sm:w-9/12 mt-10 p-5 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
            <h1
                class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center lg:px-4 py-2">
                Moral Development</h1>
            <div class="flex flex-col sm:px-5 sm:pt-5">
                <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4"><b>Moral</b> adalah
                    kebiasaan
                    maupun sopan santun yang telah menjadi kebiasaan bagi seseorang di suatu budaya.
                </h1>
                <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4">Beberapa contoh nilai moral
                    yaitu:
                </h1>
                <div class="grid grid-cols-12">
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">-
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Kejujuran: Orang
                            yang jujur akan dihargai oleh orang lain
                        </h1>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">-
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Saling menghargai:
                            Meskipun terdapat perbedaan antara sesama, namun kita tetap harus saling menghargai

                        </h1>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">-
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Gotong royong: Kita
                            bisa saling membantu dan bekerja sama dalam menyelesaikan suatu pekerjaan

                        </h1>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">-
                        </h1>
                    </div>
                    <div class="col-span-11">
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Toleransi: Kita
                            tidak boleh menghakimi seseorang yang berbeda dengan kita, sebaliknya kita harus menerima
                            perbedaan tersebut

                        </h1>
                    </div>
                </div>
                <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4">
                    Nilai moral bermanfaat agar seseorang dapat menentukan apa yang benar atau salah, baik atau buruk,
                    dan pantas atau tidak pantas dalam interaksi dengan orang lain. Jadi, kita harus terus mengembangkan
                    moral kita ke arah yang baik.</h1>
            </div>
        </div>
    </div>
</section>
@endsection