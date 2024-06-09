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
    <form action="{{ route('check1') }}" method="POST" class="m-0">
        @csrf
        <section class="min-h-screen w-screen flex flex-col items-center pb-10">
            <h1 class="font-bold text-4xl text-center pt-10 pb-5 max-sm:w-[280px]">Latihan Soal Modul 1</h1>

            @if (session('grade'))
                <div class="w-full bg-[var(--primary)] bg-opacity-50 h-[50px] rouonded-xl flex justify-center items-center">
                    <p class="font-bold text-2xl">Nilai: {{ session('grade') }} / 100</p>
                </div>
            @endif
            <div class="soal-container md:w-3/5 max-md:w-4/5">
                @php
                    $index = 0;
                @endphp
                @foreach ($multipleChoices as $multipleChoice)
                    @php
                        $number = 'mulchoice' . ($index + 1);
                    @endphp
                    <div
                        class="question w-full flex bg-[var(--primary)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col">
                        <img src="{{ asset($multipleChoice['img']) }}" class="h-[180px] mx-5 self-center">
                        <div class="px-2 max-sm:px-10">
                            <p class="font-semibold my-3">{{ $multipleChoice['question'] }}</p>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" name="{{ 'answers' . $index }}" id="{{ 'optionA' . $index }}"
                                    value="{{ $multipleChoice['option1'] }}" required />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionA' . $index }}">
                                    {{ $multipleChoice['option1'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" name="{{ 'answers' . $index }}" id="{{ 'optionB' . $index }}"
                                    value="{{ $multipleChoice['option2'] }}" required />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionB' . $index }}">
                                    {{ $multipleChoice['option2'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" name="{{ 'answers' . $index }}" id="{{ 'optionC' . $index }}"
                                    value="{{ $multipleChoice['option3'] }}" required />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionC' . $index }}">
                                    {{ $multipleChoice['option3'] }}
                                </label>
                            </div>
                            <div class="mb-3 block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-[var(--contrast)] before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] rtl:float-right"
                                    type="radio" name="{{ 'answers' . $index }}" id="{{ 'optionD' . $index }}"
                                    value="{{ $multipleChoice['option4'] }}" required />
                                <label class="mt-px inline-block ps-[0.15rem] hover:cursor-pointer"
                                    for="{{ 'optionD' . $index }}">
                                    {{ $multipleChoice['option4'] }}
                                </label>
                            </div>
                            @if (session($number) == 'true')
                                <div
                                    class="w-full h-[50px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg">
                                    <p class="text-green-900 font-semibold">Jawaban benar</p>
                                </div>
                            @elseif (session($number) == 'false')
                                <div
                                    class="w-full h-[50px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg">
                                    <p class="text-red-900 font-semibold">Jawaban salah</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    @php
                        $index++;
                    @endphp
                @endforeach

                @foreach ($letters as $letter)
                    @php
                        $number = 'letters' . ($index + 1);
                    @endphp
                    <div
                        class="question w-full flex bg-[var(--primary)] py-3 my-5 rounded-lg overflow-hidden max-sm:flex-col">
                        <img src="{{ asset($letter['img']) }}" class="h-[180px] mx-5 self-center">
                        <div>
                            <p class="font-semibold my-3 max-sm:text-center max-sm:px-4">Isi huruf yang kosong pada kata
                                berikut!</p>
                            <p class="tracking-[0.2rem] font-bold text-xl max-sm:my-3 max-sm:text-center">
                                {{ $letter['word1'] }}<input type="text" name="{{ 'answers' . $index }}" maxlength="1"
                                    id="{{ 'isi' . $index }}" required
                                    class="w-[22px] text-center !bg-transparent border-b-2 border-black mr-1"
                                    oninput="this.value = this.value.toUpperCase().replace(/[^A-Z]/g, '')">{{ $letter['word2'] }}
                            </p>
                            @if (session($number) == 'true')
                                <div
                                    class="w-full mt-5 h-[50px] bg-green-500 bg-opacity-50 flex justify-center items-center rounded-lg">
                                    <p class="text-green-900 font-semibold">Jawaban benar</p>
                                </div>
                            @elseif (session($number) == 'false')
                                <div
                                    class="w-full mt-5 h-[50px] bg-red-500 bg-opacity-50 flex justify-center items-center rounded-lg">
                                    <p class="text-red-900 font-semibold">Jawaban salah</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach

                @if (!session('grade'))
                    <button type="submit" class="w-full h-[50px] bg-[var(--primary)] text-xl font-bold"
                        id="submit">Submit</button>
                @else
                    <button type="button" class="w-full h-[50px] bg-[var(--primary)] text-xl font-bold" id="closeReview"
                        onclick="window.location.href='{{ route('user.module') }}'">Kembali ke modul</button>
                @endif
            </div>
        </section>
    </form>
@endsection

@section('script')
    <script src="{{ asset('js/exercise1.js') }}"></script>
@endsection
