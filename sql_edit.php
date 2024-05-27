
<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
// var_dump($_POST);
$id = $_POST['id'];                    
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$prodi = $_POST['prodi'];
$password = $_POST['password'];

// query untuk insert data

$sql = "UPDATE `data` 
        SET nama='$nama', nim='$nim', email='$email', alamat='$alamat', telepon='$telepon', prodi='$prodi', password='$password' 
        WHERE id=$id";


// Eksekusi query
if (mysqli_query($connect, $sql)) {
    header('Location:dasbor.php');
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connect);
 }
 
 // Tutup koneksi
 mysqli_close($connect);
}



?> 