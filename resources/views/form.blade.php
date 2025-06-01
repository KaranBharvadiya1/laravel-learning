<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of post method</title>
</head>
<body>
    <form action="{{ url("/submit") }}" method="post">
        @csrf
        <label for="name"></label>
        <input type="text" name="name" value="{{ old('name') }}">

        <button type="submit">submit</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    
    
    @endif
</body>
</html>