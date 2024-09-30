<?php

$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];


echo "<b>Bilangan yang ada di kedua variabel</b>";
echo "<br>";
//mencari data yang sama
$angkasama = array_intersect($bill1,$bill2);
//menggunakan implode untuk mencetak string titik
echo implode('.' , $angkasama);
echo "<br>";

echo "<b>Bilangan yang tidak ada di kedua variabel</b>";
echo "<br>";
//mencari data tidak sama
$angkaberbeda = array_diff($bill1, $bill2);
//menggunakan implode untuk mencetak string titik
echo implode('.' , $angkaberbeda);









?>