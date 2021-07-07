@extends('template')

@push('css')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="form-area">
        <h1>Cadastrar Notícias</h1>
        <form action="{{route('news.register.form.submit')}}" method="POST">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="controll-form">
                <label for="">Título</label>
                <input type="text" name="title" class="controll-input" required/>
            </div>
            <div class="controll-form">
                <label for="">Autor</label>
                <input type="text" name="author" class="controll-input" required/>
            </div>
            <div class="controll-form">
                <label for="">Breve descrição</label>
                <textarea name="short_description" required></textarea>
            </div>
            <div class="controll-form">
                <label for="">Descrição</label>
                <textarea name="description" required></textarea>
            </div>
            <button class="btn btn-search" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
@endsection
