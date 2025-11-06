<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['id_admin'])) {
    $_SESSION['id_admin'] = 1; 
}

// Ambil data dari form
$judul = $_POST['judul'];
$pembuat_karya = $_POST['pembuat_karya'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$id_admin = $_SESSION['id_admin'];

// Upload file gambar
$folder = "../public/uploads/";
if (!is_dir($folder)) mkdir($folder, 0777, true);//UNTUK MEMERIKSA APAKAH SI FOLDER INI SDH ADA DI DIREKTORI

$namaFile = basename($_FILES['gambar']['name']);
$targetFile = $folder . $namaFile;

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
    $sql = "INSERT INTO karya (id_admin, judul, pembuat_karya, deskripsi, gambar, tanggal)
            VALUES ('$id_admin', '$judul', '$pembuat_karya', '$deskripsi', '$namaFile', '$tanggal')";
    if ($conn->query($sql)) {
        header("Location: ../public/list_karya.php?success=1");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Upload gambar gagal!";
}
?>
