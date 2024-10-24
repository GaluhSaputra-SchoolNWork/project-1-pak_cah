<?php require 'barang.php'?>
<?php require 'customer.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-5">

    <h1 style="text-align: center;">Customer Profile</h1><br>
    
    <div class="mb-3 border border-black rounded">
        <form method="POST" action="" class="p-5">
            <label for="stok">Nama:</label>
            <input class="form-control border-black" type="text" id="namaCust" name="namaCust" required><br>

            <label for="stok">Alamat:</label>
            <input class="form-control border-black" type="text" id="alamat" name="alamat" required><br>

            <label for="stok">No HP:</label>
            <input class="form-control border-black" type="tel" id="noHP" name="noHP" required><br>

            <label for="pembelian">ID:</label>
            <input class="form-control border-black" type="number" id="idCust" name="idCust" required><br>

            <label for="pembelian">Nama barang:</label>
            <input class="form-control border-black" type="text" id="namaBrng" name="namaBrng" required><br>

            <label for="pembelian">Jenis Barang:</label>
            <input class="form-control border-black" type="text" id="jenisBrng" name="jenisBrng" required><br>

            <label for="stok">Stok Awal:</label>
            <input class="form-control border-black" type="number" id="stok" name="stok" required><br>

            <label for="pembelian">Jumlah Pembelian:</label>
            <input class="form-control border-black" type="number" id="pembelian" name="pembelian" required><br><br>

            <input class="btn btn-dark" type="submit" value="Lihat Nota">
        </form>
    </div>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="card">
            <div class="card-header">
                Pembelian Berhasil!
            </div>
            <div class="card-body">
                <h5 class="card-title">Nota Pembelian</h5>
                <pre>
                    <p class="card-text">Nama      : <?php echo $panggilCustomer->namaCustomer; ?></p>
                    <p class="card-text">Alamat    : <?php echo $panggilCustomer->alamatCustomer; ?></p>
                    <p class="card-text">No. HP    : <?php echo $panggilCustomer->nomorHPCustomer; ?></p>
                    <p class="card-text">Barang    : <?php echo $panggilBarang->namaBarang; ?></p>
                    <p class="card-text">Jenis     : <?php echo $panggilBarang->jenisBarang; ?></p>
                    <p class="card-text">
                        <small class="text-body-secondary">
                            Sisa stok : <?php echo $Stokakhir ; ?>
                        </small>
                    </p>
                </pre>
            </div>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>