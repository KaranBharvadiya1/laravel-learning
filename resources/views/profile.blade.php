<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($people as $people)
            <p>{{ $people['name'] }}, {{ $people['message'] }}!</p>
        @endforeach
    </div>
</body>
</html>