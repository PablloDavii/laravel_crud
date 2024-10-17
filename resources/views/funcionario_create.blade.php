@extends('master')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}   
@endif
@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<h2>Criar</h2>
<form action="{{ route('funcionarios.store',)}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Seu nome:" value="{{ old('nome')}}">
    <input type="text" name="cargo" placeholder="Seu cargo:" value="{{ old('cargo')}}">
    <button type="submit">Criar</button>
</form>


@endsection