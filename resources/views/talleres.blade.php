@extends('layout')

@section('title', 'Talleres')

@section('content')
    <h1>Talleres</h1>
    <ul>
        @foreach ($talleres as $taller)
            <li>{{ $taller['titulo'] }}</li>
        @endforeach
    </ul>
@endsection


