<?php
include '../config/koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM karya WHERE id_karya = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Karya</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Karya Seni</h2>

    <form action="../app/proses_edit.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_karya" value="<?= $data['id_karya'] ?>">

      <div class="mb-4">
        <label class="block text-gray-700 mb-2">Judul Karya</label>
        <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" 
               class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 mb-2">Pembuat</label>
        <input type="text" name="pembuat_karya" value="<?= htmlspecialchars($data['pembuat_karya']) ?>" 
               class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 mb-2">Tanggal</label>
        <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" 
               class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 mb-2">Gambar Saat Ini</label>
        <img src="../public/uploads/<?= htmlspecialchars($data['gambar']) ?>" 
             alt="<?= htmlspecialchars($data['judul']) ?>" 
             class="h-24 w-24 object-cover rounded mb-3">
        <input type="file" name="gambar" class="w-full border rounded-lg p-2">
        <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar.</p>
      </div>

      <div class="flex justify-end space-x-3">
        <a href="../public/list_karya.php" class="bg-gray-300 px-4 py-2 rounded-lg text-gray-700">Batal</a>
        <button type="submit" name="update" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>
</body>
</html>
