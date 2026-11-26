<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($judul) ?> | <?= e($nama_toko) ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <a class="brand" href="index.php"><?= e($nama_toko) ?></a>
  <nav>
    <a href="index.php">Beranda</a>
    <a href="produk.php">Produk</a>
    <a href="tentang.php">Tentang Kami</a>
    <a href="kontak.php">Kontak</a>
  </nav>
</header>
<main>
