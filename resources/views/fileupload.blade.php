@extends('layouts.app')

@section('title', 'file upload')

@section('content')

    @if(session('success'))
        <div id="flash-message" style="
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        z-index: 9999;
    ">
        {{ session('success') }}
    </div>
    @endif
    
    @if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    </div>
@endif

    <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" >
        <button type="submit">upload</button>
    </form>

@endsection

<script>
    
    document.addEventListener('DOMContentLoaded', function () {
        const flash = document.getElementById('flash-message');
        if(flash){
            setTimeout(() => {
                flash.style.display = 'none';
            }, 2000);
        }
    });
</script>