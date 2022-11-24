@extends('layouts.app')

@section('title', 'Create Comment')

@section('content')
    {{-- Create Comment --}}
    <div class="bg-[#e78c14]">
        <h1 class="text-5xl font-crashInsane text-center py-10">Create Comment</h1>

        {{-- Form --}}
        <div class="flex justify-center">
            <form action="{{ route('submit.post') }}" method="POST" class="bg-[#ff6522] border border-black w-full m-2 md:w-1/2 shadow-md rounded px-8 pt-6 pb-8 mb-10">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-lg font-bold mb-2">Name</label>
                    <input type="text" name="name" class="border-2 border-black shadow appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid bg-gray-300 @enderror" autofocus>
                    {{-- Error --}}
                    @error('name')
                        <div class="text-white font-bold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="title" class="block text-lg font-bold mb-2">Title</label>
                    <input type="text" name="title" class="border-2 border-black shadow appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('title') is-invalid bg-gray-300 @enderror">
                    {{-- Error --}}
                    @error('title')
                        <div class="text-white font-bold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="favorite_crash_game" class="block text-lg font-bold mb-2">What is your favorite Crash game ?</label>
                    <select name="favorite_crash_game" id="select" class="border-2 border-black focus:outline-none focus:shadow-outline text-sm font-bold rounded-lg block w-full p-3">
                        <option selected value="None">None</option>
                        <option value="Crash Bandicoot">Crash Bandicoot</option>
                        <option value="Crash Bandicoot 2: Cortex Strikes Back">Crash Bandicoot 2: Cortex Strikes Back</option>
                        <option value="Crash Bandicoot: Warped">Crash Bandicoot: Warped</option>
                        <option value="Crash Team Racing">Crash Team Racing</option>
                        <option value="Crash Bash">Crash Bash</option>
                        <option value="Crash Bandicoot: The Wrath of Cortex">Crash Bandicoot: The Wrath of Cortex</option>
                        <option value="Crash Bandicoot: The Huge Adventure">Crash Bandicoot: The Huge Adventure</option>
                        <option value="Crash Bandicoot 2: N-Tranced">Crash Bandicoot 2: N-Tranced</option>
                        <option value="Crash Nitro Kart">Crash Nitro Kart</option>
                        <option value="Crash Bandicoot Purple: Ripto's Rampage">Crash Bandicoot Purple: Ripto's Rampage</option>
                        <option value="Crash Twinsanity">Crash Twinsanity</option>
                        <option value="Crash Tag Team Racing">Crash Tag Team Racing</option>
                        <option value="Crash Boom Bang!">Crash Boom Bang!</option>
                        <option value="Crash of the Titans">Crash of the Titans</option>
                        <option value="Crash: Mind over Mutant">Crash: Mind over Mutant</option>
                        <option value="Crash Bandicoot Nitro Kart 2">Crash Bandicoot Nitro Kart 2</option>
                        <option value="Crash Bandicoot N. Sane Trilogy">Crash Bandicoot N. Sane Trilogy</option>
                        <option value="Crash Team Racing Nitro-Fueled">Crash Team Racing Nitro-Fueled</option>
                        <option value="Crash Bandicoot 4: It's About Time">Crash Bandicoot 4: It's About Time</option>
                        <option value="Crash Bandicoot: On the Run">Crash Bandicoot: On the Run</option>   
                    </select>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-lg font-bold mb-2">Message</label>
                    <textarea class="border-2 border-black shadow appearance-none rounded w-full px-3 leading-tight focus:outline-none focus:shadow-outline @error('message') is-invalid bg-gray-300 @enderror" name="message" cols="30" rows="10"></textarea>
                    {{-- Error --}}
                    @error('message')
                        <div class="text-white font-bold">{{ $message }}</div> 
                    @enderror
                </div>

                <button class="bg-black font-crashInsane text-2xl text-white p-5 w-full border rounded-2xl hover:bg-opacity-80" type="submit">
                    Post
                </button>
            </form>
        </div>

        {{-- Go Back --}}
        <div class="flex justify-center pb-20">
            <a href="{{ route('all.posts') }}"><button class="bg-black font-crashInsane text-2xl text-white px-5 py-2 border rounded-2xl hover:bg-opacity-80" type="button">Go Back</button></a>
        </div>
    </div>
@endsection