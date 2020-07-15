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
    @foreach($events as $event)
    <input type="hidden" name="event_id" value="{{$event->id}}">
    @endforeach
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

<div class="display-task">
    <h3>List Tugas</h3>
    @if(count($tasks) !== 0)
    <table border="1">
        <tr>
            <th>Nama Tugas</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>
                <a href="{{route('admin.submission.show', ['event_id' => $task->event_id, 'task_id' => $task->id])}}">{{$task->name}}</a>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <h3>Belum ada tugas untuk peserta</h3>
    @endif
</div>
@endsection