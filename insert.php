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
  <h1>Tambah Data Mahasiswa</h1>
  <form action="./sql_insert.php" method="post">
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputName1"  name="nama">
    </div>
    <div class="mb-3">
      <label for="exampleInputNim1" class="form-label">NIM</label>
      <input type="number" class="form-control" id="exampleInputNim1"  name="nim">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputAlamat1" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="exampleInputAlamat1"  name="alamat">
    </div>
    <div class="mb-3">
      <label for="exampleInputNomor1" class="form-label">Nomor Telpon</label>
      <input type="number" class="form-control" id="exampleInputNomor1"  name="nomor">
    </div>
    <div class="mb-3">
      <label for="exampleInputProdi1" class="form-label">Prodi</label>
      <input type="text" class="form-control" id="exampleInputProdi1"  name="prodi">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>

</body>

</html>