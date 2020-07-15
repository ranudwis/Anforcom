@extends('admin.partial.main')

@section('title', 'Timeline')

@section('content')
<div>
    <h5>Pilih event</h5>
</div>
@foreach($events as $event)
<a href="{{ route('admin.timeline.show', ['event' => $event->slug]) }}">{{ $event->name }}</a>
@endforeach
@endsection