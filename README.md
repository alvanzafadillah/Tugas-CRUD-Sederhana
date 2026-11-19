# Aplikasi CRUD Produk — Praktikum Web 1 (Pertemuan 09)

Aplikasi web sederhana berbasis **PHP Native** dan **MySQL/MariaDB** untuk mengelola data produk dan kategori dengan fitur **CRUD** (*Create, Read, Update, Delete*).

## Identitas
- **Nama:** Alvanza Fadillah
- **NIM:** 25012096
- **Kelas:** 25M11
- **Program Studi:** D3 Manajemen Informatika — Politeknik Ganesha Medan

## Fitur
- **Read (`index.php`):** Menampilkan daftar produk beserta nama kategorinya menggunakan `INNER JOIN`.
- **Create (`tambah.php`):** Menambahkan produk baru dengan pilihan kategori dari tabel `kategori`.
- **Update (`edit.php`):** Mengubah data produk (nama, kategori, harga, dan stok).
- **Delete (`hapus.php`):** Menghapus data produk berdasarkan `id_produk`.

## Struktur File
```text
├── koneksi.php      # Konfigurasi koneksi ke database MySQL
├── index.php        # Halaman utama (menampilkan daftar produk)
├── tambah.php       # Form tambah produk baru
├── edit.php         # Form edit data produk
├── hapus.php        # Proses hapus data produk
├── praktikum.sql    # Struktur tabel dan data awal database
└── README.md        # Dokumentasi proyek
