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
        <div class="form-group">
            <input type="text" name="name" placeholder="Nama Tugas">
            @error('name')
            <div class="invalid-feeback">
                {{$message}}
            </div>
            @enderror
        </div>
        <select name="competition_id">
            @foreach($competitions as $cmt)
            <option value="{{ $cmt->id }}">{{ $cmt->name }}</option>
            @endforeach
        </select>
        @error('competition_id')
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
        <div class="form-group">
            <input type="date" name="deadline">
            @error('deadline')
            <div class="invalid-feeback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit">Tambah Tugas</button>
    </form>
@endsection
