<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- font awesome style -->
        <script src="https://kit.fontawesome.com/316d11f3ed.js" crossorigin="anonymous"></script>


        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


        <title>CART</title>

        <style>
        .container {
            max-width: 1300px;
        }
        </style>
    </head>

    <body>

        <!-- header section strats -->
        <header class="header_section header_inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>Floram</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                </nav>
            </div>
        </header>
        <!-- end header section -->

        <!-- cart -->
        <div class="col-lg-15 mt-300 mb-150">
            <div class="container">
                <?php echo form_open('update'); ?>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="wrap">
                            <table class="table">
                                <thead class="table-head">
                                    <tr class="head-row">
                                        <th class="product-remove"></th>
                                        <th class="product-image">Gambar Buah</th>
                                        <th class="product-name">Nama Buah</th>
                                        <th class="product-name">Berat</th>
                                        <th class="product-price">Harga</th>
                                        <th class="product-quantity text-center">Quantity</th>
                                        <th class="product-berat text-center">Total Berat</th>
                                        <th class="product-total text-center">Total</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
								$total_berat = 0;
								$biaya = $cart->total();
								$i = 1;
								foreach ($cart->contents() as $key => $value) {
									$total_berat = $total_berat + ($value['qty'] * $value['options']['berat']);
								?>
                                    <tr class="body">
                                        <td class="product-remove">
                                            <a href="<?= base_url('delete/' . $value['rowid']) ?>"><i
                                                    class="far fa-window-close"></i></a>
                                        </td>
                                        <td class="product-image"><img
                                                src="<?= base_url('images/' . $value['options']['gambar']) ?>"
                                                class="cart-thumb" height="100" width="125" alt="image" /></td>
                                        <td class="product-name"><?= $value['name'] ?></td>
                                        <td class="berat"><?= $value['options']['berat'] ?>g</td>
                                        <td class="product-price"><?= number_format($value['price'], 0, ',', '.'); ?>
                                        </td>
                                        <td class="quantity-box">
                                            <button type="text">
                                                <input type="number" min="1" name="qty<?= $i++ ?>" class="form-control"
                                                    value="<?= $value['qty'] ?>">
                                            </button>
                                        </td>
                                        <td>
                                            <p> <?= $value['qty'] * $value['options']['berat'] ?>g</p>
                                        </td>
                                        <td class="product-total">Rp.
                                            <?= number_format($value['subtotal'], 0, ',', '.'); ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <tr class="data">
                    <td><strong>Subtotal: </strong></td>
                    <td>Rp. <?= number_format($cart->total(), 0, ',', '.'); ?></td>
                </tr>
            </div>
        </div>
        <hr>
        <div class="col-lg-15 mb-4">
            <div class="container">
                <div class="section">
                    <table class="table">
                        <thead class="table-head">
                            <tr class="table-row">
                            </tr>
                        </thead>
                        <tbody>
                            <h1>Cek Ongkir</h1>
                            <tr class="data">
                                <td class="form-label"><strong>Kota Asal : </strong></td>
                                <td>
                                    <span id="asal">
                                        <strong value="<?= $bekasi->city_id ?>">
                                            <?= $bekasi->city_name ?>
                                        </strong>
                                    </span>
                                </td>
                            </tr>
                            <tr class="data">
                                <td class="form-label"><strong>Pilih Provinsi : </strong></td>
                                <td>
                                    <select class="form-control autosearch" aria-label="Default select example"
                                        type="text" id="provinsi" name="provinsi">
                                        <option selected value=""> --> Pilih Provinsi <-- </option>
                                                <?php foreach ($provinsi as $p) : ?>
                                        <option value="<?= $p->province_id ?>"><?= $p->province ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </td>
                            </tr>

                            <tr class="data">
                                <td class="form-label"><strong>Pilih Tujuan : </strong></td>
                                <td>
                                    <select class="form-select " aria-label="Default select example" type="text"
                                        class="form-control" id="kabupaten" name="kabupaten">
                                        <option selected value=""> --> Pilih Kabuten <-- </option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="form-label"><strong>Alamat : </strong></td>
                                <td>
                                    <input type="text" name="alamat" class="form-control" id="alamat" readonly>
                                </td>
                            </tr>

                            <tr class="data">
                                <td class="form-label"><strong>Pilih Kurir: </strong></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" type="text"
                                        class="form-control" name="kurir" id="kurir">
                                    </select>
                                    <input class="form-control" aria-label="Default select example" type="text"
                                        class="form-control" name="data_tampungan_kurir" id="data_tampungan_kurir"
                                        hidden>
                                </td>
                            </tr>


                            <tr class="data">
                                <td class="form-label"><strong>Pilih Service : </strong></td>
                                <td>
                                    <select class="form-select x" aria-label="Default select example" type="text"
                                        class="form-control" id="service" name="service">
                                        <option selected value=""> --> Pilih Service <-- </option>
                                    </select>
                                </td>
                            </tr>


                            <tr>
                                <td class="form-label"><strong>Berat Total : </strong></td>
                                <td>
                                    <input type="number" name="berat" class="form-control" id="berat"
                                        value="<?= $total_berat ?>" readonly>
                                </td>
                            </tr>

                            <tr>
                                <td class="form-label"><strong>Estimasi : </span></strong></td>
                                <td><strong> <span id="estimasi"></strong></td>
                            </tr>

                            <tr>
                                <td class="form-label"><strong>Ongkir : </strong></td>
                                <td>
                                    <input type="number" name="ongkir" class="form-control" id="ongkir" value=""
                                        readonly>
                                </td>
                            </tr>

                            <tr>
                                <td class="form-label"><strong>Total : </strong></td>
                                <td>
                                    <input type="number" name="total_harga" class="form-control" id="total_harga"
                                        value="" readonly>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="buttons">
                        <button type="submit" class="btn btn-primary">Cek Ongkir</button>
                    </div>
                </div>
            </div>
        </div>


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


        <script>
        $(document).ready(function() {
            $('.autosearch').select2();
        });
        </script>

        <script>
        $('document').ready(function() {
            $("select[name=kurir]").on("change", function() {
                // var kurirz = $(this).data('kurirx');
                var kuriry = $("option:selected", this).attr("kurirx");
                // console.log(kuriry);
                $("input[name=data_tampungan_kurir]").val(kuriry);
            });
            $.ajax({
                type: 'GET',
                url: "<?= base_url() ?>/data_kurir",
                success: function(data_kurir) {
                    $("select[name=kurir]").html(data_kurir);
                }
            });
        });
        $("#provinsi").on('change', function() {
            $("#kabupaten").empty();
            var id_province = $(this).val();
            console.log
            $.ajax({
                url: "<?= base_url() ?>/getCity",
                type: 'GET',
                data: {
                    'id_province': id_province
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var results = data["rajaongkir"]["results"];
                    for (var i = 0; i < results.length; i++) {
                        $("#kabupaten").append($('<option>', {
                            value: results[i]["city_id"],
                            text: results[i]['city_name']
                        }));
                    }
                },
            });
        })
        $("#kabupaten").on('change', function() {
            $("#service").empty();
            var id_city = $(this).val();
            var berat = <?= $total_berat ?>;
            var courier = $("input[name=data_tampungan_kurir").val();
            $.ajax({
                url: "<?= base_url() ?>/getCost",
                type: 'GET',
                data: {
                    'origin': 54,
                    'destination': id_city,
                    'weight': 1000,
                    'courier': courier,
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var results = data["rajaongkir"]["results"]["0"]["costs"];
                    for (var i = 0; i < results.length; i++) {
                        var text = results[i]["description"] + "(" + results[i]["service"] + ")";
                        $("#service").append($('<option>', {
                            value: results[i]["cost"]["0"]["value"],
                            text: text,
                            etd: results[i]["cost"]["0"]["etd"],
                        }))
                    }
                },
            });
        })
        $("#service").on('change', function() {
            var total = <?= $biaya ?>;
            var estimasi = $('option:selected', this).attr('etd');
            ongkir = parseInt($(this).val());
            $("#ongkir").val(ongkir);
            $("#estimasi").html(estimasi + "Hari");
            var total_harga = (total + ongkir);
            $("#total_harga").val(total_harga);
        });
        </script>


        <script>

        </script>



        <script src="js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

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