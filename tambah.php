<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: 'Overpass', sans-serif;
        }

        * {
            box-sizing: border-box;

        }

        .flex-container-column {
            max-width: 500px;
            height: 495px;
            margin: 0 auto;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 65px;
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 3px solid #ccc;
            outline-color: #9575CD;
            margin-left: 15px;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            padding-top: 15px;
            color: #673AB7;
            font-weight: bold;
            margin-bottom: 20px;
        }

        form {
            width: 85%;
        }

        label {
            margin-left: 15px;
            margin-bottom: -10px;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>

<body>

    <div class="flex-container-column card">
        <h2>TAMBAH PRODUK</h2>
        <form method="POST" action="proses-tambah.php" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="produk">Produk</label>
                    <input type="text" name="produk" id="produk" autofocus="" required>
                </li>

                <li>
                    <label for="warna">Warna</label>
                    <input type="text" name="warna" id="warna" required>
                </li>

                <li>
                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" id="jumlah" required>
                </li>

                <li>
                    <label for="gambar">Gambar Produk</label>
                    <input type="file" name="gambar" id="gambar">
                </li>

                <li>
                    <button type="submit" name="submit" class="btn btn-lg btn-block" style="background-color: #9575CD;
                    color: white; height: 35px;margin-left: 15px;font-size:medium;line-height:15px;margin-top:10px">Tambah Data</button>
                    <a class="btn btn-lg btn-block" href="index.php" role="button" style="background-color: #9575CD; color: white; height: 35px; margin-left: 15px;font-size:medium;line-height:20px;">Kembali</a>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>