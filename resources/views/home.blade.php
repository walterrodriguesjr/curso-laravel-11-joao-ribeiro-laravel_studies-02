@extends('layouts.main_layout')

@section('content')
    @switch($value)
        @case(99)
            <h1>é igual a 99</h1>
        @break

        @case(100)
            <h1>é igual 100</h1>
        @break

        @case(110)
            <h1>é  igual a 500</h1>
        @break

        @default
            <h1>Nenhum das alternativas</h1>
    @endswitch
@endsection
