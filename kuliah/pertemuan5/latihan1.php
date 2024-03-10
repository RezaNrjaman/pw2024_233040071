<?php
// 1. membuat array

$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$mhs = ['Reza', '3,2', 'false'];

// 2. mencetak array (1)

echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<br>";

// 3. manipulasi array

// menambah isi array
// di akhir: [] atau arrat_push()

$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";
// di awal array: array_unshift
array_unshift($mhs, "233040071");
print_r($mhs);
echo "<br>";
// menghapus isi array;
// didepan: array_popt
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);

// dibelakang: array_shift


// 4. mencetak array (2)

var_dump($hari);
echo "<br>";
print_r($mhs);
echo "<br>";
var_dump($mhs);
