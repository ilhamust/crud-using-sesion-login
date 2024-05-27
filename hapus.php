<?php

include "koneksi.php";

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM data WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    // apakah query hapus berhasil? jika iya ke dasbor jika tidak munculkan pesan gagal menghapus
    if( $query ){
        header('Location: dasbor.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>