<?php
session_start();
include 'header.php';
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Karya</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
<div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
  <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center mb-10">
    Detail Karya Seni
  </h2>

  <div class="max-w-5xl mx-auto px-6 py-12">
    <?php
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $query = "SELECT * FROM karya WHERE id_karya = $id";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $judul = htmlspecialchars($row['judul']);
            $pembuat = htmlspecialchars($row['pembuat_karya']);
            $deskripsi = nl2br(htmlspecialchars($row['deskripsi']));
            $gambar = htmlspecialchars($row['gambar']);
            $tanggal = date('d M Y', strtotime($row['tanggal']));

            echo "
            <div class='bg-white shadow-lg rounded-xl overflow-hidden'>
                <img src='uploads/$gambar' alt='$judul' class='w-full h-[500px] object-cover'>
                <div class='p-8'>
                    <h1 class='text-3xl font-bold text-gray-900 mb-2'>$judul</h1>
                    <p class='text-lg font-semibold text-gray-700 mb-1'>Oleh: $pembuat</p>
                    <p class='text-sm text-gray-500 mb-6'>Diupload pada: $tanggal</p>
                    <p class='text-gray-800 leading-relaxed'>$deskripsi</p>
                </div>
            </div>";
        } else {
            echo "<p class='text-center text-gray-600'>Karya tidak ditemukan.</p>";
        }
    } else {
        echo "<p class='text-center text-gray-600'>ID karya tidak valid.</p>";
    }
    ?>

    </div>
  </div>
</div>
</body>
</html>
