<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Karya - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex">
  <?php include 'beranda_admin.php'; ?> 

  <div class="flex-1 ml-30 p-10"> 
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8">
      <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Tambah Karya Baru</h2>

      <form action="../app/proses_tambah.php" method="POST" enctype="multipart/form-data" class="space-y-6">
        
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Judul Karya</label>
          <input type="text" name="judul" placeholder="Masukkan judul karya" required
                 class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Pembuat</label>
          <input type="text" name="pembuat_karya" placeholder="Masukkan pembuat karya" required
                 class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
          <textarea name="deskripsi" rows="4" placeholder="Tuliskan deskripsi karya" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none"></textarea>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Upload</label>
          <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required
                 class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Karya</label>
          <input type="file" name="gambar" accept="image/*" required
                 class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:ring-2 focus:ring-black focus:outline-none">
        </div>

        <div class="flex justify-center">
          <button type="submit"
                  class="bg-black text-white px-6 py-2 rounded-md font-semibold hover:bg-gray-800 transition">
            Simpan Karya
          </button>
        </div>

      </form>
    </div>
  </div>
</body>
</html>
