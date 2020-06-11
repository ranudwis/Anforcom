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
            <nav class="mx-5">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active timeline-link" id="nav-datmin-tab" data-toggle="tab" href="#nav-datmin" role="tab" aria-controls="nav-datmin" aria-selected="true">Data Mining</a>
                  <a class="nav-item nav-link timeline-link" id="nav-softdev-tab" data-toggle="tab" href="#nav-softdev" role="tab" aria-controls="nav-softdev" aria-selected="false">Software Development</a>
                  <a class="nav-item nav-link timeline-link" id="nav-talkshow-tab" data-toggle="tab" href="#nav-talkshow" role="tab" aria-controls="nav-talkshow" aria-selected="false">Talkshow</a>
                  <a class="nav-item nav-link timeline-link" id="nav-workshop-tab" data-toggle="tab" href="#nav-workshop" role="tab" aria-controls="nav-workshop" aria-selected="false">Workshop</a>
                  <a class="nav-item nav-link timeline-link" id="nav-closing-tab" data-toggle="tab" href="#nav-closing" role="tab" aria-controls="nav-closing" aria-selected="false">Closing</a>
                </div>
              </nav>
              <div class="tab-content mx-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-datmin" role="tabpanel" aria-labelledby="nav-datmin-tab">
                    <ul class="timeline">
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" target="_blank" href="#">New Web Design</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">21 March, 2014</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">21 000 Job Seekers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">4 March, 2014</a>
                            <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">Awesome Employers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">1 April, 2014</a>
                            <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-softdev" role="tabpanel" aria-labelledby="nav-softdev-tab">
                    <ul class="timeline">
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" target="_blank" href="#">New Web Design</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">21 March, 2014</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">21 000 Job Seekers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">4 March, 2014</a>
                            <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">Awesome Employers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">1 April, 2014</a>
                            <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-talkshow" role="tabpanel" aria-labelledby="nav-talkshow-tab">
                    <ul class="timeline">
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" target="_blank" href="#">New Web Design</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">21 March, 2014</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">21 000 Job Seekers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">4 March, 2014</a>
                            <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">Awesome Employers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">1 April, 2014</a>
                            <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-workshop" role="tabpanel" aria-labelledby="nav-workshop-tab">
                    <ul class="timeline">
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" target="_blank" href="#">New Web Design</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">21 March, 2014</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">21 000 Job Seekers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">4 March, 2014</a>
                            <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">Awesome Employers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">1 April, 2014</a>
                            <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-closing" role="tabpanel" aria-labelledby="nav-closing-tab">
                    <ul class="timeline">
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" target="_blank" href="#">New Web Design</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">21 March, 2014</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">21 000 Job Seekers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">4 March, 2014</a>
                            <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <a class="timeline-link font-weight-bold perbesar" href="#">Awesome Employers</a>
                            <a href="#" class="timeline-link font-weight-bold float-right">1 April, 2014</a>
                            <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                        </li>
                    </ul>
                </div>
              </div>
        </div>
    </div>
</article>
@endsection
