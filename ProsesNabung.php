<?php
$Saldoawal = $_POST['SaldoAwal'];
$Bunga = $_POST['Bunga'];
$Bulan = $_POST['Bulan'];
$Saldoakhir=$Saldoawal+($Saldoawal*$Bunga)*$Bulan;
echo "Tabungan awal seseorang adalah $Saldoawal";
echo "<br>Jumlah Saldo Tabungan akhir seseorang setelah $Bulan bulan adalah $Saldoakhir";