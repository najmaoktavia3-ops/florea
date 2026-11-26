<?php
session_start();


$nama_toko = 'FLOREA';
$no_wa     = '6285183311724';
$alamat    = 'Jl. Kamboja 1 Blok AX-8, Kota Bekasi';
$jam_buka  = 'Senin - Jumat, 08.00 - 17.00';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli('localhost', 'root', '', 'db_florist');

function e($teks) { return htmlspecialchars((string)$teks); }
function rupiah($n) { return 'Rp ' . number_format($n, 0, ',', '.'); }
function wa($produk = '') {
    global $no_wa;
    return 'https://wa.me/' . $no_wa . '?text=' . urlencode('Halo, saya mau pesan ' . $produk);
}
function foto($gambar, $prefix = '') {
    return $gambar ? "<img src='{$prefix}uploads/" . e($gambar) . "' alt=''>" : "<div class='kosong'>Belum ada foto</div>";
}
