@extends('admin.partial.main')

@section('title', 'System Administration')

@section('content')
    <a href="{{ route('admin.system.linkStorage') }}">Storage linking</a>
@endsection
