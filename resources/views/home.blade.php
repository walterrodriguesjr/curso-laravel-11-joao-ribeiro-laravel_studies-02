@extends('layouts.main_layout')

@section('content')
    @empty(!$value)
        <h1>tem dado</h1>
    @endempty

    <hr>

    @isset($value)
        <h1>A variável existe</h1>
    @endisset

    <hr>

    @unless($value != 100)
    <h1>Valor é 100</h1>
    @endunless
@endsection
