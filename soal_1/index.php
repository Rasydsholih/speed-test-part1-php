<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="inputTeks" placeholder="masukan teks" />
        <input type="submit">
    </form>
    <p>
        <b>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $teks = $_POST['inputTeks'];     
            preg_match_all('/\d/', $teks, $matches);

            if (!empty($matches[0])) {
                $angkaTerdapat = implode(", ", $matches[0]);
                echo "teks mengandung angka : " . $angkaTerdapat;
            } else {
                echo "teks tidak mengandung angka.";
            }
        }
        ?>
        
        </b>
    </p>
</html>