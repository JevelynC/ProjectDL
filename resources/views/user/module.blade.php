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
    <section class="min-h-screen min-w-screen pb-10">
        <div class="w-full flex items-center flex-col">
            <div class="title-container w-9/12 py-10">
                <h1
                    class="text-5xl font-extrabold drop-shadow-2xl text-[var(--contrast)] uppercase border-b-4 border-[var(--contrast)]">
                    Modul Pembelajaran</h1>
            </div>
            <div class="grid grid-rows-2 grid-cols-2 w-9/12 gap-10">
                @foreach ($modules as $module)
                    <div
                        class="module-container w-full bg-[var(--primary)] h-[250px] flex flex-col justify-center rounded-xl shadow-xl">
                        <div class="flex items-center">
                            <div class="pl-7">
                                <img src="{{ asset($module['image']) }}" class="w-[120px]">
                            </div>
                            <div class="h-full flex flex-col justify-center px-7">
                                <h2 class="text-xl font-bold py-2">{{ $module['title'] }}</h2>
                                <p class="text-justify max-w-[400px]">{{ $module['description'] }}</p>
                            </div>
                        </div>
                        <div class="w-full flex px-7 py-4">
                            <a class="w-1/2 mr-3 rounded-lg bg-[var(--neutral)] h-[40px] font-semibold flex justify-center 
                        items-center"
                                href="{{ $module['module'] }}">Modul</a>
                            <a class="w-1/2 rounded-lg bg-[var(--neutral)] h-[40px] font-semibold flex justify-center 
                        items-center"
                                href="{{ $module['assessment'] }}">Latihan Soal</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
