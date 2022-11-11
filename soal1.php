<?php
$saldoawal = 1000000;
$bunga = 3/100;
$bulan = 9;
$saldoakhir=$saldoawal+($saldoawal*$bunga)*$bulan;
echo "Tabungan awal seseorang adalah $saldoawal";
echo "<br>Jumlah Saldo Tabungan akhir seseorang setelah $bulan bulan adalah $saldoakhir";
