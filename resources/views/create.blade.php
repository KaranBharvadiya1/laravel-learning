@extends('layouts.app')

@section('title', 'Add Products')

@section('content')
    <h2>Add Products</h2>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name"><br>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="price">Price</label>
        <input type="text" name="price"><br>
        @error('price')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="description">Description</label>
        <textarea name="description"></textarea><br>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Add Product</button>
    </form>
@endsection
