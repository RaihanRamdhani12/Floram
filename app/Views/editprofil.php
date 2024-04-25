<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <title>Edit Profile</title>

    <style>
        .container {
            max-width: 1200px;
            margin-bottom: 50px;
        }
    </style>

</head>
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
                        <a class="nav-link" href="<?php echo base_url(); ?>/index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/about"> Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/blog">Blog</a>
                    </li>

</header>

<br>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary  text-white">
                Dashboard Profile (<?= $username ?>)</div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="container">
                        <table class="table table-bordered border-dark table-striped">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" value="<?= $username ?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" value="<?= $password ?>" readonly="">
                            </div>
                            <br>
                            <tbody>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Edit Username
                                </button>

                                <!-- Modal -->
                                <form action="<?= base_url(); ?>/ubah_username_proses" method="post" enctype="multipart/form-data">
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Username</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url(); ?>/ubah_username_proses" method="post">
                                                        <div>Username Lama</div>
                                                        <input class="input-group mb-3" placeholder="Username Lama" value="<?= $username ?>">
                                                        <div>Masukan Username Baru</div>
                                                        <input class="input-group mb-3" placeholder="Username Baru">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
</section>

</html>