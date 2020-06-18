@extends('dashboard.partial.main')

@section('content')
<article class="col-md-9 position-relative">
    <div class="row">
        <div class="col-md">
            <h6 class="pt-5 pb-3 ml-5" style="color:rgba(0,0,0,0.5)">Dashboard (breadcumbs)</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <h4 class="ml-5">Timeline</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <nav class="mx-5 my-4">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  @foreach ($events as $event)
                      <a
                          class="nav-item nav-link {{ $loop->first ? 'active' : '' }} timeline-link"
                          id="nav-{{ $event->slug }}-tab"
                          data-toggle="tab"
                          href="#nav-{{ $event->slug }}"
                          role="tab"
                          aria-controls="nav-{{ $event->slug }}"
                          aria-selected="{{ $loop->first }}"
                      >
                        {{ $event->name }}
                      </a>
                  @endforeach
                </div>
              </nav>

              <div class="tab-content mx-5" id="nav-tabContent">
                  @foreach ($events as $event)
                      <div
                          class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                          id="nav-{{ $event->slug }}"
                          role="tabpanel"
                          aria-labelledby="nav-{{ $event->slug }}-tab"
                      >
                          <ul class="timeline">
                              @foreach ($event->timelines as $timeline)
                                  <li>
                                      <a class="timeline-link font-weight-bold perbesar">{{ $timeline->name }}</a>
                                      <a href="#" class="timeline-link font-weight-bold float-right">{{ $timeline->getRangeString() }}</a>
                                      <p>{{ $timeline->description }}</p>
                                  </li>
                              @endforeach
                          </ul>
                      </div>
                  @endforeach
              </div>
        </div>
    </div>
</article>
@endsection
