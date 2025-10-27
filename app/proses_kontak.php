<?php
include '../config/koneksi.php';

if (isset($_POST['kirim'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_pengirim']);
    $email = mysqli_real_escape_string($conn, $_POST['email_pengirim']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

    $query = "INSERT INTO kontak (nama_pengirim, email_pengirim, pesan) 
              VALUES ('$nama', '$email', '$pesan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location='../public/kontak.php';</script>";
    } else {
        echo "Gagal mengirim pesan: " . mysqli_error($conn);
    }
}
?>
