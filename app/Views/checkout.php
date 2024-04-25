<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Checkout</title>


    <!-- bootstrap core css -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <script src="https://kit.fontawesome.com/316d11f3ed.js" crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />


    <style>
        .container {
            max-width: 1000px;
            margin-bottom: 50px;
        }
    </style>

</head>



<body>

    <!-- header section strats -->
    <header class="header_section header_inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="<?= base_url(); ?>/index">
                    <span>Floram</span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/about"> Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/blog">Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <div class="container">
        <div class="card">
            <div class="card-header">

                <div class="card-body">
                    <h3 class="text-center">
                        Checkout <i class="fa-solid fa-truck-fast"></i>
                    </h3>
                    <div class="input-group mb-3">
                        <div class="container">
                            <form action="<?= base_url(); ?>/checkout_proses" method="post" enctype="multipart/form-data">
                                <label for="basic-url">Nama Lengkap</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama" aria-describedby="basic-addon3">
                                </div>

                                <label for="basic-url">Alamat</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="basic-addon3">
                                </div>

                                <label for="basic-url">No Telepon</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" aria-describedby="basic-addon3">
                                </div>

                                <button class="btn btn-primary"><span>Submit</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>
</body>

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
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
</section>




</html>