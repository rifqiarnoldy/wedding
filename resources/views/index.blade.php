<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Anto & Puput - Undangan Digital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@400;500;600&family=Petit+Formal+Script&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target="#navBar" id="weddingHome">

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4"
                                style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Undangan
                                    Pernikahan</h4>
                            </div>
                            <h1 class="display-1 text-capitalize text-white mb-3">Anto <i
                                    class="fa fa-heart text-primary"></i> Puput</h1>
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5"
                                style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">27 - 28
                                    April 2024 M </h4>
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">18 - 19
                                    Syawal 1445 H</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4"
                                style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Undangan
                                    Pernikahan</h4>
                            </div>
                            <h1 class="display-1 text-capitalize text-white mb-3">Anto <i
                                    class="fa fa-heart text-primary"></i> Puput</h1>
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5"
                                style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">27 - 28
                                    April 2024 M </h4>
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">18 - 19
                                    Syawal 1445 H</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4"
                                style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Undangan
                                    Pernikahan</h4>
                            </div>
                            <h1 class="display-1 text-capitalize text-white mb-3">Anto <i
                                    class="fa fa-heart text-primary"></i> Puput</h1>
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5"
                                style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">27 - 28
                                    April 2024 M </h4>
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">18 - 19
                                    Syawal 1445 H</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Hello! Start -->
    <div class="container-fluid position-relative py-5" id="weddingAbout">
        {{-- <div class="position-absolute" style="top: -35px; right: 0;">
            <img src="{{ asset('assets/img/tamp-bg-1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="position-absolute" style="top: -10px; left: 0; transform: rotate(150deg);">
            <img src="{{ asset('assets/img/tamp-bg-1.png') }}" class="img-fluid" alt="">
        </div> --}}
        <div class="container position-relative py-5">
            <div class="mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800;">
                <h1 class="text-primary display-1">Pasangan Mempelai</h1>
                <h4 class="text-dark mb-0">Assalamu'alaikum Wr. Wb. Dengan Memanjatkan Puji Dan Syukur Ke Hadirat Allah
                    SWT, Serta Dengan Memohon Ridho-Nya Kami
                    Bermaksud Mengadakan Acara Pernikahan Kami :</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex justify-content-end">
                                <div class="text-end my-auto">
                                    <h3 class="text-primary mb-3">Puput Sri Handayani</h3>
                                    <p class="text-dark mb-0" style="line-height: 30px;">Putri Pertama Dari:
                                    </p>
                                    <p class="text-dark mb-0" style="line-height: 30px;">Bapak Tarjono & Ibu Alfiyah
                                    </p>
                                </div>
                                {{-- <img src="{{ asset('assets/img/bride.jpg') }}" class="img-fluid img-border" alt="">
                                --}}
                            </div>
                        </div>
                        <div class="col-lg-2 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="fa fa-heart fa-5x text-primary"></i>
                            </div>
                        </div>
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="my-auto ps-4">
                                    <h3 class="text-primary mb-3">Tarwanto</h3>
                                    <p class="text-dark mb-0" style="line-height: 30px;">Putra Ke-8 Dari:
                                    </p>
                                    <p class="text-dark mb-0" style="line-height: 30px;">Bapak Warji & Ibu Sadiwen
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hello! End -->


    <!-- About Start -->
    <div class="container-fluid position-relative overflow-hidden bg-secondary py-5">
        <img src="{{ asset('assets/img/bg-flower.png') }}" class="img-fluid position-absolute top-0"
            style="right: -15px; transform: rotate(270deg); opacity: 0.5;" alt="">
        <img src="{{ asset('assets/img/bg-flower.png') }}" class="img-fluid position-absolute"
            style="bottom: 10px; left: -15px; transform: rotate(90deg); opacity: 0.5;" alt="">
        <div class="container py-5 position-relative">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeIn" data-wow-delay="0.1s">
                    {{-- <div class="border-white bg-primary" style="border-style: double;">
                        <img src="{{ asset('assets/img/about-1.jpg') }}" class="img-fluid w-100" alt="">
                    </div> --}}
                </div>
                <div class="col-xl-6">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <h5 class="text-uppercase text-primary fw-bold mb-4">Q.S Ar-Rum : 21</h5>
                        <p class="text-white fs-5 mb-4">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                            pasangan-pasangan untukmu dari jenismu sendiri, agar
                            kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
                            sayang. Sungguh, pada yang
                            demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--- Wedding Date -->
    <div class="container-fluid wedding-date-bg position-relative py-5">
        <div class="position-absolute" style="top: -100px; right: 0;">
            <img src="{{ asset('assets/img/tamp-bg-1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="position-absolute" style="top: -80px; left: 0; transform: rotate(150deg);">
            <img src="{{ asset('assets/img/tamp-bg-1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="container py-5 wow zoomIn" data-wow-delay="0.1s">
            <div class="wedding-date text-center bg-light p-5"
                style="border-style: double !important; border: 15px solid rgba(253, 93, 93, 0.5);">
                <div class="wedding-date-content">
                    <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4"
                        style="border-style: double;">
                        <h6 class="text-dark text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">27 - 28 April,
                            2024 M
                        </h6>
                        <h6 class="text-dark text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">18 - 19 Syawal,
                            1445 H
                        </h6>
                    </div>
                    <h1 class="display-4">Tempat Pernikahan</h1>
                    <p class="text-dark fs-5">Kediaman Mempelai Wanita</p>
                    <p class="text-dark fs-5">DS.Dukuhturi1
                        ketanggungan
                        Brebes</p>
                    <div class="d-flex align-items-center justify-content-center mb-5">
                        <div class="text-dark fs-2 me-4">
                            <div id="days">00</div>
                            <span>Hari</span>
                        </div>
                        <div class="text-dark fs-2 me-4">
                            <div id="hours">00</div>
                            <span>Jam</span>
                        </div>
                        <div class="text-dark fs-2 me-4">
                            <div id="minutes">00</div>
                            <span>Menit</span>
                        </div>
                        <div class="text-dark fs-2 me-0">
                            <div id="seconds">00</div>
                            <span>Detik</span>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-primary-outline-0 py-3 px-5"
                        href="https://www.google.com/maps?q=-6.9540571,108.8913489" target="_BLANK">Lihat di maps</a>
                </div>
                <div class="position-absolute"
                    style="top: 15%; right: -30px; transform: rotate(320deg); opacity: 0.5; z-index: 1;">
                    <img src="{{ asset('assets/img/attendance-bg.png') }}" class="img-fluid" alt="">
                </div>
                <div class="position-absolute"
                    style="top: 15%; left: -10px; transform: rotate(-320deg); opacity: 0.5; z-index: 1;">
                    <img src="{{ asset('assets/img/attendance-bg.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Wedding Date -->


    <!-- Wedding Timeline start -->
    <div class="container-fluid wedding-timeline bg-secondary position-relative overflow-hidden py-5"
        id="weddingTimeline">
        <div class="position-absolute" style="top: 50%; left: -100px; transform: translateY(-50%); opacity: 0.5;">
            <img src="{{ asset('assets/img/wedding-bg.png') }}" class="img-fluid" alt="">
        </div>
        <div class="position-absolute"
            style="top: 50%; right: -160px; transform: translateY(-50%); opacity: 0.5; rotate: 335deg;">
            <img src="{{ asset('assets/img/wedding-bg.png') }}" class="img-fluid" alt="">
        </div>
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="display-4 text-white">Wedding Gift</h1>
            </div>
            <div class="position-relative wedding-content">
                <div class="d-flex justify-content-center">
                    <div class="border border-bottom-0">
                        <div class="text-center p-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-4 p-3 d-inline-flex">
                                <i class="fas fa-menorah text-primary fa-3x"></i>
                            </div>
                            <p class="text-primary">BRI</p>
                            <h3 class="text-dark">3863 0103 1871 530</h3>
                            <p class="text-dark">A/N Sri Maryati</p>
                        </div>
                    </div>
                </div>
                <div class="position-absolute heart-circle " style="bottom: 0; left: -18px;">
                    <div class="border border-2 border-primary rounded-circle p-1 bg-secondary"></div>
                </div>
                <div class="position-absolute heart-circle" style="top: 18px; right: -17px;">
                    <div class="border border-2 border-primary rounded-circle p-1 bg-secondary"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wedding Timeline End -->



    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Anto<strong class="text-primary">&</strong>Puput</h4>
                        <p class="text-white">Ucapan terima kasih yang tulus dari kami apabila bapak/ibu/saudara/i
                            berkenan hadir dan memberi doa restu kepada kedua
                            mempelai
                        </p>
                        <p class="text-white">Jazaakumullah Khoiron Katsir
                            Wassalamu'alaikum warahmatullahi Wabarakatuh
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-light"><a href="https://kacangtoska.my.id" target="_BLANK"><i
                                class="fas fa-copyright text-light me-2"></i>Kacangtoska</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Set the date we're counting down to
    var countDownDate = new Date("Apr 27, 2024 08:00:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;
    //   + minutes + "m " + seconds + "s ";
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        // document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
</body>

</html>