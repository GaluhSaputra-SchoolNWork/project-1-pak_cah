<?php require 'customer.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
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
                <input class="form-control border-black" type="number" id="idCust" name="idCust" required><br><br>

                <input class="btn btn-dark" type="submit" value="Lihat Profile">
            </form>
        </div>

    <?php if ($Profile !== null):?>
        <div class="card border border-black" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($panggilCustomer->namaCustomer); ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo ($panggilCustomer->idCustomer); ?></h6>
                <p class="card-text"><?php echo ($panggilCustomer->nomorHPCustomer) . '<br>' . ($panggilCustomer->alamatCustomer); ?></p>
            </div>
        </div>
    <?php endif;?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>