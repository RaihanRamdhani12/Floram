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
  <link href="<?= base_url() ?>/css/addcart.css" rel="stylesheet" />

  <title>Floram</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- header section strats -->
  <header class="header_section header_inner">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <span>Floram</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>/cart"> <i class="fa fa-shopping-cart"></i>
                </i> Cart <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>/index">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- product section -->

  <section class="product_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Buah Yang Tersedia </h2>
      </div>
      <div class="row">
        <?php foreach ($semua_jenis_buah as $list => $list_semua_jenis_buah) { ?>
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <?php
              echo form_open('add');
              echo form_hidden('id', $list_semua_jenis_buah['id_jenis_buah']);
              echo form_hidden('price', $list_semua_jenis_buah['harga']);
              echo form_hidden('name', $list_semua_jenis_buah['nama_jenis_buah']);
              echo form_hidden('gambar', $list_semua_jenis_buah['gambar']);
              echo form_hidden('berat', $list_semua_jenis_buah['berat']);
              ?>
              <div class="img-box">
                <img src="images/<?= $list_semua_jenis_buah['gambar'] ?>" alt="">
              </div>
              <div class="detail-box">
                <span class="rating">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </span>

                <a><?= $list_semua_jenis_buah['nama_jenis_buah'] ?></a>
                <a>Rp <?= number_format($list_semua_jenis_buah['harga'], 0, ',', '.'); ?>/Kg</a>
                <br>
                <div class="center">
                  <div class="buttons d-flex flex-row">
                    <div class="cart">
                      <i class="fa fa-shopping-cart"></i>
                    </div>
                    <button type="submit" class="btn btn-success cart-button px-5">
                      <span class="dot">1</span>Add to cart
                    </button>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- end product section -->

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
                      Call +01 1234567890
                    </span>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                      demo@gmail.com
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
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="">
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      const cartButtons = document.querySelectorAll('.cart-button');
      cartButtons.forEach(button => {
        button.addEventListener('click', cartClick);
      });

      function cartClick() {
        let button = this;
        button.classList.add('clicked');
      }
    });
  </script>


  <script>
    $(function() {
      <?php if (session()->has("success")) { ?>
        Swal.fire({
          icon: 'success',
          title: 'Berhasil',
          text: '<?= session("success") ?>'
        })
      <?php } ?>
    });
  </script>


</body>

</html>