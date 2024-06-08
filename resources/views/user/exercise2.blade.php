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
        <h1 class="font-bold text-4xl text-center pt-10 pb-5 max-sm:w-[280px]">Latihan Soal Modul 2</h1>
        <div class="soal-container md:w-3/5 max-md:w-4/5">
            @php
                $index = 0;
            @endphp
            @foreach ($additions as $addition)
                <div class="question w-full bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden">
                    <h1 class="text-lg font-semibold px-5 pb-4 pt-2">Isi setiap kotak kosong dengan angka sesuai gambar!</h1>
                    <div class="flex max-sm:flex-col">
                        <div class="flex">
                            <div class="flex flex-col items-center px-5 max-sm:px-2">
                                <img src="{{ asset($addition['img1']) }}" class="sm:h-[110px] max-sm:h-full">
                                <input type="number" name="{{ 'additionA' . $index }}"
                                    oninput="this.value = this.value.slice(0, 2)"
                                    class="w-[50px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"
                                    required>
                            </div>
                            <div class="flex justify-center items-end font-semibold text-6xl max-sm:text-5xl max-sm:pb-3">
                                +
                            </div>
                            <div class="flex flex-col items-center px-5 max-sm:px-2">
                                <img src="{{ asset($addition['img2']) }}" class="h-[110px] max-sm:h-full">
                                <input type="number" name="{{ 'additionB' . $index }}"
                                    oninput="this.value = this.value.slice(0, 2)"
                                    class="w-[50px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"
                                    required>
                            </div>
                        </div>
                        <div class="flex max-sm:pl-10">
                            <div class="flex justify-center items-end font-semibold text-6xl max-sm:text-5xl max-sm:hidden">
                                =
                            </div>
                            <div class="max-sm:flex justify-center items-center font-semibold text-2xl sm:hidden">
                                Hasil:
                            </div>
                            <div class="flex items-end px-5">
                                <input type="number" id="{{ 'hasil' . $index }}" name="{{ 'additionC' . $index }}"
                                    oninput="this.value = this.value.slice(0, 2)"
                                    class="w-[50px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $index++;
                @endphp
            @endforeach


            <div class="question w-full bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden pl-10">

                <div class="text-xl font-semibold py-1">
                    <input type="number" id="tambah0" name="{{ 'additionC' . $index }}" oninput="this.value = this.value.slice(0, 2)"
                        class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"
                        required> + 1 + 3 = 5
                </div>
                <div class="text-xl font-semibold py-1">
                    1 + <input type="number" id="tambah1" name="{{ 'additionC' . $index }}"
                        oninput="this.value = this.value.slice(0, 2)"
                        class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"
                        required>+ 3 = 6
                </div>
                <div class="text-xl font-semibold py-1">
                    1 + 2 + <input type="number" id="tambah2" name="{{ 'additionC' . $index }}"
                        oninput="this.value = this.value.slice(0, 2)"
                        class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"
                        required> = 7
                </div>
                <div class="text-xl font-semibold py-1">
                    3 + 2 + 3 = <input type="number" id="tambah3" name="{{ 'additionC' . $index }}"
                        oninput="this.value = this.value.slice(0, 2)"
                        class="w-[40px] text-xl text-center !bg-transparent border-2 border-black my-3 font-semibold"
                        required>
                </div>
            </div>

            @foreach ($multipleChoices1 as $multipleChoice1)
                <div
                    class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                    <div class="px-2 max-sm:px-10">
                        <p class="font-semibold mt-3">{!! $multipleChoice1['question'] !!}</p>
                        <p class="font-semibold my-3">Antonim atau lawan kata yang digarisbawahi adalah...</p>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice1['option1'] }}" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionA' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionA' . $index }}">
                                {{ $multipleChoice1['option1'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice1['option2'] }}" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionB' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionB' . $index }}">
                                {{ $multipleChoice1['option2'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice1['option3'] }}" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionC' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionC' . $index }}">
                                {{ $multipleChoice1['option3'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice1['option4'] }}" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionD' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionD' . $index }}">
                                {{ $multipleChoice1['option4'] }}
                            </label>
                        </div>

                    </div>
                </div>
                @php
                    $index++;
                @endphp
            @endforeach

            @foreach ($multipleChoices2 as $multipleChoice2)
                <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col">
                    <img src="{{ asset($multipleChoice2['img']) }}" class="h-[180px] mx-5 self-center">
                    <div class="px-2 max-sm:px-10">
                        <p class="font-semibold my-3">{{ $multipleChoice2['question'] }}</p>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice2['option1'] }}" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionA' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionA' . $index }}">
                                {{ $multipleChoice2['option1'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice2['option2'] }}" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionB' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionB' . $index }}">
                                {{ $multipleChoice2['option2'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice2['option3'] }}" name="{{ 'flexRadioDefault' . $index }}"
                                id="{{ 'optionC' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionC' . $index }}">
                                {{ $multipleChoice2['option3'] }}
                            </label>
                        </div>
                    </div>
                </div>
                @php
                    $index++;
                @endphp
            @endforeach
            <button class="w-full h-[50px] bg-[var(--primary)] text-xl font-bold" id="submit">Submit</button>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('js/exercise2.js') }}"></script>
@endsection