@extends('dashboard.partial.main')

@section('content')
<article class="col-md-9 position-relative">
    <div class="row mt-5">
        <div class="col-md">
            <h4 class="ml-5">Detail Lomba</h4>
        </div>
        <div class="col-md">
            <h6 class="d-flex justify-content-end mr-5"><a style="text-decoration: none;color: black" href="#"><i class="fa fa-info-circle"></i>&#9;Info Selengkapnya</a></h6>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <h3 class="ml-5 font-weight-bold">Nama Lomba</h3>
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
                              <h5 class="font-weight-bold mb-3">Anforcom 2073</h5> 
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
                                  Nama Ketua Kita
                              </h5>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md">
                              <h6>Nama Anggota 1</h6>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md">
                              <h5 class="font-weight-bold mb-3">Anggota 1</h5>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                            <h6>Nama Anggota 2</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <h5 class="font-weight-bold mb-3">Anggota 2</h5>
                        </div>
                    </div>
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
