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
</style>

@section('body')
    <form action="{{ route('check1') }}" method="POST" class="m-0">
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
                    Latihan Soal Modul 1</h1>
            </div>

            @if (session('grade'))
                <div
                    class="md:w-3/5 max-md:w-4/5 py-2 bg-[var(--neutral)] rounded-2xl border-[var(--white)] border-[6px] mt-10">
                    <p class="text-2xl sm:text-4xl font-bold drop-shadow-2xl text-[var(--contrast)] text-center">Nilai:
                        {{ session('grade') }} / 100</p>
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
                    <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col"
                        data-aos="zoom-in" data-aos-easing="ease-out-cubic">
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
                    <div class="question w-full flex bg-[var(--cream)] py-3 my-7 rounded-lg overflow-hidden max-sm:flex-col"
                        data-aos="zoom-in" data-aos-easing="ease-out-cubic">
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
    <script src="{{ asset('js/exercise1.js') }}"></script>
@endsection
