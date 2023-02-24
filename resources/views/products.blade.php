@extends('layouts.main')
@section('title', 'Produtos')
@section('content')

<h1>Page of product</h1>
@if($busca!='')
    <p>O isuario estar buscando por {{ $busca }}</p>
@endif

<a href="/">Back for Welcome</a>
@endsection
