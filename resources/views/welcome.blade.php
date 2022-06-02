@extends('layout.app')

@section('title', 'Главная страница')

@section('content')
    @include('partials.header')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Заповедные места России</h1>
            <p class="lead fw-normal">Природа нашей страны, учитывая ее размеры, удивительно разнообразна.
                У нас сохранились малоизведанные туристами места и тропы, которыми прошли лишь некоторые путешественники.</p>
        </div>
    </div>
   @include('partials.carousel')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($posts as $post)
            @include("posts.partials.item", ["post" => $post])
        @endforeach
    </div>

@include('partials.footer')
@endsection
