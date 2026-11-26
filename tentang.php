<?php
$judul = 'Tentang Kami';
include 'header.php';
?>
<section class="teks">
  <h1>Tentang Kami</h1>
  <p><?= e($nama_toko) ?> adalah toko bunga yang menerima pesanan buket, bunga papan, dan rangkaian bunga meja untuk berbagai keperluan, baik hadiah pribadi, acara keluarga, maupun kebutuhan kantor dan usaha.</p>
  <p>Toko ini dimulai dari usaha kecil yang menerima pesanan dari kerabat dan teman. Seiring waktu, pesanan datang dari pelanggan yang direkomendasikan oleh pelanggan sebelumnya, dan sekarang kami melayani pemesanan setiap hari.</p>

  <h2>Produk kami</h2>
  <p>Kami menyediakan tiga kategori produk. Buket tersedia dalam berbagai ukuran dengan pilihan mawar, tulip, gerbera, dan bunga campuran. Bunga papan tersedia untuk ucapan selamat, pembukaan usaha, dan ucapan duka cita. Rangkaian bunga meja cocok untuk ruang tamu atau ruang kerja.</p>

  <h2>Pesanan khusus</h2>
  <p>Pelanggan dapat memesan rangkaian di luar katalog. Warna bunga, ukuran, jenis bunga, dan isi kartu ucapan dapat disesuaikan. Sampaikan kebutuhan dan anggaran Anda melalui WhatsApp, lalu kami akan mengusulkan rangkaian yang sesuai.</p>

  <h2>Cara pemesanan</h2>
  <p>Pilih produk pada halaman Produk, lalu hubungi kami melalui tombol Pesan. Kami akan mengonfirmasi ketersediaan, harga akhir, dan alamat pengiriman. Pesanan dirangkai setelah pembayaran diterima, lalu dikirim sesuai jadwal yang disepakati.</p>

  <h2>Lokasi</h2>
  <p>Toko kami berada di <?= e($alamat) ?> dan buka <?= e($jam_buka) ?>.</p>
</section>
<?php include 'footer.php'; ?>
