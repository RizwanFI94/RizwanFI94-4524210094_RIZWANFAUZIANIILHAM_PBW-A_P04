# 📘 Laporan Praktikum Pertemuan Ke-4

🧑‍🎓 **Rizwan Fauziani Ilham - 4524210094**

# 🌐 LaraPress — Website Berbasis Laravel

LaraPress merupakan aplikasi website yang dibuat menggunakan Laravel sebagai bagian dari praktikum Pemrograman Berbasis Web. Aplikasi ini memiliki beberapa halaman informasi, seperti Home, About, Biodata, dan Kontak. Selain itu, terdapat fitur autentikasi pengguna, Dashboard, pengaturan profil, serta pengelolaan postingan setelah pengguna login.

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Blade-Template-F05340?style=for-the-badge&logo=laravel&logoColor=white" alt="Blade">
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

## 📋 Daftar Isi

- [Tentang Aplikasi](#-tentang-aplikasi)
- [Fitur Utama](#-fitur-utama)
- [Tech Stack](#-tech-stack)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Penggunaan](#-penggunaan)
- [Struktur Database](#-struktur-database)
- [Struktur Project](#-struktur-project)
- [Pengembangan](#-pengembangan)
- [Lisensi](#-lisensi)

## 🎯 Tentang Aplikasi

LaraPress adalah project website yang dikembangkan untuk mempelajari penggunaan framework Laravel dalam pembuatan aplikasi web. Melalui project ini, mahasiswa dapat memahami cara kerja routing, controller, Blade template, autentikasi pengguna, serta pengelolaan data menggunakan database.

Website ini juga menerapkan sistem login dan registrasi sehingga pengguna dapat mengakses Dashboard serta fitur tertentu yang hanya tersedia setelah login.

## ✨ Fitur Utama

- 🏠 **Halaman Home** — Halaman utama website.
- 📄 **Halaman About** — Menampilkan informasi mengenai website.
- 🧑 **Halaman Biodata** — Menampilkan informasi biodata.
- 📞 **Halaman Kontak** — Menampilkan informasi kontak.
- 🔐 **Login dan Register** — Memungkinkan pengguna masuk dan membuat akun.
- 📊 **Dashboard** — Halaman yang dapat diakses setelah pengguna login dan memenuhi ketentuan autentikasi.
- 👤 **Pengaturan Profil** — Memperbarui informasi profil dan password serta menghapus akun.
- 📝 **Pengelolaan Postingan** — Menyediakan fitur membuat, mengubah, dan menghapus postingan melalui halaman yang memerlukan autentikasi.
- 🛡️ **Middleware Authentication** — Membatasi akses ke halaman tertentu agar hanya pengguna yang sudah login yang dapat mengaksesnya.
- 📱 **Tampilan Responsif** — Menggunakan Blade dan Tailwind CSS untuk membangun antarmuka website.

## 🛠️ Tech Stack

### Backend

- **Laravel 12** — Framework PHP untuk pengembangan aplikasi web.
- **PHP 8.2** — Bahasa pemrograman utama.
- **Eloquent ORM** — Mempermudah interaksi dengan database.

### Frontend

- **Blade Template** — Menampilkan halaman website menggunakan template Laravel.
- **Tailwind CSS** — Membantu mengatur desain dan tampilan antarmuka.
- **JavaScript** — Mendukung interaksi pada sisi frontend.
- **Vite** — Mengelola proses pengembangan dan build aset frontend.

### Database

- **MySQL** — Database yang dikonfigurasi pada file `.env.example`.
- **Laravel Migrations** — Mengelola struktur tabel database.

### Development Tools

- **Composer** — Mengelola dependensi PHP.
- **NPM** — Mengelola dependensi frontend.
- **Laravel Breeze** — Menyediakan dasar fitur autentikasi pengguna.
- **Git dan GitHub** — Mengelola versi kode dan menyimpan repository project.

## 💻 Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan perangkat sudah memiliki:

- PHP versi 8.2 atau lebih baru yang sesuai dengan kebutuhan Laravel.
- Composer.
- Node.js dan NPM.
- Database SQLite atau database lain yang dikonfigurasi dengan benar.
- Web browser seperti Google Chrome, Firefox, atau Microsoft Edge.

## 🚀 Instalasi

### 1. Clone Repository

Jalankan perintah berikut di terminal:

```bash
git clone https://github.com/RizwanFI94/RizwanFI94-4524210094_RIZWANFAUZIANIILHAM_PBW-A_P04.git

cd RizwanFI94-4524210094_RIZWANFAUZIANIILHAM_PBW-A_P04/LaraPress
```

### 2. Install Dependencies

Install dependensi PHP dan frontend:

```bash
composer install
npm install
```

### 3. Setup Environment

Salin file konfigurasi environment:

```bash
cp .env.example .env
```

Buat application key Laravel:

```bash
php artisan key:generate
```

**Catatan:** Pada Windows, perintah `cp` dapat diganti dengan `copy .env.example .env` jika menggunakan Command Prompt.

### 4. Setup Database

Project menggunakan SQLite pada konfigurasi `.env.example`.

Pastikan file database tersedia. Jika belum ada, buat file kosong bernama `database.sqlite` di dalam folder `database`.

Kemudian jalankan migrasi:

```bash
php artisan migrate
```

Jika ingin menggunakan MySQL, ubah konfigurasi database pada file `.env` sesuai nama database, username, dan password MySQL yang digunakan.

### 5. Build Assets

Untuk menjalankan frontend selama proses pengembangan:

```bash
npm run dev
```

Jika ingin membuat hasil build untuk penggunaan produksi:

```bash
npm run build
```

### 6. Jalankan Aplikasi

Buka terminal dan jalankan:

```bash
php artisan serve
```

Buka browser dan akses alamat berikut:

**http://127.0.0.1:8000**

Jika menggunakan `npm run dev`, biarkan terminal tersebut tetap berjalan agar aset frontend dapat diproses selama pengembangan.

## 📖 Penggunaan

Setelah aplikasi berhasil dijalankan, pengguna dapat mencoba fitur-fitur berikut:

1. Buka halaman utama website.
2. Jelajahi halaman About, Biodata, dan Kontak.
3. Pilih menu Register untuk membuat akun baru.
4. Login menggunakan akun yang sudah terdaftar.
5. Masuk ke Dashboard setelah berhasil login.
6. Buka halaman profil untuk mengubah informasi akun.
7. Coba fitur pengelolaan postingan yang tersedia setelah login.

Beberapa halaman memiliki aturan akses tertentu. Jika pengguna belum login, pengguna perlu masuk terlebih dahulu untuk mengakses halaman yang dilindungi oleh middleware autentikasi.

## 🗄️ Struktur Database

Project ini menggunakan sistem database Laravel untuk menyimpan data aplikasi.

Tabel utama yang disediakan melalui migration antara lain:

| Nama Tabel | Fungsi |
|---|---|
| `users` | Menyimpan data akun pengguna. |
| `password_reset_tokens` | Mendukung proses reset password. |
| `sessions` | Menyimpan data sesi pengguna jika menggunakan session database. |
| `cache` | Menyimpan data cache jika menggunakan cache database. |
| `jobs` | Mendukung pengelolaan antrean pekerjaan jika menggunakan queue database. |

Struktur tabel tambahan mengikuti migration yang tersedia pada folder `database/migrations`.

## 📁 Struktur Project

Berikut beberapa folder dan file penting pada LaraPress:

```text
LaraPress/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   ├── PostController.php
│   │   │   └── ProfileController.php
│   │   └── Requests/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── auth/
│       ├── components/
│       ├── layouts/
│       ├── posts/
│       ├── profile/
│       ├── about.blade.php
│       ├── biodata.blade.php
│       ├── kontak.blade.php
│       ├── dashboard.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── auth.php
│   └── web.php
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

## 🔧 Pengembangan

Project ini dapat dikembangkan lebih lanjut dengan menambahkan beberapa fitur, seperti:

- Menambahkan CRUD postingan secara lengkap.
- Menghubungkan website dengan MySQL.
- Menambahkan validasi form yang lebih lengkap.
- Memperbaiki tampilan agar lebih menarik dan responsif.
- Menambahkan fitur pencarian dan kategori postingan.
- Menambahkan pengujian untuk memastikan fitur berjalan dengan baik.

## Hasil Testing
Jika mengakses http://127.0.0.1:8000/posts/create Maka akan ke Menu Login
<img width="1920" height="1080" alt="image" src="https://github.com/RizwanFI94/RizwanFI94-4524210094_RIZWANFAUZIANIILHAM_PBW-A_P04/blob/29a193c9f7f0b4303fc964b4867c13aa541a7090/img/Hasil%20Testing.png" />

## 📜 Lisensi

Project ini dibuat untuk keperluan pembelajaran dan praktikum Pemrograman Berbasis Web.

---

<p align="center">
  Made with by Rizwan Fauziani Ilham
</p>
