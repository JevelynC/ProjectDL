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
    <section class="min-h-screen min-w-screen py-10  px-5 sm:px-0">
        <div class="w-full flex items-center flex-col">
            <div class="title-container w-full sm:w-9/12 py-10 bg-[var(--neutral)] rounded-2xl border-[var(--white)] border-[6px]">
                <h1 class="text-4xl sm:text-5xl font-extrabold drop-shadow-2xl text-[var(--contrast)] uppercase text-center">
                    Modul 2</h1>
            </div>

            <div class="color-container sm:w-9/12 mt-10 p-5 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
                <h1 class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center">
                    Membaca Jam</h1>
                <div class="lg:grid grid-cols-2 my-6">
                    <div class="flex flex-col justify-center items-center sm:px-5 sm:py-5">
                        <img src="{{ asset('asset/module/jam/jam.png') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-start items-start px-4 sm:px-5 sm:py-5">
                        <ul class="list-disc m-0">
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Jarum pendek
                                berputar satu
                                lingkaran penuh setiap 12 jam</li>
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Jarum panjang
                                berputar
                                satu lingkaran penuh setiap 1 jam</li>
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Jarum halus
                                berputar satu
                                lingkaran penuh setiap 1 menit</li>
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Setiap perpindahan
                                langkah jarum panjang, maka jarum halus akan berputar satu lingkaran penuh.</li>
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Setiap perpindahan
                                jarum pendek dari bilangan angka ke bilangan angka lainnya, maka jarum panjang akan berputar
                                satu lingkaran penuh
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="color-container sm:w-9/12 mt-10 p-5 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
                <div class="lg:grid grid-cols-2 my-6">
                    <div class="flex flex-col justify-center items-center sm:px-5 sm:py-5">
                        <img src="{{ asset('asset/module/jam/jam1.png') }}" alt="" class="w-full">
                    </div>
                    <div class="flex flex-col justify-start items-start px-4 sm:px-5 sm:py-5">
                        <ul class="list-disc m-0">
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Gambar jam A
                                menunjukan jam 6 tepat, dimana jarum pendek berada tepat pada angka 6 dan jarum panjang
                                berada tepat pada angka 12. Jam dibilang tepat apabila jarum panjang menunjuk angka 12.</li>
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Sedangkan gambar B
                                menunjukan jam 6 lewat 10 menit, dimana jarum pendek berada pada angka 6 (geser sedikit) dan
                                jarum panjang berada di angka 10.</li>
                            <li class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 py-2">Ingat : pergerakan
                                jarum panjang dari angka ke angka lainnya memiliki satuan 5 menit. Jadi, karena bergerak 2
                                angka dari 12, maka menjadi 2 dikali 5 menit = 10 menit.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:grid grid-cols-2 sm:w-9/12 gap-4">
                <div class="color-container mt-10 p-5 rounded-2xl border-[var(--contrast)] border-[6px]">
                    <div class="flex flex-col justify-center items-center sm:px-5 sm:pb-5">
                        <div class="h-50">
                            <img src="{{ asset('asset/module/jam/jam2.png') }}" alt="" class="w-full">
                        </div>

                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4">Pembacaan jam dikatakan
                            seperempat apabila lebih atau kurang dari 15 menit. Misalnya jam 2 lebih 15 menit, maka sering
                            diucapkan jam 2 seperempat. Atau jam 2 lebih 45 menit, maka sering diucapkan jam 3 kurang
                            seperempat.</h1>
                    </div>
                </div>

                <div class="color-container mt-10 p-5 rounded-2xl border-[var(--contrast)] border-[6px]">
                    <div class="flex flex-col justify-center items-center sm:px-5 sm:pb-5">
                        <div class="h-50">
                            <img src="{{ asset('asset/module/jam/jam3.png') }}" alt="" class="w-[full]">
                        </div>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4">Untuk jam yang lewat 30
                            menit, maka akan dibaca setengah jam berikutnya. Sebagai contoh jam 6 lebih 30 menit, maka cara
                            membacanya adalah jam setengah 7 (bukan jam setengah 6, yaaa☺️)</h1>
                    </div>
                </div>
            </div>

            <div class="color-container sm:w-9/12 mt-10 p-5 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
                <h1 class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center">
                    Sinonim dan Antonim</h1>
                <div class="lg:grid grid-cols-2 my-6 text-center">
                    <div class="flex flex-col items-center sm:px-5 sm:pt-5 mt-4 sm:mt-0">
                        <h1 class="text-lg sm:text-2xl font-bold text-[var(--contrast)] px-4 py-2 bg-[var(--neutral)] rounded-2xl">Lawan Kata/Antonim</h1>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4">Antonim adalah kata yang memiliki makna berlawanan dengan kata lainnya.</h1>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-8">Contoh: antonim dari <b>JUAL</b> adalah <b>BELI</b></h1>
                    </div>
                    <div class="flex flex-col items-center sm:px-5 sm:pt-5 mt-8 sm:mt-0">
                        <h1 class="text-lg sm:text-2xl font-bold text-[var(--contrast)] px-4 py-2 bg-[var(--neutral)] rounded-2xl">Persamaan Kata/Sinonim</h1>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4">Sinonim adalah kata yang memiliki makna yang sama dengan kata lainnya.</h1>
                        <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-8">Contoh: sinonim dari <b>LUAS</b> adalah <b>BESAR</b></h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
