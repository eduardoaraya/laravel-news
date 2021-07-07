@extends('template')

@push('css')
<link href="{{ asset('css/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="new-content">
        <div class="title">
            <h1>{{$new->title}}</h1>
            <span class="author">{{$new->author}}</span>
        </div>
        <div class="new-description">
            <p>{{$new->description}}</p>
        </div>
    </div>
</div>
@endsection
