Daftar<br />

@foreach ($events as $event)
    <a href="{{ route('enroll.show', ['event' => $event->slug]) }}">{{ $event->name }}</a><br />
@endforeach
