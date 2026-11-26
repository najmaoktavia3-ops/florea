<?php
$judul = 'Kontak';
include 'header.php';
$notif = '';

if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO pesan (nama, email, isi_pesan) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $_POST['nama'], $_POST['email'], $_POST['isi_pesan']);
    $stmt->execute();
    $notif = 'Pesan terkirim. Terima kasih.';
}
?>
<section class="teks">
  <h1>Kontak</h1>
  <p>Alamat: <?= e($alamat) ?><br>
     Jam buka: <?= e($jam_buka) ?><br>
     WhatsApp: <a href="<?= wa() ?>" target="_blank">+<?= e($no_wa) ?></a></p>

  <h2>Kirim pesan</h2>
  <?php if ($notif): ?><p class="notif"><?= $notif ?></p><?php endif; ?>
  <form method="post">
    <label>Nama <input type="text" name="nama" required></label>
    <label>Email <input type="email" name="email" required></label>
    <label>Pesan <textarea name="isi_pesan" rows="5" required></textarea></label>
    <button class="btn" type="submit">Kirim</button>
  </form>
</section>
<?php include 'footer.php'; ?>
