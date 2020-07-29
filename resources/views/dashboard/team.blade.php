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
                                    <h5 class="font-weight-bold mb-3">Pengumpulan file</h5>
                                </div>
                            </div>

                            @foreach ($event->tasks as $task)
                                <div class="mb-4">
                                    <h5>{{ $task->name }}</h5>

                                    <p>
                                        {{ $task->timeline->getRangeString() }}
                                    </p>

                                    @foreach ($task->submissions as $submission)
                                        <a href="{{ Storage::url($submission->file) }}" target="_blank">
                                            <div>
                                                Pengumpulan {{ $submission->created_at->format('j F Y H:i:s') }}
                                            </div>
                                        </a>
                                    @endforeach

                                    @if ($task->submissions->count() !== 0)
                                        <p class="mt-2">
                                            Upload revisi
                                        </p>
                                    @endif
                                    <form
                                        method="post"
                                        action="{{ route('dashboard.submission.submit', ['task' => $task->id]) }}"
                                        enctype="multipart/form-data"
                                    >
                                        @csrf
                                        <input name="file" type="file" /><br />
                                        <button type="submit">Kirim</button>
                                    </form>
                                </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
@endsection
