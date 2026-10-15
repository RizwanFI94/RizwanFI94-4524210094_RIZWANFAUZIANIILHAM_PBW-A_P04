<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaraPress - Halaman Utama</title>

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
            width: 100%;
            background: #0f172a;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #60a5fa;
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
            min-height: 430px;
            background: linear-gradient(
                135deg,
                #0f172a,
                #1d4ed8,
                #2563eb
            );

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 40px 20px;
        }

        .hero-content {
            max-width: 750px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #93c5fd;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            color: #dbeafe;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            background: white;
            color: #1d4ed8;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        /* CONTENT */
        .content {
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .content h2 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            margin-bottom: 35px;
        }

        /* CARD */
        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }

        .icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 20px;
            background: #dbeafe;
            color: #2563eb;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
        }

        .card h3 {
            margin-bottom: 12px;
            font-size: 21px;
        }

        .card p {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .card a {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .card a:hover {
            background: #1d4ed8;
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
                gap: 15px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .cards {
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
            <a href="/">Dashboard</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak-me">Kontak</a>
            <a href="/biodata">Biodata</a>
        </div>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">

            <h1>
                Selamat Datang di
                <span>LaraPress</span>
            </h1>

            <p>
                Website sederhana berbasis Laravel yang berisi
                informasi, biodata, tentang kami, dan kontak.
            </p>

            <a href="/biodata" class="btn">
                Lihat Biodata →
            </a>

        </div>

    </section>


    <!-- CONTENT -->
    <section class="content">

        <h2>Menu Website</h2>

        <p class="subtitle">
            Jelajahi halaman yang tersedia di LaraPress
        </p>


        <div class="cards">

            <!-- TENTANG KAMI -->
            <div class="card">

                <div class="icon">
                    👥
                </div>

                <h3>Tentang Kami</h3>

                <p>
                    Informasi mengenai LaraPress dan
                    tujuan dibuatnya website ini.
                </p>

                <a href="/tentang-kami">
                    Selengkapnya
                </a>

            </div>


            <!-- KONTAK -->
            <div class="card">

                <div class="icon">
                    📞
                </div>

                <h3>Kontak Saya</h3>

                <p>
                    Halaman untuk melihat informasi
                    kontak dan cara menghubungi saya.
                </p>

                <a href="/kontak-me">
                    Lihat Kontak
                </a>

            </div>


            <!-- BIODATA -->
            <div class="card">

                <div class="icon">
                    👤
                </div>

                <h3>Biodata</h3>

                <p>
                    Informasi biodata Rizwan Fauziani Ilham,
                    mahasiswa Universitas Pancasila.
                </p>

                <a href="/biodata">
                    Lihat Biodata
                </a>

            </div>

        </div>

    </section>


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
