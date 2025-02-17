@extends('layouts.app')

@section('content')

@isset($name)
    <h1>Bienvenue sur Laravel, {{$name}}</h1>
@else
    <h1>Bienvenue sur Laravel</h1>
@endisset

<ul>
    <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
    <li><a href="http://127.0.0.1:8000/contact">A propos</a></li>
</ul>

@endsection

