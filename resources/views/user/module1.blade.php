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
        background-image:
            radial-gradient(at 0% 63%, hsla(177, 96%, 78%, 0.74) 0px, transparent 50%),
            radial-gradient(at 40% 20%, hsla(28, 100%, 74%, 0.39) 0px, transparent 50%),
            radial-gradient(at 80% 0%, hsla(189, 100%, 56%, 0.64) 0px, transparent 50%),
            radial-gradient(at 80% 50%, hsla(340, 100%, 76%, 1) 0px, transparent 50%),
            radial-gradient(at 16% 83%, hsla(22, 100%, 77%, 1) 0px, transparent 50%),
            radial-gradient(at 75% 97%, hsla(240, 100%, 70%, 0.74) 0px, transparent 50%),
            radial-gradient(at 4% 21%, hsla(335, 100%, 76%, 0.77) 0px, transparent 50%);
        background-size: cover;
    }

    .color-container {
        /* backdrop-filter: blur(30px); */
        /* background-color: rgba(250, 246, 246, 0.408); */
        background: rgb(255, 247, 226);
        background-size: cover;
    }

    .number-container {
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{ asset('asset/module/angka/bg-sky.png') }});
        background-size: cover;
    }
</style>

@section('body')
    <section class="min-h-screen min-w-screen py-10 px-5 sm:px-0">
        <div class="w-full flex items-center flex-col">
            <div class="title-container w-full sm:w-9/12 py-10 bg-[var(--neutral)] rounded-2xl border-[var(--white)] border-[6px]">
                <h1 class="text-4xl sm:text-5xl font-extrabold drop-shadow-2xl text-[var(--contrast)] uppercase text-center">
                    Modul 1</h1>
            </div>

            <div class="color-container sm:w-9/12 mt-10 py-5 p-2 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
                <h1 class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center">
                    Mengenal Warna</h1>
                <div class="grid grid-cols-2 sm:grid-cols-4 grid-rows-2 my-6">
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/red.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-white px-4 py-2 bg-[#FF3131]">Merah</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/orange.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-white px-4 py-2 bg-[#FF914D]">Oranye</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/yellow.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-white px-4 py-2 bg-[#FFDE59]">Kuning</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/green.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-white px-4 py-2 bg-[#7ED957]">Hijau</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/blue.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-white px-4 py-2 bg-[#5271FF]">Biru</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/purple.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-white px-4 py-2 bg-[#C76CED]">Ungu</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/white.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-slate-400 px-4 py-2 bg-white">Putih</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4">
                        <img src="{{ asset('asset/module/warna/black.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-xl sm:text-2xl font-bold text-white px-4 py-2 bg-black">Hitam</h1>
                    </div>
                </div>
            </div>

            <div class="number-container sm:w-9/12 mt-10 py-5 p-2 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
                <h1 class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center">
                    Mengenal Angka</h1>
                <div class="grid grid-cols-2 sm:grid-cols-5 grid-rows-2 my-6 gap-4">
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/1.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">1</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/2.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">2</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/3.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">3</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/4.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">4</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/5.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">5</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/6.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">6</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/7.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">7</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/8.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">8</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/9.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">9</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center px-1 sm:px-5 py-5 mt-4 bg-white border-4 border-[var(--contrast)]">
                        <img src="{{ asset('asset/module/angka/10.png') }}" alt=""
                            class="hover:scale-105 transition-all duration-300 ease-in-out">
                        <h1 class="text-5xl font-extrabold mt-4">10</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
