<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Kontak - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 min-h-screen flex">
  <?php include 'beranda_admin.php'; ?>
  <?php include '../config/koneksi.php'; ?>

  <div class="flex-1 ml-30 p-10"> 
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-3xl font-bold text-gray-900">Pesan Kontak</h1>
    </div>

    <?php if (isset($_GET['hapus']) && $_GET['hapus'] == 'success'): ?>
      <div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded-lg">
        Pesan berhasil dihapus!
      </div>
    <?php endif; ?>

    <div class="overflow-x-auto bg-white rounded-xl shadow-md">
      <table class="min-w-full text-sm text-left text-gray-700">
        <thead class="bg-gray-100 border-b text-gray-900 text-sm uppercase">
          <tr>
            <th class="px-6 py-3 text-center">No</th>
            <th class="px-6 py-3">Nama Pengirim</th>
            <th class="px-6 py-3">Email Pengirim</th>
            <th class="px-6 py-3">Pesan</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM kontak ORDER BY id_kontak DESC";
            $result = mysqli_query($conn, $query);
            $no = 1;

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id_kontak'];
                $nama = htmlspecialchars($row['nama_pengirim']);
                $email = htmlspecialchars($row['email_pengirim']);
                $pesan = htmlspecialchars($row['pesan']);

                echo "
                  <tr class='border-b hover:bg-gray-50 transition'>
                    <td class='px-6 py-4 font-medium text-gray-700 text-center'>$no</td>
                    <td class='px-6 py-4'>$nama</td>
                    <td class='px-6 py-4'>$email</td>
                    <td class='px-6 py-4'>$pesan</td>
                    <td class='px-6 py-4 text-center'>
                      <a href='../app/proses_hapus_pesan.php?id=$id'
                         class='inline-block text-red-600 hover:text-red-800'
                         title='Hapus Pesan'
                         onclick=\"return confirm('Yakin ingin menghapus pesan ini?');\">
                        <i data-lucide='trash-2' class='w-5 h-5'></i>
                      </a>
                    </td>
                  </tr>
                ";
                $no++;
              }
            } else {
              echo "
                <tr>
                  <td colspan='5' class='px-6 py-6 text-center text-gray-500'>
                    Belum ada pesan.
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
