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
        <h1 class="font-bold text-4xl text-center  pt-10 pb-5 max-sm:w-[280px]">Latihan Soal Modul 3</h1>
        <div class="soal-container md:w-3/5 max-md:w-4/5">
            @php
                $index = 0;
            @endphp
            @foreach ($multipleChoices1 as $multipleChoice1)
                <div
                    class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                    <div class="px-2 max-sm:px-10">
                        <p class="font-semibold my-3">{{ $multipleChoice1['question'] }}</p>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice1['option1'] }}"
                                name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionA' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionA' . $index }}">
                                {{ $multipleChoice1['option1'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice1['option2'] }}"
                                name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionB' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionB' . $index }}">
                                {{ $multipleChoice1['option2'] }}
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="{{ $multipleChoice1['option3'] }}"
                                name="{{ 'flexRadioDefault' . $index }}" id="{{ 'optionC' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionC' . $index }}">
                                {{ $multipleChoice1['option3'] }}
                            </label>
                        </div>
                    </div>
                </div>
                @php
                    $index++;
                @endphp
            @endforeach
            <div class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                <div>
                    <ol class="list-[lower-alpha] font-semibold">Monica selalu menggunakan kaus pelanginya untuk melakukan
                        seluruh kegiatan mulai dari memetik buah beri, bermain lumpur, membersihkan tangan sebelum kana,
                        hingga membersihkan mulutnya setelah makan. Karena kaus Monica sangat kotor dan bau, ibu meminta
                        agar kaus Monica dicuci terlebih dahulu, namun, Monica menolaknya. Ibu memaksa Monica untuk membuka
                        kausnya tetapi Monica tidak mau melepaskan kaus tersebut hingga sehingga mereka berdua saling
                        menarik kaus pelangi Monica. setelah lama ditarik, akhirnya Monica mau mencuci kausnya. Setelah
                        dicuci, Mo ingin memakai kaus pelanginya. Tapi ternyata kaus tersebut melar karena ditarik-tarik.
                        <li class="ml-5">Apa masalah dari cerita ini?</li>
                        <li class="ml-5">Apa yang akan terjadi apabila Monica langsung menyerahkan kausnya kepada ibunya untuk
                            dicuci?</li>
                    </ol>
                    <textarea name="jawaban3" cols="30" rows="5" class="w-full my-3"></textarea>
                </div>
            </div>
            <h1 class="font-semibold text-2xl">Jawab benar atau salah untuk kondisi yang diberikan pada setiap soal</h1>
            @foreach ($tnfs as $tnf)
                <div
                    class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col px-5">
                    <div class="px-2 max-sm:px-10">
                        <p class="font-semibold my-3">{{ $tnf['question'] }}</p>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="true" name="{{ 'flexRadioDefault' . $index }}"
                                id="{{ 'optionA' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionA' . $index }}">
                                Benar
                            </label>
                        </div>
                        <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                            <input
                                class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                type="radio" value="false" name="{{ 'flexRadioDefault' . $index }}"
                                id="{{ 'optionB' . $index }}" />
                            <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                for="{{ 'optionB' . $index }}">
                                Salah
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
    <script src="{{ asset('js/exercise3.js') }}"></script>
@endsection
