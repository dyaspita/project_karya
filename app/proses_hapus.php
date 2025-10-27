<?php
include "../config/koneksi.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $get = mysqli_query($conn, "SELECT gambar FROM karya WHERE id_karya = $id");
    if ($row = mysqli_fetch_assoc($get)) {
        $gambarPath = "../public/uploads/" . $row['gambar'];

        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }
    }

    $query = "DELETE FROM karya WHERE id_karya = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: ../public/list_karya.php?hapus=success");
        exit;
    } else {
        echo "Gagal menghapus karya: " . mysqli_error($conn);
    }

} else {
    echo "ID tidak ditemukan.";
}
?>
