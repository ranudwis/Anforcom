@extends('admin.partial.main')

@section('title', 'Tugas lomba')

@section('content')
<h2>Pilih event</h2>
@foreach($event as $evnt)
<a href="{{ route('admin.formtask',['event_id' => $evnt->id]) }}">{{ $evnt->name }}</a>
@endforeach
@endsection