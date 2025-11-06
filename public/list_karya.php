<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Karya - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 min-h-screen flex">
  <?php include 'beranda_admin.php'; ?>
  <?php include '../config/koneksi.php'; ?>

  <div class="flex-1 ml-30 p-10"> 
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-3xl font-bold text-gray-900">Daftar Karya Seni</h1>
      <a href="tambah_karya.php" 
         class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
        Tambah Karya
      </a>
    </div>

    
    <?php if (isset($_GET['hapus']) && $_GET['hapus'] == 'success'): ?>
      <div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded-lg">Karya berhasil dihapus!</div>
    <?php elseif (isset($_GET['edit']) && $_GET['edit'] == 'success'): ?>
      <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-lg">Karya berhasil diperbarui!</div>
    <?php elseif (isset($_GET['success'])): ?>
      <div class="mb-6 bg-blue-100 text-blue-700 px-4 py-3 rounded-lg">Karya baru berhasil ditambahkan!</div>
    <?php endif; ?>
    
    <!--Search bar -->
    <form method="GET" class="mb-6 flex items-center space-x-2">
      <input 
        type="text" 
        name="search" 
        placeholder="Cari berdasarkan judul atau pembuat..."
        value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
        class="w-80 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
      <button 
        type="submit" 
        class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
        Cari
      </button>
    </form>

    <div class="overflow-x-auto bg-white rounded-xl shadow-md">
      <table class="min-w-full text-sm text-left text-gray-700">
        <thead class="bg-gray-100 border-b text-gray-900 text-sm uppercase">
          <tr>
            <th class="px-6 py-3 text-center">No</th>
            <th class="px-6 py-3">Gambar</th>
            <th class="px-6 py-3">Judul</th>
            <th class="px-6 py-3">Pembuat</th>
            <th class="px-6 py-3">Tanggal</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            //Pencarian
            $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
            $query = "SELECT * FROM karya";
            if (!empty($search)) {//CEK APAKAH SI USER MASUKIN KEYWORD PENCARIAN
              $query .= " WHERE judul LIKE '%$search%' OR pembuat_karya LIKE '%$search%'";//MENAMPILKAN SESUAI KEYWORD YG COCOK
            }
            $query .= " ORDER BY tanggal DESC";//MENAMPILKAN BERDASARKAN TGL YG  TERBARU
            $result = mysqli_query($conn, $query);
            $no = 1;

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id_karya'];
                $judul = htmlspecialchars($row['judul']);
                $pembuat = htmlspecialchars($row['pembuat_karya']);
                $gambar = htmlspecialchars($row['gambar']);
                $tanggal = date('d M Y', strtotime($row['tanggal']));

                echo "
                  <tr class='border-b hover:bg-gray-50 transition'>
                    <td class='px-6 py-4 font-medium text-gray-700 text-center'>$no</td>
                    <td class='px-6 py-4'>
                      <img src='../public/uploads/$gambar' alt='$judul' class='h-16 w-16 object-cover rounded-md'>
                    </td>
                    <td class='px-6 py-4'>$judul</td>
                    <td class='px-6 py-4'>$pembuat</td>
                    <td class='px-6 py-4'>$tanggal</td>
                    <td class='px-6 py-4 text-center'>
                      <a href='edit_karya.php?id=$id' 
                         class='inline-block text-indigo-600 hover:text-indigo-800 mr-3' 
                         title='Edit'>
                        <i data-lucide=\"edit\" class=\"w-5 h-5\"></i>
                      </a>
                      <a href='../app/proses_hapus.php?id=$id' 
                         class='inline-block text-red-600 hover:text-red-800' 
                         title='Hapus' 
                         onclick=\"return confirm('Yakin ingin menghapus karya ini?');\">
                        <i data-lucide=\"trash-2\" class=\"w-5 h-5\"></i>
                      </a>
                    </td>
                  </tr>
                ";
                $no++;
              }
            } else {
              echo "
                <tr>
                  <td colspan='6' class='px-6 py-6 text-center text-gray-500'>
                    Tidak ada hasil yang ditemukan.
                  </td>
                </tr>
              ";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
