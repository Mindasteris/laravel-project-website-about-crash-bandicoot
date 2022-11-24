@extends('layouts.app')

@section('title', 'Edit Comment')

@section('content')
    {{-- Create Comment --}}
    <div class="bg-[#e78c14] h-screen">
        <h1 class="text-5xl font-crashInsane text-center py-10">Edit Your Comment</h1>

        {{-- Form --}}
        <div class="flex justify-center">
            <form action="{{ route('update.post', $comments->id) }}" method="POST" class="bg-[#ff6522] border border-black w-full m-2 md:w-1/2 shadow-md rounded px-8 pt-6 pb-8 mb-10">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-white text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid bg-red-500 @enderror" autofocus value="{{ $comments->name }}">
                    {{-- Error --}}
                    @error('name')
                        <div class="text-white">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="title" class="block text-white text-sm font-bold mb-2">Title</label>
                    <input type="text" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('title') is-invalid bg-red-500 @enderror" value="{{ $comments->title }}">
                    {{-- Error --}}
                    @error('title')
                        <div class="text-white">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-white text-sm font-bold mb-2">Message</label>
                    <textarea class="shadow appearance-none border rounded w-full px-3 leading-tight focus:outline-none focus:shadow-outline @error('message') is-invalid bg-red-500 @enderror" name="message" cols="30" rows="10">{{ $comments->message }}</textarea>
                    {{-- Error --}}
                    @error('message')
                        <div class="text-white">{{ $message }}</div> 
                    @enderror
                </div>

                <button class="bg-black font-crashInsane text-2xl text-white p-5 w-full border rounded-2xl hover:bg-opacity-80" type="submit">
                    Update
                </button>
            </form>
        </div>

        {{-- Go Back --}}
        <div class="flex justify-center">
            <a href="{{ route('all.posts') }}"><button class="bg-black font-crashInsane text-2xl text-white px-5 py-2  border rounded-2xl hover:bg-opacity-80" type="button">Go Back</button></a>
        </div>
    </div>
@endsection