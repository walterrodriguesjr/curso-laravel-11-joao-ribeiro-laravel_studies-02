@extends('layouts.main_layout')

@section('content')

   @production
       <h1>Estou em ambiente de produção</h1>
       @else
       <h1>Estou em ambiente de desenvolvimento</h1>

   @endproduction

@endsection
