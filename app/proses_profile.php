<?php
session_start();
include '../config/koneksi.php';

// Pastikan user sudah login
if (!isset($_SESSION['email_pengguna']) || $_SESSION['role'] != 'user') {
    header("Location:../app/public/login.php");
    exit;
}

if (isset($_POST['update'])) {
    $email_lama = $_SESSION['email_pengguna'];
    $nama = mysqli_real_escape_string($conn, $_POST['nama_pengguna']);
    $email_baru = mysqli_real_escape_string($conn, $_POST['email_pengguna']);
    $password = mysqli_real_escape_string($conn, $_POST['password_pengguna']);

    // Update password hanya jika diisi
    if (!empty($password)) {
        // Bisa pakai hash: password_hash($password, PASSWORD_DEFAULT)
        $query = "UPDATE pengguna 
                  SET nama_pengguna='$nama', email_pengguna='$email_baru', password_pengguna='$password' 
                  WHERE email_pengguna='$email_lama'";
    } else {
        $query = "UPDATE pengguna 
                  SET nama_pengguna='$nama', email_pengguna='$email_baru' 
                  WHERE email_pengguna='$email_lama'";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['email_pengguna'] = $email_baru; // update session jika email berubah
        header("Location: profile.php?success=Profil berhasil diperbarui");
        exit;
    } else {
        echo "Gagal memperbarui profil: " . mysqli_error($conn);
    }
}
?>
