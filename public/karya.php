<?php
include 'header.php';
include '../config/koneksi.php';

// Tangkap keyword pencarian jika ada
$keyword = '';
if (isset($_GET['search'])) {
    $keyword = mysqli_real_escape_string($conn, $_GET['search']);
}
?>

<div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
  <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center mb-6">
    Galeri Karya Seni
  </h2>

  <!-- Form Pencarian -->
  <form method="GET" class="flex justify-center mb-8">
    <input type="text" name="search" placeholder="Cari judul atau pembuat..." 
           value="<?= htmlspecialchars($keyword) ?>" 
           class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
    <button type="submit" 
            class="bg-indigo-600 text-white px-4 py-2 rounded-r-md hover:bg-indigo-700 transition">
      Cari
    </button>
  </form>

  <div class="grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-10">
    <?php
      // Query dengan search
      if ($keyword != '') {
          $query = "SELECT * FROM karya 
                    WHERE judul LIKE '%$keyword%' OR pembuat_karya LIKE '%$keyword%' 
                    ORDER BY tanggal DESC";
      } else {
          $query = "SELECT * FROM karya ORDER BY tanggal DESC";
      }

      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $gambar = htmlspecialchars($row['gambar']);
          $judul = htmlspecialchars($row['judul']);
          $pembuat_karya = htmlspecialchars($row['pembuat_karya']);
          $deskripsi = htmlspecialchars(substr($row['deskripsi'], 0, 80)) . '...';
          $tanggal = date('d M Y', strtotime($row['tanggal']));
          echo "
          <div class='group bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition'>
            <img src='uploads/$gambar' 
                 alt='$judul'
                 class='h-64 w-full object-cover group-hover:opacity-90 transition'>
            <div class='p-5'>
              <h3 class='text-lg font-semibold text-gray-900'>$judul</h3>
              <p class='text-sm text-gray-500 mt-1'>$pembuat_karya</p>
              <p class='text-sm text-gray-500 mt-1'>$tanggal</p>
              <p class='text-gray-700 mt-3'>$deskripsi</p>
              <a href='detail_karya.php?id={$row['id_karya']}'
                 class='inline-block mt-4 text-sm font-semibold text-indigo-600 hover:text-black'>
                 Lihat Selengkapnya →
              </a>
            </div>
          </div>
          ";
        }
      } else {
        echo "
        <div class='col-span-full text-center text-gray-600'>
          Tidak ada karya yang sesuai pencarian.
        </div>";
      }
    ?>
  </div>
</div>

<?php include 'footer.php'; ?>
