<?php
$host = "localhost";
$user = "root";      // Default user XAMPP
$pass = "";          // Default password XAMPP (kosong)
$db   = "praktikum"; // Sesuaikan dengan nama database yang kamu buat di phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
    }
    ?>
    