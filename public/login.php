<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

  <?php include 'header.php'; ?>

  <div class="flex-grow flex items-center justify-center">
    <div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-md border border-gray-200">
      <div class="text-center mb-8">
        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Login</h2>
        <p class="mt-2 text-gray-600">Masukkan email dan password Anda</p>
      </div>

      <?php if (isset($_GET['error'])): ?>
        <div class="mb-4 text-center text-red-500 font-semibold">
          <?php echo htmlspecialchars($_GET['error']); ?>
        </div>
      <?php endif; ?>

      <form action="../app/proses_login.php" method="POST" class="space-y-6">

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <div class="mt-2">
            <input id="email" type="email" name="email" required 
              class="block w-full rounded-md bg-gray-50 border border-gray-300 px-3 py-2 
                     text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-black 
                     focus:border-indigo-500 focus:outline-none">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-2">
            <input id="password" type="password" name="password" required 
              class="block w-full rounded-md bg-gray-50 border border-gray-300 px-3 py-2 
                     text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-black
                     focus:border-indigo-500 focus:outline-none">
          </div>
        </div>

        <div>
          <button type="submit" 
            class="w-full py-2 px-4 rounded-md bg-black hover:bg-gray-900
                   text-white font-semibold shadow-md transition">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>


</body>
</html>