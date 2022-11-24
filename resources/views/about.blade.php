@extends('layouts.app')

@section('title', 'Crash About')

@section('content')
    <div class="bg-[#e78c14] py-10">
        <h1 class="text-5xl font-crashInsane text-center pt-10">Have a question ?</h1>
        <h1 class="text-5xl font-crashInsane text-center py-10">Contact Us !</h1>

        {{-- Contact Success Message --}}
        @if (Session::has('contact_success'))
        <div class="w-full md:w-1/2 mx-auto bg-green-500 text-2xl text-white font-Montserrat text-center p-2 mb-10 rounded-2xl">{{ Session::get('contact_success') }}</div>
        @endif

        {{-- Form --}}
        <div class="flex justify-center">
            <form action="{{ route('contact.submit') }}" method="POST" class="bg-[#ff6522] border border-black w-full m-2 md:w-1/2 shadow-md rounded px-8 pt-6 pb-8 mb-10">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-lg font-bold mb-2"><i class="bi bi-people-fill"></i> Name</label>
                    <input type="text" name="name" class="border-2 border-black shadow appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid bg-gray-300 @enderror" autofocus>
                    {{-- Error --}}
                    @error('name')
                        <div class="text-white font-bold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-lg font-bold mb-2"><i class="bi bi-envelope-fill"></i> Email</label>
                    <input type="email" name="email" class="border-2 border-black shadow appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid bg-gray-300 @enderror">
                    {{-- Error --}}
                    @error('email')
                        <div class="text-white font-bold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="subject" class="block text-lg font-bold mb-2"><i class="bi bi-send-fill"></i> Subject</label>
                    <input type="text" name="subject" class="border-2 border-black shadow appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('subject') is-invalid bg-gray-300 @enderror">
                    {{-- Error --}}
                    @error('subject')
                    <div class="text-white font-bold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="contact_message" class="block text-lg font-bold mb-2"><i class="bi bi-chat-dots-fill"></i> Message</label>
                    <textarea class="border-2 border-black shadow appearance-none rounded w-full px-3 leading-tight focus:outline-none focus:shadow-outline @error('contact_message') is-invalid bg-gray-300 @enderror" name="contact_message" cols="30" rows="10"></textarea>
                    {{-- Error --}}
                    @error('contact_message')
                        <div class="text-white font-bold">{{ $message }}</div> 
                    @enderror
                </div>

                <button class="bg-black font-crashInsane text-2xl text-white p-5 w-full border rounded-2xl hover:bg-opacity-80" type="submit">
                    Send
                </button>
            </form>
        </div>

        {{-- Image --}}
        <div class="flex justify-center items-center">
            <img class="w-96" src="/img/crash-ctr.png" alt="crash-ctr">
        </div>
    </div>
@endsection