<?php
include 'Mahasiswa.php';
include 'MataKuliah.php';

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();
$makul_2 = new MataKuliah();

$makul_1->setData('A11.12345', 'Pemrograman Berbasis Web');
$makul_2->setData('A11.12346', 'Pemrograman Web Lanjut');

$mahasiswa_1->setData('A11.2023.14900', 'Khafidha Sukma Dewi', [$makul_1, $makul_2]);

echo "<pre>";
print_r($mahasiswa_1);
echo "</pre>";