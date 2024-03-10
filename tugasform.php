<?php
    $name_costumer = isset($_POST["name_costumer"]) ? $_POST['name_costumer']: null;
    $produk = isset($_POST["produk"]) ? $_POST['produk']: null;
    $jumlah = isset($_POST["jumlah"]) ? $_POST['jumlah']: null;
    
    $harga_TV = 4200000;
    $harga_kulkas = 3100000;
    $harga_mesincuci = 3800000;

    $total_harga = 0;
    if ($produk == "tv") {
        $total_harga = $harga_TV * $jumlah;
    } elseif ($produk == "kulkas"){
        $total_harga = $harga_kulkas * $jumlah;
    } elseif ($produk == "mesin cuci"){
        $total_harga = $harga_mesincuci * $jumlah;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form{
            max-width: 50rem;
        }
        
    </style>
</head>
<body>
<fieldset class="mx-5 mt-5 card p-4 border-primary ">
    <h2>Belanja Online</h2><hr>
    <form action="tugasform.php" method="POST" class="form_belanja">
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Customer</label> 
            <div class="col-3">
                <input id="text" name="name_costumer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
        </div><hr>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
                    <label for="radio_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
                    <label for="radio_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
                    <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                </div>
            </div>
        </div><hr>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-1">
                <input id="jumlah" name="jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card border-primary">
                <div class="card-header bg-primary">
                    Daftar Harga
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV: Rp <?= number_format($harga_TV, 0, ',', '.'); ?></li>
                    <li class="list-group-item">KULKAS: Rp <?= number_format($harga_kulkas, 0, ',', '.'); ?></li>
                    <li class="list-group-item">MESIN CUCI: Rp <?= number_format($harga_mesincuci, 0, ',', '.'); ?></li>
                </ul>
            </div>
        </div>
    </form>
</fieldset>
<div class="card p-4 mx-5 mt-5 border-primary">
    <h6>Nama Customer: <?= $name_costumer; ?></h6>
    <h6>Produk Pilihan: <?= $produk; ?></h6>
    <h6>Jumlah Beli: <?= $jumlah; ?></h6>
    <h6>Total Belanja: Rp <?= number_format($total_harga, 0, ',', '.',); ?></h6>
</div>
</body>
</html>