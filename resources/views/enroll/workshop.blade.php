<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Pendaftaran workshop</h2>
    <form action="{{ route('enroll.enrollworkshop', ['event' => $event->slug]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Nama Tim</label>
        <input type="text" name="team_name"><br>
        @error('team_name')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <h2>Ketua</h2>
        <label>Nama</label>
        <input type="text" name="name" value="{{ Auth::user()->name }}"><br>
        @error('name')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Instansi</label>
        <input type="text" name="university"><br>
        @error('university')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Email</label>
        <input type="text" name="email" value="{{ Auth::user()->email }}"><br>
        @error('email')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Kontak</label>
        <input type="number" name="contact" value="{{ Auth::user()->contact }}"><br>
        @error('contact')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir"><br>
        @error('tgl_lahir')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Foto KTM</label>
        <input type="file" name="leader_ktm"><br>
        <h2>Anggota 1</h2>
        <label>Nama</label>
        <input type="text" name="members[0][name]"><br>
        @error('nama')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>NIM</label>
        <input type="text" name="members[0][nim]"><br>
        <label>Instansi</label>
        <input type="text" name="members[0][instation]"><br>
        @error('instation')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Email</label>
        <input type="text" name="members[0][email]"><br>
        @error('email')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Kontak</label>
        <input type="number" name="members[0][contact]"><br>
        @error('contact')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Tanggal lahir</label>
        <input type="date" name="members[0][tgl_lahir]"><br>
        @error('tgl_lahir')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Foto KTM</label>
        <input type="file" name="members[0][ktm]" 2><br>
        <h2>Anggota 2</h2>
        <label>Nama</label>
        <input type="text" name="members[1][name]"><br>
        @error('nama')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>NIM</label>
        <input type="text" name="members[1][nim]"><br>
        <label>Instansi</label>
        <input type="text" name="members[1][instation]"><br>
        @error('instation')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Email</label>
        <input type="text" name="members[1][email]"><br>
        @error('email')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Kontak</label>
        <input type="number" name="members[1][contact]"><br>
        @error('contact')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Tanggal Lahir</label>
        <input type="date" name="members[1][tgl_lahir]"><br>
        @error('tgl_lahir')
        <div class="invalid-feedback">
            <p>{{$message}}</p>
        </div>
        @enderror
        <label>Foto KTM</label>
        <input type="file" name="members[1][ktm]"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
