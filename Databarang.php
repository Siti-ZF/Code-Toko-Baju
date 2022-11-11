<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="Assets/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
  <form acion="ProsesDatabarang.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label> Nama </label>
    <input type="text" class="form-control" nama="nama_barang" id="nama_barang">
  </div>
  <div class="form-group">
    <label> Jenis </label>
    <select class="form-control" nama="jenis_barang" id="jenis-barang">
      <option>Cair</option>
      <option>Padat</option>
      <option>Gas</option>
    </select>
  </div>
  <div class="form-group">
    <label> Harga </label>
    <input type="text" class="form-control" name="harga_barang" id="harga_barang">
  </div>
  <div class="form-group">
      <input type="file" class="form-control" nama="foto" id="foto">
  </div>
  <input type="submit" class="btn btn-primary" value="simpan"> 
  <input type="submit" class="btn btn-secondary" value="cancle">
</form>
  </div>
</div>
<script src="Assets/dist/js/bootstrap.min.js"></script>
</body>
</html>