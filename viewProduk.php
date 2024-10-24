<?php require 'produk2.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Akhir Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-5">
    
    <h1 style="text-align: center;">Stok Akhir Produk</h1><br>
    
    <div class="mb-3 border border-black rounded">
    <form method="POST" action="" class="p-5">
        <label for="stok">Stok Awal:</label>
        <input class="form-control border-black" type="number" id="stok" name="stok" required><br>

        <label for="pembelian">Jumlah Pembelian:</label>
        <input class="form-control border-black" type="number" id="pembelian" name="pembelian" required><br><br>

        <input class="btn btn-dark" type="submit" value="Hitung Stok Akhir">
    </form>
    </div>

    <?php if ($Stokakhir !== null):?>
        <h2>Stok Akhir: <?php echo $Stokakhir; ?></h2>
    <?php endif;?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>