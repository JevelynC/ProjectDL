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
</style>

@section('body')
    <section class="min-h-screen w-screen flex flex-col items-center pb-10">
        <h1 class="font-bold text-4xl text-center pt-10 pb-5 max-sm:w-[280px]">Latihan Soal Modul 1</h1>
        <div class="soal-container md:w-3/5 max-md:w-4/5">
            @php
                $index = 0;
            @endphp
            @foreach ($multipleChoices as $multipleChoice)
                <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col">
                    <img src="{{ asset($multipleChoice['img']) }}" class="h-[180px] mx-5 self-center">
                    <div class="px-2 max-sm:px-10">
                        <p class="font-semibold my-3">{{ $multipleChoice['question'] }}</p>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionA' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionA' . $index }}">
                                {{ $multipleChoice['option1'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionB' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionB' . $index }}">
                                {{ $multipleChoice['option2'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionC' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionC' . $index }}">
                                {{ $multipleChoice['option3'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionD' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionD' . $index }}">
                                {{ $multipleChoice['option4'] }}
                            </label>
                        </div>

                    </div>
                </div>
                @php
                    $index++;
                @endphp
            @endforeach


            @foreach ($letters as $letter)
                <div class="question w-full flex bg-[var(--primary)] py-3 my-5 rounded-lg overflow-hidden max-sm:flex-col">
                    <img src="{{ asset($letter['img']) }}" class="h-[180px] mx-5 self-center">
                    <div>
                        <p class="font-semibold my-3 max-sm:text-center max-sm:px-4">Isi huruf yang kosong pada kata berikut!</p>
                        <p class="tracking-[0.2rem] font-bold text-xl max-sm:my-3 max-sm:text-center">
                            {{ $letter['word1'] }}<input type="text" name="chair" maxlength="1"
                                class="w-[22px] text-center !bg-transparent border-b-2 border-black mr-1"
                                oninput="this.value = this.value.toUpperCase().replace(/[^A-Z]/g, '')"
                                required>{{ $letter['word2'] }}
                        </p>
                    </div>
                </div>
            @endforeach

            <button class="w-full h-[50px] bg-[var(--primary)] text-xl font-bold">Submit</button>
        </div>
    </section>
@endsection
