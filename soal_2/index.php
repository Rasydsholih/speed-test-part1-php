<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="inputkerja"><b>Jumlah Jam kerja :</b> </label><br>
        <input type="number" name="inputkerja" placeholder="jam kerja" required><br><br>
        <input type="submit" value="hitung-kopensasi">

        <?php
        //membuat variabel
        $jamnormal = 8;
        $lemburPerjamKe1 = 50000;
        $lemburPerjamKe2 = 25000;

        //menghubungkan ke tag input jam kerja dari form
        $jamkerja = @$_POST['inputkerja'];


        if($jamkerja > $jamnormal) {
            //jika jam kerja lebih dari jam normal, akan menghitunghitung lembur dan kompensasi
            $lembur = $jamkerja - $jamnormal; 
            $hasillembur = $lemburPerjamKe1  + ($lemburPerjamKe2 * $lembur) - 25000;

            //menampilkan hasil
            echo "<br>";
            echo "Lama Kerja : " . $jamkerja . " jam";
            echo "<br>";
            echo "Jam lebih : " . $lembur . " jam";
            echo "<br>";
            //angka biasa menjadi desimal
            echo "Jumlah Kompensasi :" . "Rp. " . number_format($hasillembur, 0, ',', '.');
            echo "<br>";

        }else {
            echo "<br>";
            echo "tidak ada kompensasi";
        };
        
        
        
        ?>
    </form>
</body>
</html>



