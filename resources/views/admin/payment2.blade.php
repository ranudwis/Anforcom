@extends('admin.partial.main')

@section('title', 'Pembayaran')

@section('content')

@foreach($events as $event)

<a href="{{route('admin.payment.show', ['id' => $event->id])}}">{{$event->name}}</a>

@endforeach

@endsection