<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">

</head>

<body>
  <?php include 'header.php'; ?>

  <!-- Card -->
   <div class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-md border border-gray-200">
    <div class="text-center mb-8">
      <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">
        Daftar
      </h2>
      <br>
      <h5>Mohon masukkan data diri dengan benar!<h5>
    </div>

    <form action="../app/proses_daftar.php" method="POST" class="space-y-6">
    <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
        <div class="mt-2">
          <input id="nama" type="text" name="nama" required 
            class="block w-full rounded-md bg-gray-50 border border-gray-300 px-3 py-2 
                   text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-black 
                   focus:border-indigo-500 focus:outline-none">
        </div>
      </div>
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
            class="block w-full rounded-md bg-gray-50 border border-gray-900 px-3 py-2 
                   text-gray-900 placeholder-gray-900 focus:ring-2 focus:ring-black
                   focus:border-indigo-500 focus:outline-none">
        </div>
      </div>

      <div>
        <button type="submit" 
          class="w-full py-2 px-4 rounded-md bg-black hover:bg-white
                 text-white font-semibold shadow-md transition">
            Daftar
        </button>
      </div>
    </form>

  </div>
 </div>


</body>
</html>
