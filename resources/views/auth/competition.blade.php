<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competition</title>
</head>

<body>
    @foreach($competitions as $competition)
        <a href="{{ route('register.competition', ['competition' => $competition->slug]) }}">
            {{ $competition->name }}
        </a>
    @endforeach
</body>

</html>
