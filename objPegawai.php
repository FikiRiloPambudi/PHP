<?php 
require 'Pegawai.php';

$fiki = new Pegawai('20010215 202108 1 001','Fiki Rilo Pambudi', 'Manager', 'Islam', 'Belum Menikah');
$rizka = new Pegawai('19990411 202004 2 002', 'Rizka Rusdiantari', 'Asisten Manager', 'Kristen', 'Sudah Menikah');
$syahrul = new Pegawai('19980118 202107 1 003', 'Syahrul Ramadhan', 'Kabag', 'Kristen', 'Sudah Menikah');
$afrinda = new Pegawai('20040808 202206 2 003', 'Afrinda Kurnianti', 'Staff', 'Islam', 'Sudah Menikah');
$gusti = new Pegawai('19970501 2019409 1 004', 'M.Gusti Maulana', 'Staff', 'Hindu', 'Belum Menikah');

echo '<h2 style="background-color:#5CF92A"; align="center">'.Pegawai::JUDUL.'</h2>';
echo '<h4>'.Pegawai::TUGAS.'</h4>';
echo '<h5>'.Pegawai::KELOMPOK.'</h5>';
echo '<hr/>';
$fiki->mencetak();
$rizka->mencetak();
$syahrul->mencetak();
$afrinda->mencetak();
$gusti->mencetak();
?>