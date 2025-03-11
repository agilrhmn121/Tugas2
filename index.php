<?php
include "Mahasiswa.php";
$mahasiswa1 = new Mahasiswa();
$mahasiswa2 = new Mahasiswa();
$mahasiswa1->setData('A11.2023.15406', 'Agil Rahman', 'Teknik Informatika');
$mahasiswa2->setData('A11.2023.15444', 'Furina', 'Teknik Informatika');
echo "Data Mahasiswa : <br>";
$mahasiswa1->TampilData();
echo "<br>";
$mahasiswa2->TampilData();
?>  
