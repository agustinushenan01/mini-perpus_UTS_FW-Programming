# Mini-Perpus: Sistem Manajemen Inventaris 📚

Proyek ini dibangun sebagai **Project-Based Assessment / Ujian Tengah Semester (UTS)** untuk mata kuliah **Framework Programming**, Program Studi S1 Teknik Informatika, Fakultas Teknik, Universitas Negeri Manado. Proyek ini mengimplementasikan arsitektur MVC, Eloquent ORM, dan Blade Template Engine menggunakan Framework Laravel.

---

## 👤 Identitas Mahasiswa
* **Nama:** Agustinus Henan
* **NIM:** 21210104
* **Kelas:** Framework Programming

---

## 🛠️ Teknologi & Fitur
* **Framework Backend:** Laravel (PHP)
* **Database:** MySQL (Eloquent ORM & Migrations)
* **Frontend:** Blade Template Engine & Bootstrap/Tailwind CSS via CDN
* **Fitur Utama:**
  * **Modul Kategori:** Manajemen CRUD data kategori dengan proteksi constraint/error saat menghapus kategori yang masih memiliki buku.
  * **Modul Buku:** Manajemen CRUD data buku dengan dropdown kategori dinamis serta relasi One-to-Many.
  * **Validasi Server-Side:** Pengamanan form di tingkat Controller dengan umpan balik pesan error interaktif (`@error`).

---

## 📐 Arsitektur Database & Relasi
Sistem ini menggunakan relasi **One-to-Many** antara tabel `categories` dan `books`:
* **Tabel `categories`:** `id` (PK), `name` (Unique, Max 100), `description` (Nullable), `timestamps`.
* **Tabel `books`:** `id` (PK), `category_id` (FK), `title` (Max 255), `author`, `published_year` (Numeric), `stock`, `timestamps`.

---

## 🚀 Langkah Instalasasi & Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Klon Repositori / Ekstrak Zip
```bash
git clone https://github.com
cd nama-folder-proyek
```

### 2. Instalasi Dependensi Composer
```bash
composer install
```

### 3. Konfigurasi Environment File
Salin file `.env.example` menjadi `.env` dan sesuaikan kredensial database Anda:
```bash
cp .env.example .env
```
Pengaturan database pada `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mini-perpus
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Jalankan Migration & Import Database Dump
Jalankan perintah migration bawaan Laravel untuk membuat struktur tabel:
```bash
php artisan migrate
```
*Catatan: Proyek ini juga menyediakan file database dump bawaan berupa `[nama_file].sql` yang terletak di root direktori untuk kemudahan pengujian.*

### 6. Jalankan Server Lokal
```bash
php artisan serve
```
Buka `http://127.0.0.1:8000` pada peramban web Anda.

---

## 🔗 Link Tautan Pengumpulan
* **Repositori Git:** [Masukkan Link GitHub/GitLab Anda di Sini]
* **Video Demonstrasi:** [Masukkan Link YouTube/Google Drive Anda di Sini] *(Durasi 3-5 menit menampilkan fungsionalitas CRUD penuh, tampilan relasi teks, dan trigger pesan error validasi).*
