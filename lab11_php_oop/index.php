<?php
// index.php utama
include "config.php";
include "class/database.php"; // Pakai huruf kecil
include "class/form.php";     // Pakai huruf kecil

$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/home/index';
$segments = explode('/', trim($path, '/'));

$mod = (isset($segments[0]) && $segments[0] != '') ? $segments[0] : 'home';
$page = (isset($segments[1]) && $segments[1] != '') ? $segments[1] : 'index';

// Cek apakah file benar-benar ada di folder module
$file = "module/{$mod}/{$page}.php";

include "template/header.php";

if (file_exists($file)) {
    include $file;
} else {
    // Pesan ini muncul kalau path file-nya salah hitung
    echo "<div class='alert alert-danger m-3'>Halaman <b>module/{$mod}/{$page}.php</b> tidak ditemukan!</div>";
}

include "template/footer.php";
?>