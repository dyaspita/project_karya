<?php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  $query = "DELETE FROM kontak WHERE id_kontak = $id";
  $result = mysqli_query($conn, $query);

  if ($result) {
    header("Location: ../public/pesan_kontak.php?hapus=success");
    exit;
  } else {
    echo "Gagal menghapus pesan.";
  }
} else {
  header("Location: ../public/pesan_kontak.php");
  exit;
}
?>
