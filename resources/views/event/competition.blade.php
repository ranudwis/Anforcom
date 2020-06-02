lomba lomba
<br />

@foreach ($competitions as $competition)
    <a href="{{ route('competition.show', ['competition' => $competition->slug]) }}">{{ $competition->name }}</a>
@endforeach
