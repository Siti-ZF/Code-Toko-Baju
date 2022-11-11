<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Post</title>
</head>
<body>
    <form action="ProsesNabung.php" method="post">
        Masukkan Saldo Awal <input type="text" name="SaldoAwal" id=""><br>
        Bunga <select name="Bunga">
            <option value="0.10">10%</option>
            <option value="0.05">5%</option>
            <option value="0.03">3%</option>
        </select><br>
        Bulan <input type="text" name="Bulan" id=""><br>
        <input type="submit" value="Proses"> <input type="reset" value="Reset">
    </form>
</body>
</html>