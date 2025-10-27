<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }
    .section {
      background: white;
      margin-bottom: 2rem;
      padding: 3rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      text-align: center;
    }
    .section h2 {
      color: #01050a;
      font-size: 2.2rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }
    .section p {
      font-size: 1.1rem;
      color: #555;
      max-width: 800px;
      margin: 0 auto;
      line-height: 1.8;
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img 
  src="images/gambar.jpg" 
  alt="Background"
  class="absolute inset-0 -z-10 w-full h-full object-cover object-center filter brightness-110" />

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Selamat Datang</h2>
        <p class="mt-9 text-lg font-medium text-gray-200 sm:text-l">
          Sebuah ruang bagi para kreator muda untuk mengekspresikan ide dan karya seni mereka. Kami percaya setiap karya memiliki cerita dan setiap kreator pantas mendapatkan ruang untuk bersinar.
        </p>
        <div class="mt-10">
          <a href="karya.php" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300 shadow-lg no-underline">
            Lihat Karya
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="section">
      <h2>Tentang Website</h2>
      <p>
        Platform ini merupakan wadah bagi para kreator pemula untuk berbagi, menginspirasi, dan menampilkan karya seni mereka kepada dunia. 
        Melalui website ini, kami ingin menciptakan komunitas kreatif yang saling mendukung, menghargai proses, serta mendorong tumbuhnya semangat berkarya tanpa batas. 
        Setiap ide, warna, dan bentuk adalah bagian dari perjalanan menuju karya yang bermakna.
      </p>
    </section>
  </div>

  <?php include 'footer.php'; ?>

</body>
</html>
