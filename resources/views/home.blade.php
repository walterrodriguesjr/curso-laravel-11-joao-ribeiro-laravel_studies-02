@extends('layouts.main_layout')

@section('content')

    @session('name')
        <h1>{{ session('name')}}</h1>
    @else
        <h1>Não existe este dado</h1>
    @endsession

@endsection
