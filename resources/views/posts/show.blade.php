@extends('layout.app')

@section('title', $post->title)

@section('content')
    @include('partials.header')

    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl" >
                <div>
                    <img src="{{ $post->thumbnail }}">
                </div>
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">{{ $post->title }}</h2>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {!! $post->description !!}
                    </p>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                    </p>
                </div>
            </div>

            <div>
                <section class="rounded-b-lg mt-4">
                    <form method="POST" action="{{ route("comment", $post->id) }}">
                        @csrf

                        <textarea name="text" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl @error('text') border-red-500 @enderror" placeholder="Ваш комментарий..." spellcheck="false"></textarea>

                        @error('text')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="font-bold py-2 px-4 w-full bg-yellow-500 text-lg text-white shadow-md rounded-lg">Написать</button>
                    </form>

                    <div id="task-comments" class="pt-4">
                        @foreach($post->comments as $comment)
                            <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                                <div class="flex flex-row justify-center mr-2">
                                    <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $comment->user->name }}</h3>
                                </div>

                                <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->text }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($post->articles as $article)
                        <div class="col">
                            <div class="bg-white shadow-2xl" >
                                <div>
                                    <a href="{{ route("posts.article", $article->id) }}">
                                        <img src="{{ $article->thumbnail }}">
                                    </a>
                                </div>
                                <div class="px-4 py-2 mt-2 bg-white">
                                    <h2 class="font-bold text-2xl text-gray-800">{{ $article->title }}</h2>
                                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                                        {!! $article->preview !!}
                                    </p>
                                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
