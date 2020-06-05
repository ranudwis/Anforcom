<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h5>Pilih event</h5>
    </div>
    @foreach($events as $event)
        <a href="{{ route('admin.timeline.show', ['event' => $event->slug]) }}">{{ $event->name }}</a>
    @endforeach
</body>

</html>
