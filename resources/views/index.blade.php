@extends('layouts.app')

@section('title', 'All Products')

@section('content')
    <h2>All Products</h2>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}">+ Add New Product</a><br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Price</th><th>Description</th><th>Actions</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
