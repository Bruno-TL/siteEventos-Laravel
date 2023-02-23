@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
    <h1>Laravel</h1>
    <img src="/img/banner.jpg" alt="Banner">
    @if(10 < 15)
        <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Thiago")
        <p>O nome é Thiago</p>
    @elseif($nome == "Bruno")
        <p>O nome é {{ $nome }} e tem {{ $idade }} de idade.</p>
    @else
        <p>O nome n é Thiago</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p> {{ $arr[$i] }} numero do array --- <br> {{ $i }} index do array</p>
        @if($i == 2)
            <p> O i é 2</p>
        @endif
    @endfor
@endsection
