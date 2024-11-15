@extends('layouts.main_layout')

@section('content')
    @for ($index = 0; $index < 5; $index++)
        <h1>{{$index}}</h1>
    @endfor

    <hr>

    @foreach ($cities as $city)
        <h1>{{$city}}</h1>
    @endforeach

    <hr>

    @forelse ($names as $name)
    <h1>{{$name}}</h1>
    @empty
    <h1>Não há nomes cadastrados</h1>
    @endforelse

    <hr>

    @while ($indice < 10)
        <p>O índice é: {{$indice++}}</p>
    @endwhile
    <p>Finalizou</p>

@endsection
