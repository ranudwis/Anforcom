<section id="timeline" class="features-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Timeline</h3>
                    <p class="text">Catat tanggalnya dan jangan sampai tertinggal!</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <ul class="timeline">
                        <li>
                            @foreach ($competition->timelines as $timeline)
                                <li>
                                    <div class="content-text">
                                        <h3 class="line-title">{{ $timeline->name }}</h3>
                                        <span>{{ $timeline->getRangeString() }}</span>
                                        <p class="line-text">{{ $timeline->description }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
