<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background: #f4f4f4; 
            margin:0; padding:0; 
            color:#333; 
        }
        header { 
            background-color: #01050a; 
            color: white; 
            text-align: center; 
            padding: 3rem 1rem; 
        }
        header h1 { margin:0; font-size:2.8rem; font-weight:600; }
        .container { max-width:1100px; margin:3rem auto; padding:2rem; }
        .section { background:white; margin-bottom:2rem; padding:3rem 2rem; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); }
        .section h2 { text-align:center; font-size:2rem; font-weight:600; }
        .contact-info { text-align:justify; font-size:1.1rem; margin-top:1rem; }
        .contact-info p { margin:0.5rem 0; }
        .contact-info a { color:#007bff; text-decoration:none; }
        .contact-info a:hover { text-decoration:underline; }
        .map-container { margin-top:2rem; border-radius:8px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.1); }
        .social-section { text-align:center; }
        .social-icons { display:flex; justify-content:center; gap:2rem; flex-wrap:wrap; margin-top:1.5rem; }
        .social-icon { display:flex; align-items:center; gap:0.5rem; color:#007bff; text-decoration:none; font-size:1.2rem; transition:all 0.3s ease; }
        .social-icon i { font-size:1.5rem; }
        .social-icon:hover { color:#0056b3; transform:translateY(-3px); }
        .contact-form { display:flex; flex-direction:column; gap:1rem; max-width:600px; margin:2rem auto 0; }
        .contact-form input, .contact-form textarea { padding:0.75rem; border-radius:8px; border:1px solid #ccc; width:100%; font-size:1rem; }
        .contact-form button { background-color:#01050a; color:white; padding:0.75rem; font-size:1rem; border:none; border-radius:8px; cursor:pointer; }
        .contact-form button:hover { background-color:#333; }
        @media(max-width:768px){ .social-icons{flex-direction:column; gap:1rem;} header h1{font-size:2.2rem;} }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <header>
        <h1>Kontak Kami</h1>
    </header>

    <div class="container">
        <section class="section">
            <h2>Kirim Pesan</h2>
        <form action="../app/proses_kontak.php" method="POST" class="contact-form">
                <input type="text" name="nama_pengirim" placeholder="Nama Anda" required>
                <input type="email" name="email_pengirim" placeholder="Email Anda" required>
                <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda" required></textarea>
                <button type="submit" name="kirim">Kirim Pesan</button>
            </form>
        </section>

        <section class="section">
            <h2>Informasi Kontak</h2>
            <div class="contact-info">
                <p><strong>Alamat:</strong> Jl. Condong Catur, Depok, Sleman</p>
                <p><strong>Telepon:</strong> 0894-7478-8833</p>
                <p><strong>Email:</strong> 
                    <a href="emailto:wahyudyaspuspitasari3@gmail.com">wahyudyaspuspitasari3@gmail.com</a>
                </p>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.282953924604!2d110.40918597591006!3d-7.646835675979075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599b23b9f20b%3A0x3f2aef2e3b0a445!2sUPN%20Veteran%20Yogyakarta!5e0!3m2!1sid!2sid!4v1730000000000!5m2!1sid!2sid" 
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </section>

        <section class="section social-section">
            <h2>Media Sosial</h2>
            <div class="social-icons">
                <a href="https://www.instagram.com/whypitaa_/" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://www.linkedin.com/in/wahyu-dyas-puspitasari-248767289" target="_blank" class="social-icon">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
