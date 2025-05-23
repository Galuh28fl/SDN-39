# 🌐 Webku - Laravel Website

Ini adalah website yang dibangun menggunakan [Laravel](https://laravel.com/) framework. Kamu bebas mengunduh, mempelajari, dan mengembangkan proyek ini.

## 🚀 Fitur
- Admin Menggunakan Laravel Filament
- Manajemen konten
- Sistem CRUD lengkap
- Responsive layout

## 🛠️ Instalasi
Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di lokal:

### 1. Clone repository
```bash
git clone git@github.com:ashi-ihsa/WebsiteProfile-SDN39.git
cd WebsiteProfile-SDN39
```
### 2. Install Dependecy
```bash
composer install
```
[Tutorial Download Composer](https://www.youtube.com/watch?v=nus8eLPNZF8)
### 3. Buat file Konfigurasi .env
```bash
cp .env.example .env
```
Lalu sesuaikan pengaturan database dan lainnya di dalam file .env
```bash
DB_DATABASE=namadbmu
DB_USERNAME=root
DB_PASSWORD=
```
### 4. Generate Application key
```bash
php artisan key:generate
```
### 5. Jalankan Database
```bash
php artisan migrate
```
### 6. Membuat Akun Admin
```bash
php artisan make:filament-user
```
Kemudian masukkan Nama, Email, dan Password
### 7. Ngelink folder Public ke Storage
```bash
php artisan storage:link
```
Kemudian masukkan Nama, Email, dan Password
### 8. Jalankan Server
```bash
php artisan serve
```

# 👩‍💻 Panduan Mengedit Tampilan Website untuk Galuh

Halo Galuh! Kalau kamu ingin mengubah tampilan website ini, yuk ikuti panduan singkat berikut agar kamu tahu alur dan file mana saja yang harus dilihat dan diubah.

---

## 1. 📂 Masuk ke Folder `resources/views`
Semua tampilan (view) website disimpan di folder ini. Di sinilah kamu akan mengedit tampilan halaman seperti **index**, **about**, **class**, dan lainnya.

---

## 2. 🧱 Struktur Dasar: `layouts/app.blade.php`

File `app.blade.php` di dalam folder `layouts` adalah **kerangka dasar** yang berisi:

- CSS dan JS (yang diambil dari folder `public/`)
- `@include` untuk navbar dan footer
- `@yield('content')` untuk isi halaman

---

### 🔗 Menambahkan CSS dan JS

Letakkan file CSS atau JS ke folder `public`, misalnya:
```
public/css/custom.css
public/js/custom.js
```

Lalu panggil dengan:

```blade
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<script src="{{ asset('js/custom.js') }}"></script>
```

---

## 3. 🖼️ Menambahkan Gambar

Kalau ingin menampilkan gambar (hardcoded), simpan di folder `public`, contohnya:

```
public/images/foto1.jpg
```

Kemudian akses dengan:

```blade
<img src="{{ asset('images/foto1.jpg') }}" alt="Foto">
```

---

## 4. 🔁 Komponen yang Diulang

Bagian yang sering dipakai seperti **navbar** dan **footer** ada di folder:

```
resources/views/partials
```

Sudah di-include di `layouts/app.blade.php`:

```blade
@include('partials.navbar')
@include('partials.footer')
```

Kalau mau mengeditnya, cukup buka file di folder tersebut.

---

## 5. 🛣️ Routing Laravel

Semua rute website ada di file berikut:

```
routes/web.php
```

Contoh isi routing:

```php
Route::get('/about', [PageController::class, 'about'])->name('about');
```

Untuk membuat tautan ke route tersebut:

```blade
<a href="{{ route('about') }}">Tentang Kami</a>
```

---

## 6. 🧩 Mengedit Konten Halaman

Gunakan struktur berikut untuk setiap halaman:

```blade
@extends('layouts.app')

@section('content')
  <!-- Di sinilah Galuh bisa menaruh div, teks, gambar, dll -->
@endsection
```

> Catatan: `layouts.app` artinya `layouts/app.blade.php`, jadi nggak perlu ditulis `.blade.php`-nya.

---

## 📌 Ringkasan

| Aksi                         | File / Lokasi                                     |
|-----------------------------|---------------------------------------------------|
| Ubah konten halaman         | `resources/views/[nama_halaman].blade.php`       |
| Tambah CSS/JS               | `public/css`, `public/js`, lalu `{{ asset() }}`  |
| Tambah gambar               | `public/images`, lalu `{{ asset() }}`            |
| Edit navbar/footer          | `resources/views/partials/`                      |
| Lihat atau ubah routing     | `routes/web.php`                                 |
| Ubah template utama         | `resources/views/layouts/app.blade.php`          |

---

Semoga panduan ini membantu Galuh untuk mengedit dan memahami struktur tampilan website Laravel ini ya! 😄
One Hundred Forty Three