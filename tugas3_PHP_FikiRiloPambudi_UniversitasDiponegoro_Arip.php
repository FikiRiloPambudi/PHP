<?php
//Array Scalar
$m1 = ['nim'=>'21120119120001','nama'=>'Fiki Rilo Pambudi','nilai'=>99];
$m2 = ['nim'=>'21120119120002','nama'=>'Nisrina Ayu','nilai'=>55];
$m3 = ['nim'=>'21120119120003','nama'=>'Anhar','nilai'=>75];
$m4 = ['nim'=>'21120119120004','nama'=>'Syahrul Ramadhan','nilai'=>89];
$m5 = ['nim'=>'21120119120005','nama'=>'Aldino Apriansyah','nilai'=>40];
$m6 = ['nim'=>'21120119120006','nama'=>'Fauzan Zaman','nilai'=>35];
$m7 = ['nim'=>'21120119120007','nama'=>'Fikri','nilai'=>70];
$m8 = ['nim'=>'21120119120008','nama'=>'M. Gusti Maulana','nilai'=>80];
$m9 = ['nim'=>'21120119120009','nama'=>'Erlin Ristia','nilai'=>90];
$m10 = ['nim'=>'21120119120010','nama'=>'Nurhaidah','nilai'=>25];
$m11 = ['nim'=>'21120119120011','nama'=>'Nadia','nilai'=>86];
$m12 = ['nim'=>'21120119120012','nama'=>'Naufal reyhan','nilai'=>45];
$m13 = ['nim'=>'21120119120013','nama'=>'Brigita Lucretia','nilai'=>92];
$m14 = ['nim'=>'21120119120014','nama'=>'Septria Aulia Sabila','nilai'=>15];
$m15 = ['nim'=>'21120119120015','nama'=>'Arya Bangkit Prakasa','nilai'=>50];
$m16 = ['nim'=>'21120119120016','nama'=>'Afrinda Kurnianti','nilai'=>67];
$m17 = ['nim'=>'21120119120017','nama'=>'Annis Amanulloh','nilai'=>74];
$m18 = ['nim'=>'21120119120018','nama'=>'Rizka Rusdiantari','nilai'=>88];
$m19 = ['nim'=>'21120119120019','nama'=>'Agustin Nur fadilah','nilai'=>80];
$m20 = ['nim'=>'21120119120020','nama'=>'Indah Mawarni','nilai'=>95];

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

//Array Assosiative 
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12, $m13, $m14, $m15, $m16, $m17, $m18, $m19, $m20];

//Aggregate Function
$nilai_m = array_column($mahasiswa,'nilai');

$total_nilai = array_sum($nilai_m);
$jumlah_nilai = count($nilai_m);
$max_nilai = max($nilai_m);
$min_nilai = min($nilai_m);
$rata2 = $total_nilai / $jumlah_nilai;

//keterangan
$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_nilai,
    'Total Nilai Keseluruhan'=>$total_nilai,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Rata-rata Nilai'=>$rata2
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container px-5 my-5">
        <h2 class="text-center">Tugas 3 PHP</h2><br>
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3><br>
        <h5 class="text-center">Fiki Rilo Pambudi-Kelompok 3</h5><br>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <?php 
                    foreach($ar_judul as $jdl){ 
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                    $nilaim = $mhs['nilai'];
                    
                    $ket_lulus = ($nilaim >= 60) ? 'Lulus' : 'Tidak Lulus';

                    if($nilaim >= 85 && $nilaim <= 100) $grade = 'A';
                        else if($nilaim >= 75 && $nilaim < 85) $grade = 'B';
                        else if($nilaim >= 60 && $nilaim < 75) $grade = 'C';
                        else if($nilaim >= 30 && $nilaim < 60) $grade = 'D';
                        else if($nilaim >= 0 && $nilaim < 30) $grade = 'E';
                        else $grade = '';

                    switch ($grade) {
                        case 'A': $predikat = 'Memuaskan'; break;
                        case 'B': $predikat = 'Bagus'; break;
                        case 'C': $predikat = 'Cukup'; break;
                        case 'D': $predikat = 'Kurang'; break;
                        case 'E': $predikat = 'Buruk'; break;
                        default: $predikat = '';
                    }
                    ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $ket_lulus ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                    ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div>
</body>    
</html>
    