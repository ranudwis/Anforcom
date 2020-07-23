@extends('dashboard.partial.main')

@section('content')
    <article class="col-md-9 pt-4 position-relative">
        <div class="row">
            <div class="col-md">
                <h3 class="ml-5 font-weight-bold">{{ $event->name }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card rounded shadow-sm mx-5 my-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md">
                                    <h6>Nama Tim</h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md">
                                    <h5 class="font-weight-bold mb-3">{{ $leader->team->name }}</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md">
                                    <h6>Nama Ketua</h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md">
                                    <h5 class="font-weight-bold mb-3">
                                        {{ $leader->name }}
                                    </h5>
                                </div>
                            </div>

                            @foreach ($leader->team->members as $member)
                                <div class="row">
                                    <div class="col-md">
                                        <h6>Nama Anggota {{ $loop->iteration }}</h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <h5 class="font-weight-bold mb-3">{{ $member->name }}</h5>
                                    </div>
                                </div>
                            @endforeach

                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md">
                                    <h5 class="font-weight-bold mb-3">Form Tugas</h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
@endsection
