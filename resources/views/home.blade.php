@extends('layout.master')

@section('title', 'Home')


@section('content')
    <div class="flex flex-col">
        {{-- Hightlight Book Section --}}
        <div class="border border-black w-[80%] h-[40vh] m-auto">
            <div class="flex ">
                <img class="h-[28vh]" src="{{ $highlight->image }}" alt="">

                <div class="flex flex-col">
                    <p>IT REALLY COUNTS</p>
                    <p>----------------</p>
                    <h1>{{$highlight->title}}</h1>
                    <h2>{{$highlight->description}}</h2>
                </div>

                @if (count($highlight) == 0)
                    <div  iv class="text-4xl">
                        <h1>No post</h1>
                    </div>
                @endif
            </div>
        </div>

        {{-- Lastest Book Review --}}
        <div class="border border-black w-[80%] h-[40vh] m-auto">
            <p>LASTEST BOOK REVIEW</p>
            <p>-------------------</p>

            <div class="grid grid-cols-7 gap-2">
                @foreach ($postsOrder as $post)
                    <div class="bg-red-300 h-[30vh] w-[10vw] border border-black text-[0.7vw]">
                        <img class="h-[20vh]"src="{{$post->image}}" alt="">

                        <h1 class="font-bold">{{$post->title}}</h1>
                        <h2>{{$post->description}}</h2>
                    </div>
                @endforeach

                @if (count($postsOrder) == 0)
                    <div  iv class="text-4xl">
                        <h1>No post</h1>
                    </div>
                @endif
            </div>
        </div>

        {{-- Book Series Review --}}
        <div class="border border-black w-[80%] h-[40vh] m-auto">
            <p>LASTEST BOOK REVIEW</p>
            <p>-------------------</p>

            <div class="grid grid-cols-7 gap-2">
                @foreach ($posts as $post)
                    <div class="bg-red-300 h-[30vh] w-[10vw] border border-black text-[0.7vw]">
                        <img class="h-[20vh]"src="{{$post->image}}" alt="">

                        <h1 class="font-bold">{{$post->title}}</h1>

                        <a href="/detail/{{$post->id}}"> Read Post </a>

                    </div>
                @endforeach

                @if (count($posts) == 0)
                    <div  iv class="text-4xl">
                        <h1>No post</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>


@endsection
