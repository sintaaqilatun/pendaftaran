<?php

include ("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {
    
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    // buat query
    $sql = "INSERT INTO calon_karyawann(nama, alamat, jenis_kelamin, agama, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        header('Location: index.php?status-sukses');
    } else {
        header('Location: index.php?status-gagal');
        die("Akses dilarang...");
    }
}

?>