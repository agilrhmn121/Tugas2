<?php
include "Mahasiswa.php";

// Objek pertama dengan data mahasiswa Anda
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2023.15406', 'Agil Rahman', 'Teknik Informatika');
print_r($mahasiswaTI->getData());

// Objek kedua (baru)
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A11.2000.00001', 'Fulan', 'Teknik Informasi');
print_r($mahasiswaSI->getData());

// Objek ketiga (baru)
$mahasiswaDKV = new Mahasiswa();
$mahasiswaDKV->setData('A12.2000.00001', 'Junior', 'Desain Komunikasi Visual');
print_r($mahasiswaDKV->getData());

// Menampilkan data mahasiswa dengan method tampilData()
echo "<br>Data Mahasiswa dengan method tampilData():<br>";
$mahasiswaTI->tampilData();
echo "<br>";
$mahasiswaSI->tampilData();
echo "<br>";
$mahasiswaDKV->tampilData();
?>
