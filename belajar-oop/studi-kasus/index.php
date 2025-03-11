<?php
include_once 'Pegawai.php';
include_once 'PegawaiKontrak.php';
include_once 'Departemen.php';

$departemen_1 = new Departemen();
$departemen_2 = new Departemen();

$departemen_1->setData('D01', 'Teknik Informatika');
$departemen_2->setData('D02', 'Keuangan');

$daftar_proyek = [
    [
        "nama_proyek" => "Sistem Absensi",
        "durasi" => 4
    ],
    [
        "nama_proyek" => "Website E-Commerce",
        "durasi" => 6
    ],
    [
        "nama_proyek" => "Aplikasi Mobile",
        "durasi" => 3
    ]
];

$pegawai_1 = new PegawaiKontrak($daftar_proyek);
$pegawai_1->setData('A11202314900', 'Khafidha Sukma', "2004-04-06", [$departemen_1->getData(), $departemen_2->getData()]);

echo "<pre>";
print_r($pegawai_1->getData());
echo "</pre>";