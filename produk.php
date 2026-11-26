<?php
$judul = 'Produk';
include 'header.php';

$kategori = $conn->query("SELECT * FROM kategori");
$id_kat = (int)($_GET['kategori'] ?? 0);

if ($id_kat > 0) {
    $stmt = $conn->prepare("SELECT * FROM produk WHERE id_kategori = ?");
    $stmt->bind_param('i', $id_kat);
    $stmt->execute();
    $produk = $stmt->get_result();
} else {
    $produk = $conn->query("SELECT * FROM produk");
}
?>
<section>
  <h1>Produk</h1>
  <p class="filter">
    <a href="produk.php">Semua</a>
    <?php while ($k = $kategori->fetch_assoc()): ?>
      <a href="produk.php?kategori=<?= $k['id_kategori'] ?>"><?= e($k['nama_kategori']) ?></a>
    <?php endwhile; ?>
  </p>
  <div class="grid">
    <?php while ($p = $produk->fetch_assoc()): ?>
      <div class="card">
        <?= foto($p['gambar']) ?>
        <h3><?= e($p['nama_produk']) ?></h3>
        <p><?= e($p['deskripsi']) ?></p>
        <p class="harga"><?= rupiah($p['harga']) ?></p>
        <a class="btn" href="<?= wa($p['nama_produk']) ?>" target="_blank">Pesan</a>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php include 'footer.php'; ?>
