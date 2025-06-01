@extends('layouts.app')

@section('title', 'Search Page')
@section('content')
    <h2>Search Users</h2>
    <form action="{{ url('/search') }}" method="get">
        <input type="text" name="search" placeholder="Enter search term" required>
        <button type="submit">Search</button>
    </form>

      @if(isset($results))
        <h3>Search Results:</h3>
        @forelse($results as $item)
            <li>{{ $item['name'] }}</li>
        @empty
            <li>No results found.</li>
        @endforelse

      @endif
@endsection
