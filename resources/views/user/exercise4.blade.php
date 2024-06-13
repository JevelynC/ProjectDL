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

    .cloud:nth-child(4) {
        top: 20% !important;
    }

    .cloud:nth-child(5) {
        top: 175% !important;
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

    .ans3 p {
        color: rgb(20, 83, 45);
    }
</style>

@section('body')
{{-- @dd(session('answers5')) --}}
<!-- <div class="clouds">
    @for ($i = 1; $i <= 7; $i++)
        <div class="cloud cloud{{ $i }}"></div>
    @endfor
</div> -->
<form action="{{ route('check4') }}" method="POST" class="m-0">
    @csrf
    <section class="min-h-screen w-screen flex flex-col items-center py-10">
        <div class="w-full flex items-center flex-col">
            <div class="w-full md:w-3/5 max-md:w-4/5 mb-10">
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
        <div class="title-container  md:w-3/5 max-md:w-4/5 py-10 bg-[var(--neutral)] rounded-2xl border-[var(--white)] border-[6px]"
            data-aos="zoom-in" data-aos-easing="ease-out-cubic">
            <h1
                class="text-3xl sm:text-5xl font-extrabold drop-shadow-2xl text-[var(--contrast)] uppercase text-center">
                Latihan Soal Modul 4</h1>
        </div>
        <div class="soal-container md:w-3/5 max-md:w-4/5">
            @php
                $index = 0;
            @endphp
            <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5"
                data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                <div>
                    <p>Kamu harus belajar untuk ujian minggu depan, namun teman-temanmu mengajak untuk bermain game.
                        Kamu berpikir untuk ikut bermain game, toh ujian masih minggu depan. Tapi, kamu juga berpikir
                        untuk menolak ajakan teman-temanmu karena ujian minggu depan sangat susah. Kira-kira pilihan
                        mana yang akan kamu ambil? Belajar atau bermain?</p>
                    <textarea name="jawaban0" cols="30" rows="5"
                        class="w-full my-3 p-3 bg-[var(--white)] border-4 border-[var(--contrast)] rounded-lg"></textarea>
                    @if (session('answers1'))
                        <div
                            class="w-full h-fit p-3 bg-green-500 bg-opacity-40 flex justify-center items-center rounded-lg">
                            <p class="text-green-900 font-semibold">{{ session('answers1') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5"
                data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                <div>
                    <p>Dalam sebuah kelas terdapat 24 siswa dengan perbandingan jumlah siswa
                        laki-laki dan perempuan adalah 3:5. Berapa jumlah siswa perempuan dan laki-laki dalam kelas
                        tersebut?</p>
                    <textarea name="jawaban1" cols="30" rows="5"
                        class="w-full my-3 p-3 bg-[var(--white)] border-4 border-[var(--contrast)] rounded-lg"></textarea>
                    @if (session('answers2'))
                        <div
                            class="w-full h-fit p-3 bg-green-500 bg-opacity-40 flex justify-center items-center rounded-lg">
                            <p class="text-green-900 font-semibold">{{ session('answers2') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5"
                data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                <div>
                    <p>Hasil penjumlahan dua bilangan positif adalah 15 dan selisihnya adalah 3. Apa bilangan tersebut?
                    </p>
                    <textarea name="jawaban2" cols="100" rows="5"
                        class="w-full my-3 p-3 bg-[var(--white)] border-4 border-[var(--contrast)] rounded-lg"></textarea>
                    @if (session('answers3'))
                        <div class="w-full h-fit p-3 bg-green-500 bg-opacity-40 rounded-lg">
                            <div class="ans3 !font-semibold">{!! session('answers3') !!}</div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5"
                data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                <div>
                    <ol class="list-[lower-alpha]">Budi didorong temannya hingga terjatuh
                        <li class="ml-5">Menurutmu apa yang dirasakan oleh Budi?</li>
                        <li class="ml-5">Apakah kamu pernah merasa seperti itu?</li>
                        <li class="ml-5">Apa yang akan membuatmu merasa lebih baik?</li>
                        <li class="ml-5">Apa yang bisa kamu katakan atau lakukan untuk Budi?</li>
                    </ol>
                    <textarea name="jawaban3" cols="100" rows="5"
                        class="w-full my-3 p-3 bg-[var(--white)] border-4 border-[var(--contrast)] rounded-lg"
                        maxlength="2000"></textarea>
                    @if (session('answers4'))
                        <div
                            class="w-full h-fit p-3 bg-green-500 bg-opacity-40 flex justify-center items-center rounded-lg">
                            <ol class="list-[lower-alpha] font-semibold">
                                <li class="ml-5 text-green-900">{{ session('answers4')->answer_desc }}</li>
                                <li class="ml-5 text-green-900">{{ session('answers4')->answer_desc2 }}</li>
                                <li class="ml-5 text-green-900">{{ session('answers4')->answer_desc3 }}</li>
                                <li class="ml-5 text-green-900">{{ session('answers4')->answer_desc4 }}</li>
                            </ol>
                        </div>
                    @endif
                </div>
            </div>
            <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5"
                data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                <div>
                    <ol class="list-[lower-alpha]">Siti mendapatkan nilai bagus namun kamu mengetahui bahwa itu adalah
                        hasil menyontek
                        <li class="ml-5">Menurutmu apa yang dirasakan oleh Siti?</li>
                        <li class="ml-5">Apakah kamu pernah merasa seperti itu?</li>
                        <li class="ml-5">Apa yang akan membuatmu merasa lebih baik?</li>
                        <li class="ml-5">Apa yang bisa kamu katakan atau lakukan untuk Siti?</li>
                    </ol>
                    <textarea name="jawaban4" cols="100" rows="5"
                        class="w-full my-3 p-3 bg-[var(--white)] border-4 border-[var(--contrast)] rounded-lg"
                        maxlength="2000"></textarea>
                    @if (session('answers5'))
                        <div
                            class="w-full h-fit p-3 bg-green-500 bg-opacity-40 flex justify-center items-center rounded-lg">
                            <ol class="list-[lower-alpha] text-green-900 font-semibold">
                                <li class="ml-5 text-green-900">{{ session('answers5')->answer_desc }}</li>
                                <li class="ml-5 text-green-900">{{ session('answers5')->answer_desc2 }}</li>
                                <li class="ml-5 text-green-900">{{ session('answers5')->answer_desc3 }}</li>
                                <li class="ml-5 text-green-900">{{ session('answers5')->answer_desc4 }}</li>
                            </ol>
                        </div>
                    @endif
                </div>
            </div>
            @if (!session('grade'))
                <button type="submit"
                    class="w-full h-[50px] bg-[var(--primary)] text-xl font-bold hover:bg-[var(--secondary)] transition-all duration-300 ease-in-out"
                    id="submit">Submit</button>
            @else
                <button type="button"
                    class="w-full h-[50px] bg-[var(--primary)] text-xl font-bold hover:bg-[var(--secondary)] transition-all duration-300 ease-in-out"
                    id="closeReview" onclick="window.location.href='{{ route('user.module') }}'">Kembali ke
                    modul</button>
            @endif
        </div>
    </section>
</form>
@endsection

@section('script')
<script src="{{ asset('js/exercise4.js') }}"></script>
@endsection