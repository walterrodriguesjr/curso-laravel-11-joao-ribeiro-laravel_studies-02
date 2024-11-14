@extends('layouts.main_layout')

@section('content')
    <p class="display-1 text-center">
        @if ($value > 100)
            <h1>é maior que 100</h1>
        @elseif ($value == 100)
            <h1>é igual a 100</h1>
            @else
            <h1>é menor que 100</h1>
        @endif
    @endsection
