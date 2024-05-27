<?php
include 'koneksi.php';

// Tangkap data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$prodi = $_POST['prodi'];
$password = $_POST['password'];

// query untuk insert data
$sql = "INSERT INTO data (nama, nim, email, alamat, telepon, prodi, password) VALUES ('$nama', '$nim', '$email', '$alamat', '$nomor', '$prodi', '$password')";

// Eksekusi query
if (mysqli_query($connect, $sql)) {
   header('Location:dasbor.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

// Tutup koneksi
mysqli_close($connect);
?> 