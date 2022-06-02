@extends('layout.admin')

@section('title','Добавить статью')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Добавить статью</h3>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ route("admin.article.store") }}">
                @csrf

                @if(isset($article))
                    @method('PUT')
                @endif

                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror" placeholder="Название" value="{{ $article->title ?? '' }}" />

                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('preview') border-red-500 @enderror" placeholder="Кратко" value="{{ $article->preview ?? '' }}" />

                @error('preview')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="post_id" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('preview') border-red-500 @enderror" placeholder="ИД Поста" value="{{ $article->post_id ?? '' }}" />

                @error('post_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <textarea name="description" class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-500 @enderror" placeholder="Описание" value="{{ $article->description ?? '' }}" ></textarea>

                @error('description')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($article) && $article->thumbnail)
                    <div>
                        <img class="h-64 w-64" src="{{ $post->thumbnail }}">
                    </div>
                @endif

                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />

                @error('thumbnail')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
