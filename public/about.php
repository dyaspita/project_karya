<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #01050a;
            color: white;
            text-align: center;
            padding: 3rem 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        header h1 {
            margin: 0;
            font-size: 2.8rem;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .container {
            max-width: 1100px;
            margin: 3rem auto;
            padding: 2rem;
        }
        .section {
            background: white;
            margin-bottom: 2rem;
            padding: 3rem 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .section h2 {
            color: #01050a;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 2rem;
            font-weight: 600;
        }
        .section h3 {
            color: #333;
            margin-top: 1.5rem;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .creator-section {
            text-align: center;
        }
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2rem;
            }
            .section {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <header>
        <h1>Tentang Kami</h1>
    </header>

    <div class="container">
        <section class="section">
            <h2>Tentang Website</h2>
            <p>
                Platform ini merupakan wadah bagi para kreator pemula untuk menampilkan, berbagi, dan mengembangkan karya seni mereka. 
                Kami percaya bahwa setiap karya memiliki makna dan potensi untuk menginspirasi orang lain. 
                Melalui website ini, kami ingin menciptakan ruang kreatif yang mendorong kolaborasi, apresiasi, dan pertumbuhan bersama di dunia seni digital.
            </p>
        </section>

        <section class="section">
            <h2>Visi dan Misi</h2>

            <h3>Visi Kami</h3>
            <p>
                Menjadi platform kreatif terdepan yang memberdayakan kreator pemula untuk mengekspresikan karya seni mereka, 
                membangun koneksi dengan komunitas, serta menginspirasi dunia melalui keberagaman dan keindahan karya.
            </p>

            <h3>Misi Kami</h3>
            <ul style="line-height: 1.8; margin-left: 1.5rem;">
                <li>1. Mendukung kreativitas tanpa batas dengan menyediakan ruang digital yang mudah diakses.</li>
                <li>2. Mendorong kolaborasi dan apresiasi agar kreator dapat saling belajar, berbagi pengalaman, dan tumbuh bersama komunitas seni.</li>
                <li>3. Menjadi jembatan antara kreator dan publik dengan menghadirkan wadah yang mempertemukan seniman, penikmat seni, dan pelaku industri kreatif.</li>
            </ul>

        </section>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
