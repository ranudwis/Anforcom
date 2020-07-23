@extends('admin.partial.main')

@section('title', 'System Administration')

@section('content')
    <a href="{{ route('admin.system.linkStorage') }}">Storage linking</a>
    <a href="{{ route('admin.system.migrate') }}">Database migration</a>
@endsection
