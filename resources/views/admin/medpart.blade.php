@extends('admin.partial.main')

@section('title', 'Media partner')

@section('content')
    Tambah Media Partner
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>
    @endif
    <form method="POST" action="{{ route('admin.medpart') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Nama">
            @error('name')
            <div class="invalid-feeback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="file" name="medpart">
            @error('medpart')
            <div class="invalid-feeback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="number" name="width" placeholder="Lebar">
            @error('width')
            <div class="invalid-feeback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="number" name="height" placeholder="Tinggi">
            @error('height')
            <div class="invalid-feeback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit">Tambah Sponsor</button>
    </form>
@endsection
