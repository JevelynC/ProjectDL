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
    <form action="{{ route('check2') }}" method="POST" class="m-0">
        @csrf
        <section class="min-h-screen w-screen flex flex-col items-center py-10">
            <div class="title-container  md:w-3/5 max-md:w-4/5 py-10 bg-[var(--neutral)] rounded-2xl border-[var(--white)] border-[6px]"
                data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                <h1 class="text-3xl sm:text-5xl font-extrabold drop-shadow-2xl text-[var(--contrast)] uppercase text-center">
                    Latihan Soal Modul 2</h1>
            </div>
            @if (session('grade'))
                <div class="w-full bg-[var(--cream)] bg-opacity-50 h-[50px] rouonded-xl flex justify-center items-center">
                    <p class="font-bold text-2xl">Nilai: {{ session('grade') }} / 100</p>
                </div>
            @endif
            <div class="soal-container md:w-3/5 max-md:w-4/5">
                @php
                    $index = 0;
                @endphp
                @foreach ($additions as $addition)
                    @php
                        $additionA = 'additionA' . ($index + 1);
                        $additionB = 'additionB' . ($index + 1);
                        $additionC = 'additionC' . ($index + 1);
                    @endphp
                    <div class="question w-full bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden" data-aos="zoom-in"
                        data-aos-easing="ease-out-cubic">
                        <h1 class="text-lg font-semibold px-5 pb-4 pt-2">Isi setiap kotak kosong dengan angka sesuai gambar!
                        </h1>
                        <div class="flex max-sm:flex-col">
                            <div class="flex">
                                <div class="flex flex-col items-center px-5 max-sm:px-2">
                                    <img src="{{ asset($addition['img1']) }}" class="sm:h-[110px] max-sm:h-full">
                                    <input type="number" name="{{ 'additionA' . $index }}"
                                        oninput="this.value = this.value.slice(0, 2)" required
                                        class="w-[50px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold">
                                    @if (session($additionA) == 'true')
                                        <div
                                            class="w-full h-[50px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                            <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                                        </div>
                                    @elseif (session($additionA) == 'false')
                                        <div
                                            class="w-full h-[50px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                            <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                                        </div>
                                    @endif
                                </div>
                                <div
                                    class="flex justify-center items-end font-semibold text-6xl max-sm:text-5xl max-sm:pb-3">
                                    +
                                </div>
                                <div class="flex flex-col items-center px-5 max-sm:px-2">
                                    <img src="{{ asset($addition['img2']) }}" class="h-[110px] max-sm:h-full">
                                    <input type="number" name="{{ 'additionB' . $index }}"
                                        oninput="this.value = this.value.slice(0, 2)" required
                                        class="w-[50px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold">
                                    @if (session($additionB) == 'true')
                                        <div
                                            class="w-full h-[50px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                            <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                                        </div>
                                    @elseif (session($additionB) == 'false')
                                        <div
                                            class="w-full h-[50px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                            <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="flex max-sm:pl-10">
                                <div
                                    class="flex justify-center items-end font-semibold text-6xl max-sm:text-5xl max-sm:hidden">
                                    =
                                </div>
                                <div class="max-sm:flex justify-center items-center font-semibold text-lg sm:hidden">
                                    Hasil:
                                </div>
                                <div class="flex items-end px-5 max-sm:px-2">
                                    <input type="number" id="{{ 'hasil' . $index }}" name="{{ 'additionC' . $index }}"
                                        oninput="this.value = this.value.slice(0, 2)" required
                                        class="w-[50px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold">
                                    @if (session($additionC) == 'true')
                                        <div
                                            class="w-full h-[50px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                            <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                                        </div>
                                    @elseif (session($additionC) == 'false')
                                        <div
                                            class="w-full h-[50px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                            <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach


                <div class="question w-full bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden pl-10" data-aos="zoom-in"
                    data-aos-easing="ease-out-cubic">

                    <div class="text-xl font-semibold py-1">
                        <input type="number" id="tambah0" name="answers0" oninput="this.value = this.value.slice(0, 2)"
                            required
                            class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"> +
                        1 + 3 = 5
                    </div>
                    @if (session('answers1') == 'true')
                        <div
                            class="w-fit h-[40px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                        </div>
                    @elseif (session('answers1') == 'false')
                        <div
                            class="w-fit h-[40px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                        </div>
                    @endif
                    <div class="text-xl font-semibold py-1">
                        1 + <input type="number" id="tambah1" name="answers1"
                            oninput="this.value = this.value.slice(0, 2)" required
                            class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold">+
                        3 = 6
                    </div>
                    @if (session('answers2') == 'true')
                        <div
                            class="w-fit h-[40px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                        </div>
                    @elseif (session('answers2') == 'false')
                        <div
                            class="w-fit h-[40px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                        </div>
                    @endif
                    <div class="text-xl font-semibold py-1">
                        1 + 2 + <input type="number" id="tambah2" name="answers2"
                            oninput="this.value = this.value.slice(0, 2)" required
                            class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"> =
                        7
                    </div>
                    @if (session('answers3') == 'true')
                        <div
                            class="w-fit h-[40px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                        </div>
                    @elseif (session('answers3') == 'false')
                        <div
                            class="w-fit h-[40px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                        </div>
                    @endif
                    <div class="text-xl font-semibold py-1">
                        3 + 2 + 3 = <input type="number" id="tambah3" name="answers3"
                            oninput="this.value = this.value.slice(0, 2)" required
                            class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold">
                    </div>
                    @if (session('answers4') == 'true')
                        <div
                            class="w-fit h-[40px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                        </div>
                    @elseif (session('answers4') == 'false')
                        <div
                            class="w-fit h-[40px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                            <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                        </div>
                    @endif
                </div>

                @php
                    $index = 4;
                @endphp
                @foreach ($multipleChoices1 as $multipleChoice1)
                    @php
                        $answers = 'answers' . ($index + 1);
                    @endphp

                    <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5"
                        data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                        <div class="px-2 max-sm:px-2">
                            <p class="font-semibold mt-3">{!! $multipleChoice1['question'] !!}</p>
                            <p class="font-semibold my-3">Antonim atau lawan kata yang digarisbawahi adalah...</p>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" required value="{{ $multipleChoice1['option1'] }}"
                                    name="{{ 'answers' . $index }}" id="{{ 'optionA' . $index }}" />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionA' . $index }}">
                                    {{ $multipleChoice1['option1'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" required value="{{ $multipleChoice1['option2'] }}"
                                    name="{{ 'answers' . $index }}" id="{{ 'optionB' . $index }}" />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionB' . $index }}">
                                    {{ $multipleChoice1['option2'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" required value="{{ $multipleChoice1['option3'] }}"
                                    name="{{ 'answers' . $index }}" id="{{ 'optionC' . $index }}" />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionC' . $index }}">
                                    {{ $multipleChoice1['option3'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" required value="{{ $multipleChoice1['option4'] }}"
                                    name="{{ 'answers' . $index }}" id="{{ 'optionD' . $index }}" />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionD' . $index }}">
                                    {{ $multipleChoice1['option4'] }}
                                </label>
                            </div>
                            @if (session($answers) == 'true')
                                <div
                                    class="w-fit h-[40px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                    <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                                </div>
                            @elseif (session($answers) == 'false')
                                <div
                                    class="w-fit h-[40px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                    <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach

                @foreach ($multipleChoices2 as $multipleChoice2)
                    @php
                        $answers = 'answers' . ($index + 1);
                    @endphp
                    <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col"
                        data-aos="zoom-in" data-aos-easing="ease-out-cubic">
                        <img src="{{ asset($multipleChoice2['img']) }}" class="h-[180px] mx-5 self-center">
                        <div class="px-2 max-sm:px-5">
                            <p class="font-semibold my-3">{{ $multipleChoice2['question'] }}</p>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" required value="{{ $multipleChoice2['option1'] }}"
                                    name="{{ 'answers' . $index }}" id="{{ 'optionA' . $index }}" />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionA' . $index }}">
                                    {{ $multipleChoice2['option1'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" required value="{{ $multipleChoice2['option2'] }}"
                                    name="{{ 'answers' . $index }}" id="{{ 'optionB' . $index }}" />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionB' . $index }}">
                                    {{ $multipleChoice2['option2'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" required value="{{ $multipleChoice2['option3'] }}"
                                    name="{{ 'answers' . $index }}" id="{{ 'optionC' . $index }}" />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionC' . $index }}">
                                    {{ $multipleChoice2['option3'] }}
                                </label>
                            </div>
                            @if (session($answers) == 'true')
                                <div
                                    class="w-fit h-[40px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                    <p class="text-green-900 font-semibold px-3">Jawaban benar</p>
                                </div>
                            @elseif (session($answers) == 'false')
                                <div
                                    class="w-fit h-[40px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg mx-3">
                                    <p class="text-red-900 font-semibold px-3">Jawaban salah</p>
                                </div>
                            @endif
                        </div>

                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach

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
    <script src="{{ asset('js/exercise2.js') }}"></script>
@endsection
