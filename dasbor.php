<?php
include "koneksi.php";
session_start();


if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM  data";
$result = mysqli_query($connect, $sql);
?>
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Load file CSS Bootstrap --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
 
    <!-- Load file library jQuery --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
 
    <!-- Load file library Popper JS --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
 
    <!-- Load file library JavaScript --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

</head>
<body>
<!-- DataTales Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <a href="./insert.php"><button name="insert" id="button" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Data</button></a>
            <a href="./logout.php"><button name="logout" id="button" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Logout</button></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nomor Telpon</th>
                            <th>Prodi</th>
                            <th>Password</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $key) : ?>
                            <tr>
                                <td><?= $key['id'] ?></td>
                                <td><?= $key['nama'] ?></td>
                                <td><?= $key['nim'] ?></td>
                                <td><?= $key['email'] ?></td>
                                <td><?= $key['alamat'] ?></td>
                                <td><?= $key['telepon'] ?></td>
                                <td><?= $key['prodi'] ?></td>
                                <td><?= $key['password'] ?></td>
                                <td>
                                    <a href="form-edit.php?id=<?= $key['id'] ?>" class="btn btn-success">Edit</a>
                                    <a href="hapus.php?id=<?= $key['id'] ?>" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
</body>
</html>