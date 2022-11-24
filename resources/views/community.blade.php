@extends('layouts.app')

@section('title', 'Crash Community')

@section('content')
    {{-- Content --}}
    <div class="bg-[#e78c14] py-10">
        <h1 class="text-5xl font-crashInsane text-center pt-10">Crash Bandicoot Communty</h1>
        <h1 class="text-2xl font-crashInsane text-center pt-10">Tell us what do you think about Crash</h1>

        {{-- Button Create Comment --}}
        <div class="flex justify-center py-10">
            <a href="{{ route('create.post') }}"><button class="bg-black font-crashInsane text-2xl text-white p-5 rounded-2xl hover:bg-opacity-80">Create Comment</button></a>
        </div>

        {{-- Success Comment Message --}}
        @if (Session::has('success'))
            <div class="w-full md:w-1/2 mx-auto bg-green-500 text-2xl text-white font-Montserrat text-center p-2 mb-10 rounded-2xl">{{ Session::get('success') }}</div>
        @endif

        {{-- Success Update Message --}}
        @if (Session::has('update_message'))
            <div class="w-full md:w-1/2 mx-auto bg-blue-500 text-2xl text-white font-Montserrat text-center p-2 mb-10 rounded-2xl">{{ Session::get('update_message') }}</div>
        @endif

        {{-- Delete Message --}}
        @if (Session::has('delete_message'))
            <div class="w-full md:w-1/2 mx-auto bg-red-500 text-2xl text-white font-Montserrat text-center p-2 mb-10 rounded-2xl">{{ Session::get('delete_message') }}</div>
        @endif

        <hr>
        {{-- If no Comments --}}
        <div>
            @if ($comments->count() === 0)
                <div class="py-32">
                    <h1 class="text-4xl font-crashInsane text-center py-10 text-red-700">There are no comments below</h1>
                    <p class="text-4xl font-crashInsane text-center pb-10 text-red-700">Please be first to Comment</p>
                </div>
            @endif
        </div>

        {{-- Comments --}}
        @foreach ($comments as $comment)
            <div class="flex justify-center">
                <div class="border-2 border-[#ff6522] w-full mx-2 my-4 py-5 md:w-10/12 bg-slate-200 rounded-xl">
                    {{-- Comment Content --}}
                    <h1 class="text-center text-4xl font-crashInsane">{{ $comment->name }}</h1>
                    <h2 class="text-center text-xl p-2"><b>Title:&nbsp;</b> {{ $comment->title }}</h2>
                    <p class="p-4 m-2 bg-white font-semibold rounded-full">{{ $comment->message }}</p>
                    
                    <div class="px-5 mt-10 flex justify-between items-center">
                        <span class="text-sm font-semibold italic"><b class="not-italic">Date:&nbsp;</b> {{ $comment->updated_at }}</span>
                        <div>
                            {{-- BS Icons --}}
                            <a class="p-2" href="{{ route('edit.post', $comment->id) }}"><span class="text-2xl text-blue-600"><i class="bi bi-pencil-fill cursor-pointer"></i></span></a>
                            <a class="p-2" href="{{ route('delete.post', $comment->id) }}" onclick="return confirm('Are you sure ? Your post will be deleted!')"><span class="text-2xl text-red-600"><i class="bi bi-trash3-fill cursor-pointer"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <hr>

        {{-- PS Logo --}}
        <div class="flex justify-center items-center pt-10">
            <img src="/img/ps-logo.png" alt="ps-logo">
        </div>
    </div>
@endsection