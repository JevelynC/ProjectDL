@extends('layout')

@section('head')
    <style>
        * {
            font-family: 'Inter', sans-serif;
            color: var(--contrast);
        }

        body {
            background: var(--secondary);
            min-height: 100vh;
            min-width: 100vw;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }
    </style>
@endsection

@section('body')
    @include('navbar')
    <section class="min-h-screen min-w-screen">
        <div class="w-full flex items-center flex-col">
            <div class="title-container w-9/12 py-10">
                <h1
                    class="text-5xl font-extrabold drop-shadow-2xl text-[var(--contrast)] uppercase border-b-4 border-[var(--contrast)]">
                    Modul Pembelajaran</h1>
            </div>
            <div class="grid grid-rows-2 grid-cols-2 w-9/12 gap-10">
                <div class="module-container w-full bg-[var(--primary)] h-[200px] rounded-xl shadow-xl flex items-center">
                    <div class="pl-7">
                        <img src="{{ asset('asset/modul1.png') }}" class="w-[120px]">
                    </div>
                    <div class="h-full flex flex-col justify-center px-7">
                        <h2 class="text-xl font-bold py-2">Modul Pembelajaran 1</h2>
                        <p class="text-justify max-w-[400px]">Modul ini ditujukan kepada anak berusia 3-5 tahun. Modul ini
                            akan membantu anak dalam mengenal warna, angka, dan huruf</p>
                    </div>
                </div>
                <div class="module-container w-full bg-[var(--primary)] h-[200px] rounded-xl shadow-xl flex items-center">
                    <div class="pl-7">
                        <img src="{{ asset('asset/modul1.png') }}" class="w-[120px]">
                    </div>
                    <div class="h-full flex flex-col justify-center px-7">
                        <h2 class="text-xl font-bold py-2">Modul Pembelajaran 2</h2>
                        <p class="text-justify max-w-[400px]">Modul ini ditujukan kepada anak berusia 6-9 tahun. Modul ini
                            berisi perhitungan sederhana, membaca jam, membedakan posisi, antonim, dan identifikasi masalah
                        </p>
                    </div>
                </div>
                <div class="module-container w-full bg-[var(--primary)] h-[200px] rounded-xl shadow-xl flex items-center">
                    <div class="pl-7">
                        <img src="{{ asset('asset/modul1.png') }}" class="w-[120px]">
                    </div>
                    <div class="h-full flex flex-col justify-center px-7">
                        <h2 class="text-xl font-bold py-2">Modul Pembelajaran 3</h2>
                        <p class="text-justify max-w-[400px]">Modul ini ditujukan kepada anak berusia 10-12 tahun. Modul ini
                            akan membantu anak dalam mengenal warna, angka, dan huruf</p>
                    </div>
                </div>
                <div class="module-container w-full bg-[var(--primary)] h-[200px] rounded-xl shadow-xl flex items-center">
                    <div class="pl-7">
                        <img src="{{ asset('asset/modul1.png') }}" class="w-[120px]">
                    </div>
                    <div class="h-full flex flex-col justify-center px-7">
                        <h2 class="text-xl font-bold py-2">Modul Pembelajaran 4</h2>
                        <p class="text-justify max-w-[400px]">Modul ini ditujukan kepada anak berusia diatas 12 tahun. Modul
                            ini
                            akan membantu anak dalam mengenal warna, angka, dan huruf</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
