# Aplikasi CRUD Produk & Pelanggan — Praktikum Web 1

Aplikasi web berbasis **PHP Native** dan **MySQL/MariaDB** untuk mengelola data produk, kategori, pelanggan, dan jenis pelanggan dengan fitur lengkap **CRUD** (*Create, Read, Update, Delete*).

## Identitas
- **Nama:** Alvanza Fadillah
- **NIM:** 25012096
- **Kelas:** 25M11
- **Program Studi:** D3 Manajemen Informatika — Politeknik Ganesha Medan

## Fitur
- **CRUD Produk (`index.php`, `tambah.php`, `edit.php`, `hapus.php`):** Menampilkan daftar produk beserta kategorinya (`INNER JOIN`), menambah, mengubah, dan menghapus produk.
- **CRUD Pelanggan (`pelanggan.php`, `tambah_pelanggan.php`, `edit_pelanggan.php`, `hapus_pelanggan.php`):** Mengelola data pelanggan yang berelasi dengan jenis pelanggan (`INNER JOIN`).
- **CRUD Jenis Pelanggan (`jenis_pelanggan.php`, `tambah_jenis.php`, `edit_jenis.php`, `hapus_jenis.php`):** Mengelola kategori/jenis pelanggan (seperti Member dan Biasa).

## Struktur File
```text
├── koneksi.php           # Konfigurasi koneksi ke database MySQL
├── index.php             # Halaman utama (daftar produk)
├── tambah.php            # Form tambah produk
├── edit.php              # Form edit produk
├── hapus.php             # Proses hapus produk
├── pelanggan.php         # Daftar pelanggan
├── tambah_pelanggan.php  # Form tambah pelanggan
├── edit_pelanggan.php    # Form edit pelanggan
├── hapus_pelanggan.php   # Proses hapus pelanggan
├── jenis_pelanggan.php   # Daftar jenis pelanggan
├── tambah_jenis.php      # Form tambah jenis pelanggan
├── edit_jenis.php        # Form edit jenis pelanggan
├── hapus_jenis.php       # Proses hapus jenis pelanggan
├── praktikum.sql         # Struktur 4 tabel dan data awal database
└── README.md             # Dokumentasi proyek
