@extends('admin.partial.main')

@section('content')
    Tambah sponsor
    <form method="POST" action="{{ route('admin.sponsor') }}" enctype="multipart/form-data">
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
            <input type="file" name="sponsor">
            @error('sponsor')
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
