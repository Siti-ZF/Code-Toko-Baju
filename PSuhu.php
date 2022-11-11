<?php
$celsius = $_POST['Cel'];
//$suhu = $_POST['Suhu'];
$r = (4/5)*$celsius;
$f = $celsius+273;
$k = (9/5)*$celsius+32;
echo "Konversi Celcius ke Reamur Suhu nya $r";
echo "<br>Konversi Celcius ke Fahrenheit Suhu nya $f";
echo "<br>Konversi Celcius ke Kelvin Suhu nya $k";