<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak Saya - LaraPress</title>

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

        .contact-card {
            background: white;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: #dbeafe;
            color: #2563eb;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
        }

        .contact-card h2 {
            color: #1e3a8a;
            margin-bottom: 15px;
        }

        .contact-card > p {
            color: #64748b;
            margin-bottom: 30px;
        }

        /* CONTACT BOX */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .contact-box {
            background: #eff6ff;
            padding: 25px;
            border-radius: 12px;
        }

        .contact-box .emoji {
            font-size: 30px;
            margin-bottom: 12px;
        }

        .contact-box h3 {
            color: #2563eb;
            margin-bottom: 8px;
        }

        .contact-box p {
            color: #64748b;
            word-break: break-word;
        }

        .contact-box a {
            color: #2563eb;
            text-decoration: none;
        }

        .contact-box a:hover {
            text-decoration: underline;
        }

        /* BUTTON */
        .button-container {
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

            .contact-info {
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

        <h1>Kontak Saya</h1>

        <p>
            Silakan hubungi saya melalui informasi di bawah
        </p>

    </section>


    <!-- CONTENT -->
    <div class="container">

        <div class="contact-card">

            <div class="icon">
                📞
            </div>

            <h2>Hubungi Saya</h2>

            <p>
                Jika ingin menghubungi saya, silakan gunakan
                informasi kontak yang tersedia.
            </p>


            <div class="contact-info">

                <!-- EMAIL -->
                <div class="contact-box">

                    <div class="emoji">
                        📧
                    </div>

                    <h3>Email</h3>

                    <p>
                        <a href="mailto:rizwanfauzianiilham@gmail.com">
                            rizwanfauzianiilham@gmail.com
                        </a>
                    </p>

                </div>


                <!-- UNIVERSITAS -->
                <div class="contact-box">

                    <div class="emoji">
                        🎓
                    </div>

                    <h3>Universitas</h3>

                    <p>
                        Universitas Pancasila
                    </p>

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
