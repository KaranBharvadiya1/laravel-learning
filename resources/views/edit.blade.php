@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}"><br>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="price">Price</label>
        <input type="text" name="price" value="{{ old('price', $product->price) }}"><br>
        @error('price')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="description">Description</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea><br>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Update Product</button>
    </form>
@endsection
