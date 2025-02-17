@extends('layouts.app')

@section('content')

@isset($name)
    <h1>Bienvenue sur Laravel, {{$name}}</h1>
@else
    <h1>Bienvenue sur Laravel</h1>
@endisset

@endsection

