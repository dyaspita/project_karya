<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

  <?php include 'header.php'; ?>

  <div class="flex-grow flex items-center justify-center">
    <div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-md border border-gray-200">
      <div class="text-center mb-8">
        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Daftar Akun</h2>
        <p class="mt-2 text-gray-600">Masukkan email dan password Anda</p>
      </div>

      <?php if (isset($_GET['error'])): ?>
        <div class="mb-4 text-center text-red-500 font-semibold">
          <?= htmlspecialchars($_GET['error']); ?>
        </div>
      <?php endif; ?>

      <form action="../app/proses_daftar.php" method="POST" class="space-y-6">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input id="email" type="email" name="email" required
                 class="block w-full rounded-md bg-gray-50 border border-gray-300 px-3 py-2 text-gray-900 focus:ring-2 focus:ring-black focus:outline-none">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input id="password" type="password" name="password" required
                 class="block w-full rounded-md bg-gray-50 border border-gray-300 px-3 py-2 text-gray-900 focus:ring-2 focus:ring-black focus:outline-none">
        </div>

        <div>
          <button type="submit"
                  class="w-full py-2 px-4 rounded-md bg-black hover:bg-gray-900 text-white font-semibold shadow-md transition">
            Daftar
          </button>
        </div>
      </form>

      <p class="mt-4 text-center text-sm text-gray-600">
        Sudah punya akun? <a href="login.php" class="text-black font-semibold hover:underline">Login di sini</a>
      </p>
    </div>
  </div>

</body>
</html>
