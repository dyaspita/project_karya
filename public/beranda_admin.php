<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda Admin - [Nama Website]</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-100">
  <?php
  session_start();
  if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../public/login.php");
    exit;
  }
  ?>

  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-900 text-white">
      <div class="p-4">
        <h2 class="text-xl font-bold">Admin Panel</h2>
      </div>
      <nav class="mt-4">
        <a href="tambah_karya.php?page=tambah_karya" class="block py-2 px-4 hover:bg-gray-700">Tambah Karya</a>
        <a href="list_karya.php?page=edit_karya" class="block py-2 px-4 hover:bg-gray-700">List Karya</a>
        <a href="pesan_kontak.php?page=pesan_kontak" class="block py-2 px-4 hover:bg-gray-700">Pesan Kontak</a>
        <a href="logout.php" class="block py-2 px-4 hover:bg-gray-700 mt-8">Logout</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
      <?php
      $page = $_GET['page'] ?? 'beranda';
      switch ($page) {
        case 'tambah_karya':
          break;
        case 'list_karya':
          break;
        case 'pesan_kontak':
          break;
        default:
      }
      ?>
    </div>
  </div>
</body>
</html>
