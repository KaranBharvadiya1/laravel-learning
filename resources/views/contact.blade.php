@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    
    @if(session('success'))
    <div id="flash-message" class="flash-success">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('flash-message').style.display = 'none';
        }, 3000); // hides after 3 seconds
    </script>

    <style>
        .flash-success {
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 18px;
            z-index: 9999;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            animation: fadeInOut 3s ease-in-out;
        }

        @keyframes fadeInOut {
            0% { opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
@endif


    <form action="{{ route('contact.form') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        
        <textarea name="message" placeholder="message" value="{{ old('message') }}"></textarea>
        @error('message')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <button type="submit">submit</button>

    </form>
@endsection