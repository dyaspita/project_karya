<?php
include '../config/koneksi.php';

if (isset($_POST['update'])) {
  $id = $_POST['id_karya'];
  $judul = $_POST['judul'];
  $pembuat = $_POST['pembuat_karya'];
  $tanggal = $_POST['tanggal'];
  $gambar_baru = $_FILES['gambar']['name'];

  if ($gambar_baru != "") {
    $target = "../public/uploads/" . basename($gambar_baru);
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
    $query = "UPDATE karya SET judul='$judul', pembuat_karya='$pembuat', tanggal='$tanggal', gambar='$gambar_baru' WHERE id_karya='$id'";
  } else {
    $query = "UPDATE karya SET judul='$judul', pembuat_karya='$pembuat', tanggal='$tanggal' WHERE id_karya='$id'";
  }

  if (mysqli_query($conn, $query)) {
    header("Location:../public/list_karya.php?edit=success");
  } else {
    echo "Gagal memperbarui karya: " . mysqli_error($conn);
  }
}
?>
