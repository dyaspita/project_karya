<?php
include "../config/koneksi.php";  
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: ../public/daftar.php');
  exit;
}

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($nama === '' || $email === '' || $password === '') {
  header('Location: ../public/daftar.php?error=' . urlencode('Harap diisi dengan lengkap'));
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: ../public/daftar.php?error=' . urlencode('Email tidak valid'));
  exit;
}

if (strlen($password) < 6) {
  header('Location: ../public/daftar.php?error=' . urlencode('Password minimal 6 karakter'));
  exit;
}

$stmt = mysqli_prepare($conn, "SELECT id FROM pengguna WHERE email_pengguna = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
if (mysqli_stmt_num_rows($stmt) > 0) {
  mysqli_stmt_close($stmt);
  header('Location: ../public/daftar.php?error=' . urlencode('Email sudah terdaftar'));
  exit;
}
mysqli_stmt_close($stmt);

$password = $password;  
$stmt = mysqli_prepare($conn, "INSERT INTO pengguna (nama_pengguna, email_pengguna, password_pengguna, role) VALUES (?, ?, ?, 'user')");
if (!$stmt) {
  header('Location: ../public/daftar.php?error=' . urlencode('Terjadi kesalahan server'));
  exit;
}
mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $password);  
$ok = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

if ($ok) {
  header('Location: ../public/login.php?registered=1');
  exit;
} else {
  header('Location: ../public/daftar.php?error=' . urlencode('Gagal membuat akun'));
  exit;
}
?>
