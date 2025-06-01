<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>{{ $name }}</h3>
    <hr>

    @if ($age > 18)
        <p>You are eligible to vote.</p>
    @else
        <p>You are not eligible to vote.</p>
    @endif

    @isset($location)
        <p>Your location is: {{ $location }}</p>
    @else
        <p>No Location Found</p> 
    @endisset   

    @empty($skills)
        <p>No skills found.</p>
        @else
        <p>Your skills are: 
        @foreach ($skills as $skill)
            {{ $skill }}</p>
        @endforeach 

    @endempty
</body>
</html>