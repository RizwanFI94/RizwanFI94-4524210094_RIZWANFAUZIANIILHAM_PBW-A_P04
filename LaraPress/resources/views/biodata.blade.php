<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biodata - Rizwan Fauziani Ilham</title>

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================
           BODY
        ========================= */

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            min-height: 100vh;
            color: #333;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }


        /* =========================
           CARD
        ========================= */

        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            text-align: center;
            padding: 45px 20px;
        }


        /* PROFILE */

        .profile {
            width: 130px;
            height: 130px;
            border-radius: 50%;

            background: white;

            margin: 0 auto 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #2563eb;

            font-size: 45px;
            font-weight: bold;

            border: 5px solid rgba(255, 255, 255, 0.5);
        }


        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }


        .header p {
            font-size: 17px;
            opacity: 0.9;
        }


        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 35px;
        }


        /* SECTION TITLE */

        .section-title {
            color: #1e3a8a;
            font-size: 22px;

            margin-bottom: 20px;

            border-left: 5px solid #2563eb;

            padding-left: 12px;
        }


        /* =========================
           BIODATA
        ========================= */

        .biodata {
            display: grid;

            grid-template-columns: 160px 1fr;

            gap: 15px;

            margin-bottom: 30px;
        }


        .label {
            font-weight: bold;
            color: #555;
        }


        .value {
            color: #222;
        }


        /* =========================
           ABOUT
        ========================= */

        .about {
            line-height: 1.8;

            color: #555;

            margin-bottom: 30px;
        }


        /* =========================
           INFO BOX
        ========================= */

        .info-box {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 15px;
        }


        .box {
            background: #eff6ff;

            padding: 20px;

            border-radius: 12px;

            text-align: center;

            transition: 0.3s;
        }


        .box:hover {
            transform: translateY(-5px);

            box-shadow:
                0 8px 20px rgba(37, 99, 235, 0.15);
        }


        .box h3 {
            color: #2563eb;

            margin-bottom: 8px;
        }


        .box p {
            color: #555;
        }


        /* =========================
           BUTTON
        ========================= */

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

            box-shadow:
                0 5px 15px rgba(37, 99, 235, 0.3);
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            width: 100%;

            margin-top: 40px;

            background: #0f172a;

            color: #94a3b8;

            text-align: center;

            padding: 25px 20px;
        }


        footer p {
            font-size: 15px;

            line-height: 1.6;
        }


        footer strong {
            color: #60a5fa;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 600px) {

            .container {
                width: 95%;

                margin: 20px auto;
            }


            .content {
                padding: 25px;
            }


            .biodata {
                grid-template-columns: 1fr;

                gap: 5px;
            }


            .info-box {
                grid-template-columns: 1fr;
            }


            .header h1 {
                font-size: 25px;
            }


            .header p {
                font-size: 15px;
            }


            .profile {
                width: 110px;

                height: 110px;

                font-size: 38px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         CARD UTAMA
    ========================= -->

    <div class="container">

        <div class="card">


            <!-- HEADER -->

            <div class="header">

                <div class="profile">
                    RI
                </div>

                <h1>
                    Rizwan Fauziani Ilham
                </h1>

                <p>
                    Mahasiswa Universitas Pancasila
                </p>

            </div>


            <!-- CONTENT -->

            <div class="content">


                <!-- BIODATA -->

                <h2 class="section-title">
                    Biodata
                </h2>


                <div class="biodata">

                    <div class="label">
                        Nama
                    </div>

                    <div class="value">
                        Rizwan Fauziani Ilham
                    </div>


                    <div class="label">
                        NIM
                    </div>

                    <div class="value">
                        4524210094
                    </div>


                    <div class="label">
                        Universitas
                    </div>

                    <div class="value">
                        Universitas Pancasila
                    </div>


                    <div class="label">
                        Status
                    </div>

                    <div class="value">
                        Mahasiswa
                    </div>

                </div>


                <!-- TENTANG SAYA -->

                <h2 class="section-title">
                    Tentang Saya
                </h2>


                <p class="about">

                    Halo, saya
                    <strong>Rizwan Fauziani Ilham</strong>.

                    Saya merupakan mahasiswa Universitas Pancasila
                    dengan NIM <strong>4524210094</strong>.

                    Website ini dibuat menggunakan framework
                    Laravel sebagai bagian dari pembelajaran
                    pengembangan aplikasi berbasis web.

                </p>


                <!-- INFO BOX -->

                <div class="info-box">


                    <div class="box">

                        <h3>
                            NIM
                        </h3>

                        <p>
                            4524210094
                        </p>

                    </div>


                    <div class="box">

                        <h3>
                            Kampus
                        </h3>

                        <p>
                            Universitas Pancasila
                        </p>

                    </div>


                    <div class="box">

                        <h3>
                            Framework
                        </h3>

                        <p>
                            Laravel 12
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
            <!-- END CONTENT -->


        </div>
        <!-- END CARD -->


    </div>
    <!-- END CONTAINER -->


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <p>

            &copy; {{ date('Y') }}

            <strong>LaraPress</strong>.

            Dibuat oleh
            <strong>Rizwan Fauziani Ilham</strong>.

        </p>

    </footer>


</body>

</html>
