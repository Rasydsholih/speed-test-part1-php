<?php
//variabel nama
$nama1 = "orang biasa";
$nama2 = "super hero";

//mengunakan strlen untuk menghitung 
$jumlahnama1 = strlen($nama1);
$jumlahnama2 = strlen($nama2);

$hasilnama1 = $jumlahnama1 - $jumlahnama2;
$hasilnama2 = $jumlahnama2 - $jumlahnama1;

//menampilkan hasil panjang nama
if($jumlahnama1 > $jumlahnama2) {
    echo $nama1 . " lebih panjang dari " . $nama2 . " dengan selisih " . $hasilnama1;
} else if($jumlahnama1 < $jumlahnama2) {
    echo $nama2 . " lebih panjang dari " . $nama1 . " dengan selisih " . $hasilnama2;
}else{
    echo "namanya sama panjang";
}









?>