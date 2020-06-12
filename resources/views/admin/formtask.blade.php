@extends('admin.partial.main')

@section('title', 'Tugas lomba')

@section('content')
Form Tambah Tugas
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif

<form method="POST" action="{{ route('admin.task') }}">
    @csrf
    <input type="hidden" name="event_id" value="{{$timelines[0]->event_id}}">
    <div class="form-group">
        <input type="text" name="name" placeholder="Nama Tugas">
        @error('name')
        <div class="invalid-feeback">
            {{$message}}
        </div>
        @enderror
    </div>
    @error('event_id')
    <div class="invalid-feeback">
        {{$message}}
    </div>
    @enderror
    <div class="form-group">
        <textarea name="description" placeholder="Deskripsi Tugas"></textarea>
        @error('description')
        <div class="invalid-feeback">
            {{$message}}
        </div>
        @enderror
    </div>
    <select name="timeline_id">
        @foreach($timelines as $timeline)
        <option value="{{$timeline -> id}}">{{$timeline -> start}} - {{$timeline -> end}} : {{$timeline -> name}}</option>
        @endforeach
    </select>
    <button type="submit">Tambah Tugas</button>
</form>
@endsection