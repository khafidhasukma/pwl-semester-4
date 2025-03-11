<?php
include 'Mahasiswa.php';
include 'MataKuliah.php';

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();
$makul_2 = new MataKuliah();

$makul_1->setData('A11.12345', 'Pemrograman Berbasis Web');
$makul_2->setData('A11.12346', 'Pemrograman Web Lanjut');

$mahasiswa_1->setData('A11.2023.14900', 'Khafidha Sukma Dewi', [$makul_1, $makul_2], "2004-04-06");

echo "<pre>";
echo "Umur dihitung dengan method/function: <br>";
print_r($mahasiswa_1->getData()[4]);
echo "<br><br>";
echo "Nilai Umur diberi secara langsung: <br>";
$mahasiswa_1->umur = 17;
print_r($mahasiswa_1->umur);
echo "</pre>";