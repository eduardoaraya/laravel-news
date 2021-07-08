@extends('template')

@push('css')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="wrapper-forms">
        <div class="form-area">
            <h1>Cadastrar Categoria</h1>
            <form action="{{route('categories.register.form.submit')}}" method="POST">
                @csrf
                <div class="controll-form">
                    <label for="">Categoria</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="controll-input" required/>
                </div>
                <button class="btn btn-search" type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="form-area">
            <h1>Cadastrar Notícia</h1>
            <form action="{{route('news.register.form.submit')}}" method="POST">
                @csrf
                <div class="controll-form">
                    <label for="">Título</label>
                    <input type="text" value="{{ old('title') }}" name="title" class="controll-input" required/>
                </div>
                <div class="controll-form">
                    <label for="">Categoria</label>
                    <select class="controll-input" name="category_id" id="">
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="controll-form">
                    <label for="">Autor</label>
                    <input type="text" value="{{ old('author') }}" name="author" class="controll-input" required/>
                </div>
                <div class="controll-form">
                    <label for="">Breve descrição</label>
                    <textarea name="short_description" required>{{ old('short_description') }}</textarea>
                </div>
                <div class="controll-form">
                    <label for="">Descrição</label>
                    <textarea name="description" required>{{ old('description') }}</textarea>
                </div>
                <button class="btn btn-search" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
