@extends('dashboard.partial.main')

@section('content')
<article class="col-md-9 position-relative">
    <div class="row mt-5">
        <div class="col-md">
            <h4 class="ml-5">Pembayaran Biaya Pendaftaran {{ $registration->event->name }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card rounded shadow-sm mx-5 my-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="row">
                          <div class="col-md">
                              <h5 class="card-text mb-2">Status Pembayaran</h5>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md">
                              @if ($registration->isInactive())
                                  <h4 class="text-warning"><i class="fa fa-frown"></i>&#9;Menunggu Pembayaran</h4>
                                  <ul>
                                      <li>
                                          Transfer
                                          <ul>
                                              <li>
                                                  2521261210 - BCA a.n. Mutiara Hardiani Mahe
                                              </li>
                                              <li>
                                                  081601044203536 - BRI a.n. Adinda Rosman
                                              </li>
                                          </ul>
                                      </li>

                                      <li>
                                          Virtual DANA a.n Adinda Rosman

                                          <ul>
                                              <li>
                                                  3901082374559522 - BCA
                                              </li>
                                              <li>
                                                  88810082374559522 - BRI
                                              </li>
                                              <li>
                                                  8810082374559522 - BNI
                                              </li>
                                              <li>
                                                  89508082374559522 - Mandiri
                                              </li>
                                              <li>
                                                  8000009082374559522 - BTPN/Jenius
                                              </li>

                                              <li>
                                                  Nomor telepon DANA - 082374559522
                                              </li>
                                          </ul>
                                      </li>

                                      <li>
                                          GoPay - 089678964739
                                      </li>
                                  </ul>
                              @elseif ($registration->isPaid())
                                  <h4 class="text-info"><i class="fa fa-hourglass-half"></i>&#9;Menunggu Konfirmasi</h4>
                              @elseif ($registration->isRejected())
                                  <h4 class="text-danger"><i class="fa fa-times-circle"></i>&#9;Ditolak</h4>
                              @elseif ($registration->isActive())
                                  <h4 class="text-success"><i class="fa fa-check-circle"></i>&#9;Dikonfirmasi</h4>
                              @endif
                          </div>
                      </div>
                  </li>

                  @if ($registration->isInactive() || $registration->isRejected())
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md">
                                <h5 class="card-text mb-2">Form Pembayaran</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p class="card-text">Upload Bukti Pembayaran :</p>
                                <form
                                    method="POST"
                                    action="{{ route('dashboard.payment', ['event' => $registration->event->slug]) }}"
                                    enctype="multipart/form-data"
                                >
                                    @csrf

                                    <input type="file" name="payment_confirmation"></br>
                                    <button class="btn btn-warning mt-2" type="submit">Konfirmasi</button>
                                </form>
                            </div>
                        </div>
                      </li>
                  @endif

                  @unless ($registration->isInactive())
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md">
                                <h5 class="card-text mb-2">Bukti Pembayaran</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md text-center my-2">
                                <img src="{{ Storage::url($registration->payment_confirmation) }}" alt="Bukti Pembayaran" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                      </li>
                  @endunless

                </ul>
            </div>
        </div>
    </div>
</article>
@endsection
