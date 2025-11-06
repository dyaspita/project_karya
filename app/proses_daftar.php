<?php
session_start();
include '../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validasi input dasar
    if (empty($email) || empty($password)) {
        header("Location: ../public/daftar.php?error=Semua kolom wajib diisi");
        exit();
    }

    // Validasi format email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../public/daftar.php?error=Format email tidak valid");
        exit();
    }

    // Cek apakah email sudah terdaftar
    $stmt_cek = $koneksi_db->prepare("SELECT id FROM pengguna WHERE email_pengguna = ?");
    $stmt_cek->bind_param("s", $email);
    $stmt_cek->execute();
    $result_cek = $stmt_cek->get_result();

    if ($result_cek->num_rows > 0) {
        header("Location: ../public/daftar.php?error=Email sudah terdaftar");
        $stmt_cek->close();
        $koneksi_db->close();
        exit();
    }
    $stmt_cek->close();

    // Role default user
    $role = "user";

    // Simpan data user baru ke database (tanpa hash password)
    $stmt_insert = $koneksi_db->prepare("
        INSERT INTO pengguna (email_pengguna, password, role)
        VALUES (?, ?, ?)
    ");
    $stmt_insert->bind_param("sss", $email, $password, $role);

    if ($stmt_insert->execute()) {
        header("Location: ../public/login.php?sukses=Registrasi berhasil! Silakan login.");
    } else {
        header("Location: ../public/daftar.php?error=Registrasi gagal, coba lagi.");
    }

    $stmt_insert->close();
    $koneksi_db->close();
} else {
    header("Location: ../public/daftar.php");
    exit();
}
?>
