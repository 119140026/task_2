<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>119140026</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <div class="card-container">
            <div class="form">
                <div class="form-container">
                    
                    <h2>Detail Produk</h2>
                        Nama Produk : <?php echo $_GET["nama"]; ?><br>
                        Jenis Produk : <?php echo $_GET["jenis"]; ?><br>
                        Brand : <?php echo $_GET["brand"]; ?><br>
                        Harga : Rp.<?php echo $_GET["harga"]; ?><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>