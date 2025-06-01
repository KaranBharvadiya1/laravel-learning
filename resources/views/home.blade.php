@extends('layouts.app')

@section('title', 'home-page')

@section('content')
<div class="container">
    <h1>Welcome to My First App</h1>
    <h1>My name is {{ $name }}</h1>
    <p>This is a simple Laravel application to demonstrate Blade templating.</p>
</div>
@endsection