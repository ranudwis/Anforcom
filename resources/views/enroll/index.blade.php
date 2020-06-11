@extends('dashboard.partial.main')

@section('content')
<article class="col-md-9 position-relative">
    <div class="row">
        <div class="col-md mt-5 mx-auto">
            <h3 class="text-center">
                Daftar Event yang Ingin Kamu Ikuti!
            </h3>
        </div>
    </div>
    <div class="row my-5">
        @foreach ($events as $event)
        <div class="col-md mx-5">
            <div class="card rounded shadow-sm mx-auto">
                <div class="card-body text-center">
                    <h5>
                        <a href="{{ route('enroll.show', ['event' => $event->slug]) }}" alt="Daftar {{ $event->name }}" title="Daftar {{ $event->name }}" style="text-decoration: none; color: black">{{ $event->name }}</a>
                    </h5>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</article>

@endsection
