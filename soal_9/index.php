<?php

function menghitungPecahan($jmlhuang) {
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    $hasil = [];


    foreach($pecahan as $nilai) {
        $jmlhlmbr =intdiv($jmlhuang, $nilai);

        if($jmlhlmbr > 0) {
            $hasil[$nilai] = $jmlhlmbr;
            $jmlhuang -= $jmlhlmbr*$nilai;
        }
    }


    return $hasil;
}


$jmlhuang = 140500;
$pecahaUang = menghitungPecahan($jmlhuang);



echo "Jumlah uang: Rp " . number_format($jmlhuang, 0, ',', '.');
echo "<br>";
echo "Pecahan uang dan jumlah lembar";
echo "<br>";
foreach ($pecahaUang as $pecahan => $jmlhlmbr) {
    echo "Rp" . number_format($pecahan, 0,',', '.') . ":  " . $jmlhlmbr . "<br>"; 
}


?>