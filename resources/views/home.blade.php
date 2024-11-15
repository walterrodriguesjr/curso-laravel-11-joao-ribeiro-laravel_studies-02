@extends('layouts.main_layout')

@section('content')
    @for ($index = 0; $index < 10; $index++)


        @if ($index == 5)
            @continue
        @endif

        <p>Index: {{$index}}</p>

        @if ($index == 7)
        @break
    @endif
@endfor

<hr>

@foreach ($cities as $city)
    <p>{{$city}}</p>
@endforeach
@endsection
