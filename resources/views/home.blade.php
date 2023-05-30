@extends('layout.master')

@section('title', 'Home')


@section('content')
    <div class="flex flex-col">
        {{-- Hightlight Book Section --}}
        <div class="border border-black w-[80%] border-[0.2vw] h-[30vh] m-auto bg-white">
            <div class="flex ">
                <img class="h-[28vh] ml-[1vw] mt-[0.4vw]" src="{{ $highlight->image }}" alt="">

                <div class="flex flex-col font-bold mt-[0.4vw]">
                    <p class="text-[1vw] underline underline-offset-4">IT REALLY COUNTS</p>

                    <div class="w-[100%] h-[15vh] text-[2.5vw]">{{$highlight->title}}</div>
                    <h2>{{$highlight->description}}</h2>
                </div>

                @if (!$highlight)
                    <div  iv class="text-4xl">
                        <div>No post</div>
                    </div>
                @endif
            </div>
        </div>

        {{-- Lastest Book Review --}}
        <div class="border border-black w-[80%] border-[0.2vw] h-[40vh] mt-[0.5vw] m-auto bg-white font-bold">
            <p class="text-[1vw] underline underline-offset-4">LASTEST BOOK REVIEW</p>

            <div class="grid grid-cols-7 gap-2 mt-[0.5vw]">
                @foreach ($postsOrder as $post)
                    <a href="/detail/{{$post->id}}">
                        <div class="h-[32vh] w-[10vw] border border-black text-[0.7vw] mt-[0.4vw] m-auto">
                            <img class="h-[20vh]"src="{{$post->image}}" alt="">

                            <h1 class="font-bold">{{$post->title}}</h1>
                            <h2 class="font-normal mt-[0.2vw]">{{$post->description}}</h2>
                        </div>
                    </a>
                @endforeach

                @if (count($postsOrder) == 0)
                    <div class="text-4xl">
                        <h1>No post</h1>
                    </div>
                @endif
            </div>
        </div>

        {{-- Book Series Review --}}
        <div class="border border-black w-[80%] border-[0.2vw] h-[40vh] mt-[0.5vw] m-auto bg-white font-bold">
            <p class="text-[1vw] underline underline-offset-4">BOOK SERIES REVIEW</p>

            <div class="grid grid-cols-7 gap-2 mt-[0.4vw]">
                @foreach ($posts as $post)
                    <div class="h-[30vh] w-[10vw] border border-black text-[0.7vw]  mt-[0.4vw] m-auto">
                        <img class="h-[20vh]"src="{{$post->image}}" alt="">

                        <h1 class="font-bold">{{$post->title}}</h1>
                        <div class=" border border-black w-[4vw] flex mt-[0.5vw]">
                            <a href="/detail/{{$post->id}}" class="font-normal m-auto"> Read Post </a>
                        </div>
                    </div>
                @endforeach

                @if (count($postsOrder) == 0)
                    <div class="text-4xl">
                        <h1>No post</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>


@endsection
