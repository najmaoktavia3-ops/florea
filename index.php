<?php
$judul = 'Beranda';
include 'header.php';
$unggulan = $conn->query("SELECT * FROM produk WHERE unggulan = 1 ORDER BY id_produk DESC LIMIT 4");
?>
<section class="hero">
  <h1>Rangkaian Bunga Segar untuk Setiap Momen Berharga</h1>
  <p>Temukan pilihan buket cantik, bunga meja, hingga bunga papan berkualitas. Konsultasi dan pesan praktis langsung lewat WhatsApp.</p>
  <a class="btn" href="produk.php">Lihat produk</a>
</section>

<section>
  <h2>Produk unggulan</h2>
  <div class="grid">
    <?php while ($p = $unggulan->fetch_assoc()): ?>
      <div class="card">
        <?= foto($p['gambar']) ?>
        <h3><?= e($p['nama_produk']) ?></h3>
        <p class="harga"><?= rupiah($p['harga']) ?></p>
        <a class="btn" href="<?= wa($p['nama_produk']) ?>" target="_blank">Pesan</a>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php include 'footer.php'; ?>
