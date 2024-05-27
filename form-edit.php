<?php

include "koneksi.php";

// kalau tidak ada id di query string
// if( !isset($_GET['id']) ){
//     header('Location: dasbor.php');
// }

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data WHERE id=$id";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_array($query);
// var_dump($query);

// jika data yang di-edit tidak ditemukan
// if( mysqli_num_rows($query) > 0 ){
//     die("data tidak ditemukan...");
// }


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>tambah data</title>
</head>

<body>
  <h1>Edit Data Mahasiswa</h1>
  <form action="sql_edit.php" method="post">
  <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputName1"  name="nama" value="<?= $data['nama']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputNim1" class="form-label">NIM</label>
      <input type="number" class="form-control" id="exampleInputNim1"  name="nim" value="<?= $data['nim']?>" >
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= $data['email']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputAlamat1" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="exampleInputAlamat1"  name="alamat" value="<?= $data['alamat']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputNomor1" class="form-label">Nomor Telpon</label>
      <input type="number" class="form-control" id="exampleInputNomor1"  name="telepon" value="<?= $data['telepon']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputProdi1" class="form-label">Prodi</label>
      <input type="text" class="form-control" id="exampleInputProdi1"  name="prodi" value="<?= $data['prodi']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= $data['password']?>">
    </div>
    <button name="simpan" type="simpan" class="btn btn-primary">Simpan</button>
  </form>

</body>

</html>