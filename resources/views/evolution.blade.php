@extends('layouts.app')

@section('title', 'Crash Evolution')

@section('content')
    {{-- Content --}}
    <div class="bg-[#e78c14] py-10">
        <h1 class="text-5xl font-crashInsane text-center pt-10 p-2">Crash Bandicoot Evolution</h1>

        {{-- Evolution --}}
        <div class="flex flex-col justify-center space-y-10 md:flex-row flex-wrap md:space-y-0 md:mx-14">
            <div class="pt-20">
                <figure>
                    <img class="w-[300px] mx-auto hover:scale-105" src="/img/crash-evo1.png" alt="Evo-1">
                    <figcaption class="shadow-xl w-80 text-center mx-auto text-2xl font-crashInsane md:pt-3 hover:underline cursor-pointer">1996</figcaption>
                </figure>
            </div>
            <div class="pt-20">
                <figure>
                    <img class="mx-auto hover:scale-105" src="/img/crash-evo7.png" alt="Evo-2">
                    <figcaption class="shadow-xl w-80 mx-auto text-center text-2xl font-crashInsane hover:underline cursor-pointer">2001</figcaption>
                </figure>
            </div>
            <div class="pt-20">
                <figure>
                    <img class="mx-auto hover:scale-105" src="/img/crash-evo2.png" alt="Evo-3">
                    <figcaption class="shadow-xl w-80 mx-auto text-center text-2xl font-crashInsane md:-mt-6 hover:underline cursor-pointer">2003</figcaption>
                </figure>
            </div>
            <div class="pt-20">
                <figure>
                    <img class="w-[415px] mx-auto hover:scale-105" src="/img/crash-evo3.png" alt="Evo-4">
                    <figcaption class="shadow-xl w-80 mx-auto text-center text-2xl font-crashInsane hover:underline cursor-pointer">2004</figcaption>
                </figure>
            </div>
            <div class="pt-20">
                <figure>
                    <img class="w-[400px] mx-auto hover:scale-105" src="/img/crash-evo4.png" alt="Evo-5">
                    <figcaption class="shadow-xl w-80 mx-auto text-center text-2xl font-crashInsane md:-mt-2 hover:underline cursor-pointer">2008</figcaption>
                </figure>
            </div>
            <div class="pt-20">
                <figure>
                    <img class="mx-auto hover:scale-105" src="/img/crash-evo5.png" alt="Evo-6">
                    <figcaption class="shadow-xl w-80 mx-auto text-center text-2xl font-crashInsane hover:underline cursor-pointer">2018</figcaption>
                </figure>
            </div>
            <div class="pt-20 pb-10">
                <figure>
                    <img class="w-[500px] mx-auto hover:scale-105" src="/img/crash-evo6.png" alt="Evo-7">
                    <figcaption class="shadow-xl w-80 mx-auto text-center text-2xl font-crashInsane hover:underline cursor-pointer">2020</figcaption>
                </figure>
            </div>
        </div>
    </div>
@endsection