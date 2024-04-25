<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col">
            <div class="card mt-5">
                <h5 class="card-header">Cek Hasil</h5>
                <div class="card-body">
                    <strong class="card-text">Hasil Pengiriman</strong>
                    <?php echo $hasil->rajaongkir->origin_details->city_name ?>,
                    <?php echo $hasil->rajaongkir->origin_details->province ?>,<br>

                    <strong class="card-text">Tujuan Ke : </strong>
                    <?php echo $hasil->rajaongkir->destination_details->city_name ?>,
                    <?php echo $hasil->rajaongkir->destination_details->province ?>,<br>

                    <strong class="card-text">Menggunakan Jasa Kurir : </strong>
                    <?php echo $hasil->rajaongkir->results[0]->name ?>,<br>

                    <strong class="card-text">Berat Paket : </strong>
                    <?php echo $hasil->rajaongkir->query->weight / 1000 ?>Kg<br>

                    <div class="mb-3">
                        <strong class="card-text">Biaya Pengiriman : </strong><br>
                        <select class="form-select autosearch" aria-label="Default select example" type="text" class="form-control" id="tujuan" name="tujuan">
                            <option selected value="">Pilih Biaya Pengiriman</option>
                            <?php foreach ($hasil->rajaongkir->results[0]->costs as $biaya) : ?>
                                <option value=""><?php echo $biaya->description ?>: <?php echo $biaya->cost[0]->value ?> (<?php echo $biaya->cost[0]->etd ?> hari)<br></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>