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
                    Modul 3</h1>
            </div>
            <div class="color-container sm:w-9/12 mt-10 p-5 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
                <h1
                    class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center lg:px-4 py-2">
                    Problem Solving</h1>
                <div class="flex flex-col sm:px-5 sm:pt-5">
                    <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4"><b>Problem solving</b>
                        atau
                        <b>pemecahan masalah</b> sangat penting untuk dilatih karena kehidupan kita tidak
                        luput dari masalah-masalah yang muncul.
                    </h1>
                    <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-8">Kamu bisa mengasah skill
                        problem solving kamu dengan cara:
                    </h1>
                    <div class="grid grid-cols-12">
                        <div>
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">1.
                            </h1>
                        </div>
                        <div class="col-span-11">
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Berpikir
                                positif,
                                jangan baru lihat masalahnya sudah menyerah
                            </h1>
                        </div>
                        <div>
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">2.
                            </h1>
                        </div>
                        <div class="col-span-11">
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Mendefinisikan
                                masalah yang ada dengan jelas
                            </h1>
                        </div>
                        <div>
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">3.
                            </h1>
                        </div>
                        <div class="col-span-11">
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Berfokus pada
                                solusi yang ada, bukan masalahnya
                            </h1>
                        </div>
                        <div>
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">4.
                            </h1>
                        </div>
                        <div class="col-span-11">
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Evaluasi dan
                                periksa kembali jika keputusan yang telah diambil kurang tepat
                            </h1>
                        </div>
                        <div>
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">5.
                            </h1>
                        </div>
                        <div class="col-span-11">
                            <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-1">Bermain games
                                untuk
                                mengasah problem solving
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="color-container sm:w-9/12 mt-10 p-5 sm:p-10 rounded-2xl border-[var(--contrast)] border-[6px]">
                <h1
                    class="text-3xl sm:text-4xl font-extrabold drop-shadow-2xl text-[var(--contrast)] text-center lg:px-4 py-2">
                    Benar-Salah</h1>
                <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-4">Kita ingin berbuat benar,
                    namun
                    seringkali kita tidak menyadari jika kita berbuat salah. Oleh karena itu, kita sebagai anak-anak
                    masih
                    memerlukan bimbingan dari orang yang lebih tua agar kebiasaan baik sudah terbentuk dari semasa
                    kecil.
                </h1>
                <h1 class="text-md sm:text-xl font-bold text-[var(--contrast)] lg:px-4 mt-8">Untuk menentukan apakah
                    tindakan kita sudah benar kita dapat berdoa kepada Tuhan dan juga bertanya kepada orang yang lebih
                    ahli.
                    Tipsnya kita tidak harus bisa menerima pendapat atau masukan mereka jika kita salah dan kita
                    mau memperbaikinya.
                </h1>
            </div>
        </div>
    </section>
@endsection
