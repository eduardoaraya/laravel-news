@extends('template')

@section('content')
<div class="container">
    <div class="list-news">
        @forelse($news as $new)
            <div class="card-news">
                <div class="card-content">
                    <h1>{{$new->title}}</h1>
                    <p>{{$new->short_description}}</p>
                </div>
                <a class="btn" href="{{ route('news.view', ['id' => $new->id]) }}">Acessar</a>
            </div>
        @empty
            @if (Request::get('search'))
            <div class="alert">
                <p>Não há resultado para: {{Request::get('search')}}</p>
            </div>
            @else
            <div class="alert">
                <p>Nenhuma notícia encontrada</p>
            </div>
            @endif
        @endforelse
    </div>
</div>
@endsection
