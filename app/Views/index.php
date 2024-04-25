<!DOCTYPE html>
<html>

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Floram</title>


        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

        <!-- font awesome style -->
        <link href="css/font-awesome.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="<?= base_url() ?>/css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="<?= base_url() ?>/css/responsive.css" rel="stylesheet" />
        <link href="<?= base_url() ?>/css/scrollbar.css" rel="stylesheet" />
        <link href="<?= base_url() ?>/css/modal.css" rel="stylesheet" />


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </head>

    <body>

        <!-- header section strats -->
        <header class="header_section header_inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="<?= base_url(); ?>/index">
                        <span>Floram</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>/about"> Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo base_url(); ?>/fruit"></i> Belanja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>/blog">Blog</a>
                            </li>
                            <?php if ($status_login == TRUE) {
              echo
              "<div class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
                $username
              </a>
              <ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                <li><a class='dropdown-item' href='editprofil'>Dashboard</a></li>
                <li><a class='dropdown-item' href='logout'><i class='fa-solid fa-right-from-bracket'></i>  Logout</a></li>
              </ul>
            </div>";
            } else {
              echo "<a class='btn btn-warning' href='login'> MASUK | DAFTAR </a>";
            }
            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="detail-box">
                                        <h1>
                                            Kami Menjual <br>
                                            Buah Terbaik </h1>
                                        <p>
                                            Kami selalu menghadirkan prinsip pelayan yang terbaik kepada pelanggan baru,
                                            Dan kami berterimakasih kepada pelanggan setia..
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                LEBIH LANJUT
                                            </a>
                                            <a href="<?php echo base_url(); ?>/fruit" class="btn-2">
                                                BELANJA
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <div class="img-box">
                                        <img src="images/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="detail-box">
                                        <h1>
                                            Kami Menjual <br>
                                            Buah Terbaik </h1>
                                        <p>
                                            Kami selalu menghadirkan prinsip pelayan yang terbaik kepada pelanggan baru,
                                            Dan kami berterimakasih kepada pelanggan setia..
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                LEBIH LANJUT
                                            </a>
                                            <a href="" class="btn-2">
                                                TENTANG
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <div class="img-box">
                                        <img src="images/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="detail-box">
                                        <h1>
                                            Kami Menjual <br>
                                            Buah Terbaik </h1>
                                        <p>
                                            Kami selalu menghadirkan prinsip pelayan yang terbaik kepada pelanggan baru,
                                            Dan kami berterimakasih kepada pelanggan setia..
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                LEBIH LANJUT
                                            </a>
                                            <a href="" class="btn-2">
                                                TENTANG
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <div class="img-box">
                                        <img src="images/yelan2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
        </section>
        <!-- end slider section -->

        <!-- offer section -->

        <section class="offer_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 px-0">
                        <div class="box offer-box1">
                            <img src="images/o1.jpg" alt="">
                            <div class="detail-box">
                                <h2>
                                    Upto 20% Off
                                </h2>
                                <a
                                    href="https://www.lazada.co.id/?exlaz=d_1:mm_150050845_51350203_2010350203::11:12493663656!118894776677!lazada!e!kwd-19342147066!c!!!!503957112711!&gclid=Cj0KCQjwnP-ZBhDiARIsAH3FSRf5UNtdOut8U_ryQxo_Q2LPIVg7XcterI8TonGcz-XBHrToyQEvyNIaAo1rEALw_wcB">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 px-0">
                        <div class="box offer-box2">
                            <img src="images/o2.jpg" alt="">
                            <div class="detail-box">
                                <h2>
                                    Upto 10% Off
                                </h2>
                                <a
                                    href="https://www.tokopedia.com/discovery/kebut-tokopedia-gopay?gclid=Cj0KCQjwnP-ZBhDiARIsAH3FSReyeWfO1i8vNLNARYAae5gT5zSmb5r7SXvABA80AkZ3decI173VWasaAgpgEALw_wcB">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                        <div class="box offer-box3">
                            <img src="images/o3.jpg" alt="">
                            <div class="detail-box">
                                <h2>
                                    Upto 15% Off
                                </h2>
                                <a
                                    href="https://shopee.co.id/?gclid=Cj0KCQjwnP-ZBhDiARIsAH3FSRfnUPE_C41QNmRgctAGUao8kHqPxaIc9uJLIro4i5XGmfBQnexMXsAaAhcAEALw_wcB">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end offer section -->

        <!-- product section -->

        <section class="product_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Jenis Jenis Buah </h2>
                    <p>

                    </p>
                </div>
                <div class="row">
                    <?php foreach ($semua_jenis_buah as $list => $list_semua_jenis_buah) { ?>
                    <div class="col-sm-4 col-lg-4">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/<?= $list_semua_jenis_buah['gambar'] ?>" alt="images">
                            </div>
                            <div class="detail-box">
                                <a data-toggle="modal" data-target="#myModal"
                                    data-nama_jenis_buah="<?= $list_semua_jenis_buah['nama_jenis_buah'] ?>"
                                    data-keterangan_jenis_buah="<?= $list_semua_jenis_buah['keterangan_jenis_buah'] ?>"
                                    data-gambar="<?= $list_semua_jenis_buah['gambar'] ?>">
                                </a>
                                <div class="price_box">
                                    <div>
                                        <h3><?= $list_semua_jenis_buah['nama_jenis_buah'] ?></h3>
                                    </div>
                                    <div class="btn-box">
                                        <!-- <button id="myBtn" data-toggle="modal" data-target="#myModal" class="myBtn" data-nama="REHAN">Lihat</button> -->
                                        <a id="myBtn" data-toggle="modal" data-target="#myModal" class="myBtn"
                                            data-nama_jenis_buah="<?= $list_semua_jenis_buah['nama_jenis_buah'] ?>"
                                            data-keterangan_jenis_buah="<?= $list_semua_jenis_buah['keterangan_jenis_buah'] ?>"
                                            data-gambar="images/<?= $list_semua_jenis_buah['gambar'] ?>">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section>
            <div id="myModal" class="modal" data-backdrop="false" tabindex="1" data-toggle="modal"
                data-target="#myModal">
                <div class="modal-content" role="document">
                    <div class='modal-header'>
                        <!-- <span class="close">&times;</span> -->
                        <span class="close">X</span>
                    </div>
                    <div class='modal-body' id='xxx'>
                    </div>
                </div>
            </div>
        </section>

        <!-- end product section -->

        <!-- about section -->

        <section class="about_section layout_padding">
            <div class="container  ">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <img src="images/about-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Tentang
                                </h2>
                            </div>
                            <p class="text">
                                Kami Floram telah berdiri sejak tahun 2022, Kami pasti akan selalu konsisten
                                menghadirkan produk yang baik dan berkualitas.
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end about section -->

        <!-- blog section -->

        <section class="blog_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Terbaru Dari Blog
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/b1.jpg" alt="">
                                <h4 class="blog_date">
                                    29 <br>Yelan
                                    June
                                </h4>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Terlihat bahkan sedikit bisa dipercaya. Jika Anda </h5>
                                <p>
                                    perubahan dalam beberapa bentuk, dengan humor yang disuntikkan, atau kata-kata acak
                                    yang tidak terlihat sedikit pun dapat dipercaya </p>
                                <a href="<?= base_url(); ?>/about">
                                    Baca Lebih Lanjut
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/b2.jpg" alt="">
                                <h4 class="blog_date">
                                    28 <br>
                                    June
                                </h4>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Sesuatu yang menakjubkan tersembunyi di tengah </h5>
                                <p>
                                    perubahan dalam beberapa bentuk, dengan humor yang disuntikkan, atau kata-kata acak
                                    yang tidak terlihat sedikit pun dapat dipercaya </p>
                                <a href="<?= base_url(); ?>/about">
                                    Baca Lebih Lanjut
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end blog section -->

        <!-- client section -->
        <section class="client_section ">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Testimonial
                    </h2>
                </div>
            </div>
            <div class="container px-0">
                <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 mx-auto">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="images/yelan2.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <div class="client_info">
                                                    <div class="client_name">
                                                        <h5>
                                                            Yelan
                                                        </h5>
                                                        <h6>
                                                            Pelanggan
                                                        </h6>
                                                    </div>
                                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                </div>
                                                <p>
                                                    " Saya dapat memastikan Floram adalah toko buah terbaik saat saya
                                                    sedang inspeksi, Kesegaran dan kehigienisannya selalu terjaga,
                                                    Jangan ragukan komentar saya karena saya seorang Inspektur
                                                    Kesehastan Pangan "
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="images/shenhei1.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <div class="client_info">
                                                    <div class="client_name">
                                                        <h5>
                                                            Shenhei
                                                        </h5>
                                                        <h6>
                                                            Pelanggan
                                                        </h6>
                                                    </div>
                                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                </div>
                                                <p>
                                                    " Saya dapat memastikan Floram adalah toko buah terbaik saat saya
                                                    sedang inspeksi, Kesegaran dan kehigienisannya selalu terjaga,
                                                    Jangan ragukan komentar saya karena saya seorang Inspektur
                                                    Kesehastan Pangan "

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="images/beidou3.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <div class="client_info">
                                                    <div class="client_name">
                                                        <h5>
                                                            Beidou
                                                        </h5>
                                                        <h6>
                                                            Pelanggan
                                                        </h6>
                                                    </div>
                                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                </div>
                                                <p>
                                                    " Saya dapat memastikan Floram adalah toko buah terbaik saat saya
                                                    sedang inspeksi, Kesegaran dan kehigienisannya selalu terjaga,
                                                    Jangan ragukan komentar saya karena saya seorang Inspektur
                                                    Kesehastan Pangan "

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_btn-box">
                        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end client section -->

        <!-- contact section -->
        <section class="contact_section layout_padding">

        </section>
        <!-- end contact section -->

        <!-- info section -->

        <section class="info_section ">
            <div class="info_container ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="info_contact ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="link-box">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                Location
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#" class="link-box">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>
                                                Call +62 82125604700
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="link-box">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>
                                                rhnrmdhn229@gmail.com
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5  col-lg-3 mx-auto">
                            <div class="info_form ">
                                <form action="#">
                                    <input type="email" placeholder="Enter Your Email" />
                                    <button>
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="info_logo">
                        <a class="navbar-brand" href="index.html">
                            <span>
                                Floram
                            </span>
                        </a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.facebook.com/raihanramdhani.raihanramdhani.127/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/rhnrmdhn72/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCbvyj55OPSxEHqQNnPcnI2g/featured">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info section -->

        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </footer>
        <!-- footer section -->

        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <!-- Google Map -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
        </script>
        <!-- End Google Map -->

        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

        <script>
        $(document).ready(function() {
            $('.myBtn').on('click', function() {
                const nama_jenis_buah = $(this).data('nama_jenis_buah');
                const keterangan_jenis_buah = $(this).data('keterangan_jenis_buah');
                const gambar = $(this).data('gambar');
                document.getElementById('xxx').innerHTML = '<p>' + (nama_jenis_buah) + '</p>' + '<p>' +
                    (keterangan_jenis_buah) + '</p>' + "<img src='" + (gambar) + " '>";
                // alert('OK');
            });
        });
        </script>

        <script>
        // ketika pengunjung scroll kebawah 20px dari atas dokumen, maka tampilkan tombol scroll-btn
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scroll-btn").style.display = "block";
            } else {
                document.getElementById("scroll-btn").style.display = "none";
            }
        }

        // ketika tombol tersebut di klik, maka lakukan scroll keatas laman
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>

        <button onclick="topFunction()" id="scroll-btn" title="Top"><i
                class="fa-sharp fa-solid fa-arrow-up"></i></button>

    </body>

</html>