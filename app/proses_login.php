<?php
session_start();
include '../config/koneksi.php';
if (!$conn) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: ../public/beranda_admin.php");
        exit;
}
}
// --- PROSES LOGIN ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // Ambil input dari form
    $input_email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $input_password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($input_email === '' || $input_password === '') {
        header("Location: ../public/login.php?error=Email dan password wajib diisi!");
        exit;
    }
//Membersihkan input user supaya aman dari SQL Injection
    $input_email = $conn->real_escape_string($input_email);
    $input_password = $conn->real_escape_string($input_password);
    
    $sql_admin = "SELECT * FROM admin WHERE email_admin = '$input_email' AND password_admin = '$input_password'";
    $result_admin = $conn->query($sql_admin);

    //CEK APAKAH LOGIN BENAR CENAHH
    if ($result_admin && $result_admin->num_rows > 0) {
        $admin = $result_admin->fetch_assoc();//NGAMBILLL DATA ADMIN

        $_SESSION['email'] = $admin['email_admin'];//MENYIMPANNN
        $_SESSION['role'] = 'admin';

        header("Location: ../public/beranda_admin.php");
        exit;
    }
    header("Location: ../public/login.php?error=Email atau Password salah!");
    exit;
}

$conn->close();
?>
