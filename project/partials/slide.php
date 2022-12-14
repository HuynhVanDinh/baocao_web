  <link href="<?= BASE_URL_PATH . "css/style.css" ?>" rel=" stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript -->
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });


    $('#myCarousel').carousel({
        interval: false
    });

    //scroll slides on swipe for touch enabled devices

    $("#myCarousel").on("touchstart", function(event) {

        var yClick = event.originalEvent.touches[0].pageY;
        $(this).one("touchmove", function(event) {

            var yMove = event.originalEvent.touches[0].pageY;
            if (Math.floor(yClick - yMove) > 1) {
                $(".carousel").carousel('next');
            } else if (Math.floor(yClick - yMove) < -1) {
                $(".carousel").carousel('prev');
            }
        });
        $(".carousel").on("touchend", function() {
            $(this).off("touchmove");
        });
    });
})
  </script>

  <div class="header_section mb-5">
      <div class="banner_section">
          <div class="container-fluid">
              <section class="slide-wrapper">
                  <div class="container-fluid">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <div class="row">
                                      <div class="col-sm-2 padding_0">
                                          <div class="page_no">1/4</div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="banner_taital">
                                              <h1 class="banner_text">D-twice Sneaker</h1>
                                              <h1 class="mens_text"><strong>Chuy??n gi??y Adidas, Nike
                                                      <br> <br>ch??nh h??ng</strong></h1>
                                              <p class="lorem_text">Ch??ng t??i khi???n cho m???i b?????c ??i c???a b???n
                                                  tr??? n??n
                                                  ????ng nh???.
                                              </p>
                                              <button class="buy_bt">Mua ngay</button>
                                              <button class="more_bt">Xem chi ti???t</button>
                                          </div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="shoes_img"><img src="img/add-hu.png"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="row">
                                      <div class="col-sm-2 padding_0">
                                          <div class="page_no">2/4</div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="banner_taital">
                                              <h1 class="banner_text">D-twice Sneaker</h1>
                                              <h1 class="mens_text"><strong>Chuy??n sneaker ch??nh h??ng</strong>
                                              </h1>
                                              <p class="lorem_text">Ch??ng t??i khi???n cho m???i b?????c ??i c???a b???n
                                                  tr??? n??n
                                                  ????ng nh???.
                                              </p>
                                              <button class="buy_bt">Mua ngay</button>
                                              <button class="more_bt">Xem chi ti???t</button>
                                          </div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="shoes_img"><img src="img/add-hu2.png"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="row">
                                      <div class="col-sm-2 padding_0">
                                          <div class="page_no">3/4</div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="banner_taital">
                                              <h1 class="banner_text">D-twice Sneaker</h1>
                                              <h1 class="mens_text"><strong>ADIDAS - DI???N M???O <br><br> V?????T
                                                      TH???I
                                                      GIAN</strong>
                                              </h1>
                                              <p class="lorem_text">Adidas l?? nh?? s???n xu???t d???ng c??? th??? thao
                                                  l???n th???
                                                  hai tr??n th??? gi???i.
                                                  <br> C??ng ty ???????c ?????t theo t??n c???a ng?????i s??ng l???p, Adolf
                                                  (Adi)
                                                  Dassler, n??m 1948.
                                                  <br> C??ng ty Adidas ???????c ????ng k?? nh??n hi???u
                                                  l?? Adidas AG
                                                  <br> v??o ng??y 18 th??ng 8 n??m 1949.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="shoes_img"><img src="img/add-spstar.png"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="row">
                                      <div class="col-sm-2 padding_0">
                                          <div class="page_no">4/4</div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="banner_taital">
                                              <h1 class="banner_text">D-twice Sneaker</h1>
                                              <h1 class="mens_text"><strong>NIKE - ???Just do it??? </strong></h1>
                                              <p class="lorem_text">Nike, Inc. l?? t???p ??o??n ??a qu???c gia c???a M???
                                                  ho???t
                                                  ?????ng trong l??nh v???c thi???t k???, ph??t tri???n, s???n xu???t, qu???ng b??
                                                  c??ng
                                                  nh?? kinh doanh c??c m???t h??ng gi??y d??p, qu???n ??o, ph??? ki???n,
                                                  trang thi???t
                                                  b??? v?? d???ch v??? li??n quan ?????n th??? thao.
                                                  <br>C??ng ty ???????c th??nh l???p v??o ng??y 25 th??ng 1 n??m 1964
                                                  <br> v???i t??n Blue
                                                  Ribbon Sports v?? ch??nh th???c c??
                                                  t??n Nike, Inc. v??o n??m
                                                  1971.
                                                  <br>C??ng ty n??y l???y t??n theo ????????, n??? th???n chi???n th???ng c???a
                                                  Hy L???p.
                                              </p>
                                              <button class="buy_bt">Mua ngay</button>
                                              <button class="more_bt">Xem chi ti???t</button>
                                          </div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="shoes_img"><img src="img/add-spstar2.png"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </div>
      </div>
  </div>