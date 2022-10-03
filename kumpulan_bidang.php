<?php

require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

// jari2
$obj1 = new Lingkaran(7);
// panjang, lebar
$obj2 = new Persegi(12, 18);
// alas, tinggi, sisiMiring
$obj3 = new Segitiga(15, 20);

$object_data = [$obj1, $obj2, $obj3];
$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h3 class="text-center mt-4">Tugas membuat class dan turunan bidang</h3>
        <h5 class="text-center mt-1">Fiki Rilo Pambudi-Universitas Diponegoro</h5>
        <h6 class="text-center mt-1">Kelompok 03</h6>

        <table class="table table-dark table-hover mt-4">
            <thead>
                <tr>
                    <?php foreach ($judul as $j) : ?>
                        <th> <?= $j ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($object_data as $data) : ?>
                    <tr>
                        <th><?= $no++ ?>.</th>
                        <?= $data->cetak() ?>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>