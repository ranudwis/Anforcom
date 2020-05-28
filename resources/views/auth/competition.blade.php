<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competition</title>
</head>

<body>
    @foreach($competition as $cmpt)
    <a href="/auth/{{$cmpt -> id}}/register">{{$cmpt->name}}</a>
    @endforeach
</body>

</html>