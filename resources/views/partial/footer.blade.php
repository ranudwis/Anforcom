<footer id="footer" class="footer-area">
  <div class="footer-widget">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="footer-content">
            <a href="#home"><img src="{{ asset('assets/images/LOGO2 PUTIH.png') }}" alt="logo"></a>
            <p class="text"><b>Panitia Annual Informatics Competition 2020</b><br>Fakultas Sains dan Matiematika, Universitas Diponegoro,<br>Jl.Prof.Soedharto, S.H.,Tembalang, Semarang 50275 </p></p>
            <ul>
              <li><a href="http://line.me/ti/p/~@gsy5063l"><i class="lni lni-line"></i></a></li>
              <li><a href="https://twitter.com/Anforcom"><i class="lni lni-twitter-original"></i></a></li>
              <li><a href="https://www.instagram.com/anforcom/"><i class="lni lni-instagram-original"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCYNWHN4O_8om6FX7nKpE-rw"><i class="lni lni-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 formulir">
          <div class="contact-wrapper form-style-two pt-115">
            <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Hubungi kami</h4>
            <form name="formulir" id="contact-form" action="assets/contact.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-input mt-25">
                    <div class="input-items default">
                      <div class="single-tab-select-box">
                        <select class="form-control" name="keperluan">
                          <option value="default">Keperluan</option>
                          <option value="pertanyaan">Pertanyaan</option>
                          <option value="sponsorhip">Sponsorship</option>
                          <option value="partnership">Partnership</option>
                          <option value="lainnya">Lainnya</option>
                        </select>
                      </div>
                    </div>
                  </div> <!-- form input -->
                </div>
                <div class="col-md-6">
                  <div class="form-input mt-25">
                    <div class="input-items default">
                      <input type="email" name="email" placeholder="Email">
                    </div>
                  </div> <!-- form input -->
                </div>
                <div class="col-md-12">
                  <div class="form-input mt-25">
                    <div class="input-items default">
                      <textarea name="massage" placeholder="Massage"></textarea>
                    </div>
                  </div> <!-- form input -->
                </div>
                <div class="col-md-12">
                  <div class="form-input light-rounded-buttons mt-30">
                    <button class="main-btn light-rounded-two" onclick="konfirmasi()">Send Message</button>
                    <script type="text/javascript">
                      function konfirmasi(){ alert("Pesan telah dikirimkan. Terima kasih");}
                    </script>
                  </div> <!-- form input -->
                </div>
              </div> <!-- row -->
            </form>
          </div> <!-- contact wrapper form -->
        </div>
      </div>
    </div>
  </div>
</footer>

<!--script src="{{ asset('assets/js/ajax-contact.js') }}"></script-->
