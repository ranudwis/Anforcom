<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran {{ $event->name }}</title>
</head>

<body>
    <h2>Form Pendaftaran Anforcom</h2>

    <form method="POST" action="{{ route('enroll.create', ['event' => $event->slug]) }}" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        <h3> {{ $event->name }}</h3>
        <div class="form-group">
            <input type="text" name="university" placeholder="University" value="{{old('university')}}">
            @error('university')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="team_name" placeholder="Team Name" value="{{old('team_name')}}">
        </div>
        <div class="form-group">
            <input type="text" name="leader_nim" placeholder="Leader NIM" value="{{old('leader_nim')}}">
            @error('leader_nim')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="leader_contact" placeholder="Leader Contact" value="{{old('leader_contact')}}">
            @error('leader_contact')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Upload Foto KTM Ketua</label><br>
            <input type="file" name="leader_ktm">
            @error('leader_ktm')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="members[0][name]" placeholder="Member 1 Name" value="{{ old('members[0][name]') }}">
        </div>
        <div class="form-group">
            <input type="text" name="members[0][email]" placeholder="Member 1 Email" value="">
        </div>
        <div class="form-group">
            <input type="text" name="members[0][nim]" placeholder="Member 1 NIM">
        </div>
        <div class="form-group">
            <input type="text" name="members[0][contact]" placeholder="Contact">
        </div>
        <div class="form-group">
            <label>Upload Foto KTM Anggota 1</label><br>
            <input type="file" name="members[0][ktm]">
        </div>

        <div class="form-group">
            <input type="text" name="members[1][name]" placeholder="Member 2 Name">
        </div>
        <div class="form-group">
            <input type="text" name="members[1][email]" placeholder="Member 2 Email">
        </div>
        <div class="form-group">
            <input type="text" name="members[1][nim]" placeholder="Member 2 NIM">
        </div>
        <div class="form-group">
            <input type="text" name="members[1][contact]" placeholder="Contact">
        </div>
        <div class="form-group">
            <label>Upload Foto KTM Anggota 2</label><br>
            <input type="file" name="members[1][ktm]">
        </div>

        <button type="submit">Daftar</button>
    </form>

</body>

</html>
