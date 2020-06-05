@extends('admin.partial.main')

@section('title', 'Timeline ' . $event->name)

@section('content')
    <h2>{{ $event->name }}</h2>

    <div class="form">
        <form method="POST" action="{{ route('admin.timeline.store', ['event_id' => $event -> id ])}}">
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
        <h4>Registrasi : </h4>
        @if ($registration)
            <p>Start : {{ $registration->start }}</p>
            <p>End : {{ $registration->end }}</p>
        @endif

        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Mulai</th>
                <th>Berakhir</th>
                <th>Deskripsi</th>
                <th>Venue</th>
                <th>Action</th>
            </tr>
            @foreach($event->timelines as $tml)
                <tr>
                    <td>{{ $tml->name }}</td>
                    <td>{{ $tml->start }}</td>
                    <td>{{ $tml->end }}</td>
                    <td>{{ $tml->description }}</td>
                    <td>{{ $tml->venue }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.event', ['event_id' => $tml -> event_id])}}">
                            @csrf
                            <input type="hidden" name="registrationid" value="{{ $tml -> id}}">
                            <button type="submit">Set Register</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection
