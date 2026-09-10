# 🕌 Sistem Informasi Masjid (SIMasjid)

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

Sistem Informasi Manajemen Masjid (SIMasjid) adalah platform web yang dibangun menggunakan **Laravel 12** dan **Tailwind CSS**. Sistem ini dirancang untuk memudahkan pengurus masjid dalam mempublikasikan informasi, mengelola kas keuangan secara transparan, serta mencatat berbagai kegiatan dan program masjid agar mudah diakses oleh jamaah.

## ✨ Fitur Utama

### 🧑‍💻 Halaman Publik (Landing Page)
- **Beranda (Hero Section):** Menampilkan profil utama masjid dengan UI yang modern dan responsif.
- **Jadwal Sholat:** Informasi waktu sholat yang bersih dan intuitif.
- **Program Pembangunan:** Etalase program fisik masjid (status Berjalan / Selesai).
- **Pengumuman & Kajian:** Daftar kegiatan majelis ilmu dan informasi jamaah terbaru.
- **Laporan Keuangan Publik:** Menampilkan total saldo akhir kas masjid secara transparan secara langsung dari database.
- **Integrasi Peta & Kontak:** Tautan langsung ke Google Maps dan nomor kontak pengurus.
- **Responsif Penuh:** Tampilan menyesuaikan sempurna di Desktop, Tablet, dan Smartphone.

### 🔒 Panel Admin (CMS)
- **Dashboard Interaktif:** Menampilkan metrik utama (Total Pemasukan, Pengeluaran, Saldo) serta grafik visual pergerakan arus kas harian/mingguan/tahunan menggunakan *Chart.js*.
- **Manajemen Artikel/Kajian:** Tambah, edit, dan hapus berita kajian dengan dukungan unggah gambar.
- **Manajemen Program:** Kelola program pembangunan lengkap dengan status dan deskripsi.
- **Manajemen Keuangan:** 
  - Catat arus kas (Pemasukan & Pengeluaran).
  - Fitur *Import* data keuangan masal dari file CSV.
  - Pengurutan (Sorting) data dan pencarian dinamis.
- **Log Aktivitas Sistem (Audit Trail):** Melacak seluruh jejak aktivitas penting di panel admin (Login, Tambah, Edit, Hapus) beserta informasi Alamat IP dan *User Agent* untuk menjaga integritas sistem.
- **Notifikasi Pop-up Halus:** Menggunakan integrasi **SweetAlert2** untuk memberikan peringatan dan konfirmasi penghapusan data dengan tampilan yang modern (menggantikan alert bawaan browser).

---

## 🚀 Panduan Instalasi (Lokal)

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di perangkat Anda.

### 1. Persyaratan Sistem
Pastikan sistem Anda telah terinstal:
- **PHP** (Minimal versi 8.2)
- **Composer**
- **Node.js** & **NPM**
- **MySQL** / MariaDB

### 2. Kloning Repositori
```bash
git clone https://github.com/USERNAME_ANDA/nama-repo-anda.git
cd nama-repo-anda
```

### 3. Instalasi Dependensi
Jalankan perintah berikut untuk mengunduh semua paket:
```bash
composer install
npm install
```

### 4. Konfigurasi Environment (.env)
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Buka `.env` dan atur koneksi *database* sesuai dengan lokal Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=masjid_muer
DB_USERNAME=root
DB_PASSWORD=
```
Lalu buat/generate *application key*:
```bash
php artisan key:generate
```

### 5. Migrasi & Seeding Database
Jalankan perintah migrasi untuk membangun skema database:
```bash
php artisan migrate --seed
```

### 6. Storage Link
Agar gambar yang di-upload dari Panel Admin (seperti Thumbnail Artikel & Program) dapat diakses publik:
```bash
php artisan storage:link
```

### 7. Kompilasi Aset Frontend (Tailwind CSS)
```bash
npm run dev
```

### 8. Jalankan Server
Buka terminal baru dan jalankan web server lokal Laravel:
```bash
php artisan serve
```
Kunjungi **`http://localhost:8000`** di browser Anda. Akses panel admin di **`http://localhost:8000/login`**.

---

## 🔧 Konfigurasi Identitas Masjid (Sentral)

Semua profil dan identitas masjid dipusatkan ke dalam satu file konfigurasi.
Buka dan edit file: **`config/masjid.php`**. 
Di dalamnya Anda dapat mengubah **Nama Masjid**, **Alamat**, **Link Media Sosial**, hingga **Nomor Rekening Donasi (ZISWAF)** tanpa perlu mencari dan membongkar kode di halaman HTML secara manual.

---

<p align="center">
  Dibuat untuk kemaslahatan umat. Semoga bermanfaat! 🕌
</p>
