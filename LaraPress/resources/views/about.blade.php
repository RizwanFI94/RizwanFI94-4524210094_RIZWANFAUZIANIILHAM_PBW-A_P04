<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        /* NAVBAR */
        nav {
            background: #0f172a;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #60a5fa;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #60a5fa;
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, #0f172a, #2563eb);
            color: white;
            text-align: center;
            padding: 70px 20px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            color: #dbeafe;
            font-size: 18px;
        }

        /* CONTENT */
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 25px;
            background: #dbeafe;
            color: #2563eb;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e3a8a;
        }

        .card p {
            line-height: 1.8;
            color: #64748b;
            margin-bottom: 20px;
            text-align: justify;
        }

        /* INFO */
        .info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .info-box {
            background: #eff6ff;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
        }

        .info-box h3 {
            color: #2563eb;
            margin-bottom: 10px;
        }

        .info-box p {
            text-align: center;
            margin: 0;
            font-size: 14px;
        }

        /* BUTTON */
        .button-container {
            text-align: center;
            margin-top: 35px;
        }

        .button {
            display: inline-block;
            padding: 13px 25px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 9px;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            margin-top: 60px;
            background: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 25px;
        }

        footer strong {
            color: #60a5fa;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 32px;
            }

            .info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>

        <div class="logo">
            LaraPress
        </div>

        <div class="nav-menu">
            <a href="/">Home</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak-me">Kontak</a>
            <a href="/biodata">Biodata</a>
        </div>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <h1>Tentang LaraPress</h1>

        <p>
            Mengenal lebih dekat tentang website kami
        </p>

    </section>


    <!-- CONTENT -->
    <div class="container">

        <div class="card">

            <div class="icon">
                📖
            </div>

            <h2>Tentang LaraPress</h2>

            <p>
                LaraPress adalah sebuah proyek blog sederhana yang
                dibuat untuk mempelajari dasar-dasar framework
                Laravel 12.
            </p>

            <p>
                Website ini merupakan bagian dari proses pembelajaran
                pengembangan aplikasi berbasis web. Dengan menggunakan
                Laravel, kita dapat mempelajari routing, Blade template,
                struktur project, serta pembuatan halaman web yang
                terorganisir.
            </p>

            <p>
                LaraPress dikembangkan sebagai media latihan untuk
                memahami bagaimana sebuah aplikasi web dibangun
                menggunakan framework Laravel.
            </p>


            <!-- INFO -->
            <div class="info">

                <div class="info-box">
                    <h3>Framework</h3>
                    <p>Laravel 12</p>
                </div>

                <div class="info-box">
                    <h3>Project</h3>
                    <p>LaraPress</p>
                </div>

                <div class="info-box">
                    <h3>Bahasa</h3>
                    <p>PHP & HTML</p>
                </div>

            </div>


            <!-- BUTTON -->
            <div class="button-container">

                <a href="/" class="button">
                    ← Kembali ke Halaman Utama
                </a>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <footer>

        <p>
            &copy; {{ date('Y') }}
            <strong>LaraPress</strong>.
            Dibuat oleh Rizwan Fauziani Ilham.
        </p>

    </footer>

</body>

</html>
