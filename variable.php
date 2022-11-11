<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Variabel</title>
</head>
<body>
    <?php
    $teks = "Sapa Anda";
    $sebuah_bilangan = 4;
    $bilanganyanglain = 8.567;
    $teks2 = $teks;
    echo $teks;
    echo "<br/>".$sebuah_bilangan;
    echo "<br>Isi dari sebuah Variabel\$bilanganyanglain" .$bilanganyanglain;
    echo "<br>Isi dari Variabel\$teks2 adalah: ".$teks2; 
    ?> 
</body>
</html>