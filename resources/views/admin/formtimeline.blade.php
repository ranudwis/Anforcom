<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Timeline</title>
</head>

<body>
    <h2>{{ $event->name }}</h2>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>
    @endif
    <div class="form">
        <form method="POST" action="{{ route('admin.timeline.add', ['event_id' => $event -> id ])}}">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id}}">
            <label>Start</label>
            <div class="form-group">
                <input type="date" name="start" value="{{ old('start') }}">
                @error('start')
                <div class="invalid-feeback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <label>End</label>
            <div class="form-group">
                <input type="date" name="end" value="{{ old('end') }}">
                @error('end')
                <div class="invalid-feeback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feeback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="description">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feeback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="venue" placeholder="venue">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="displaytimeline">
        <h3>Timeline</h3>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Mulai</th>
                <th>Berakhir</th>
                <th>Deskripsi</th>
                <th>Venue</th>
            </tr>
            @foreach($timeline as $tml)
            <tr>
                <td>{{ $tml->name }}</td>
                <td>{{ $tml->start }}</td>
                <td>{{ $tml->end }}</td>
                <td>{{ $tml->description }}</td>
                <td>{{ $tml->venue }}</td>
            </tr>
            @endforeach
        </table>



    </div>
</body>

</html>