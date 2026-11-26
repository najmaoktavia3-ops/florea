# Web Informasi Toko Bunga (PHP + MySQL)

1. Jalankan Apache dan MySQL di XAMPP/Laragon.
2. HAPUS folder florist lama di htdocs/www (jangan digabung dengan versi lama),
   lalu salin folder florist baru ini.
3. phpMyAdmin: hapus database db_florist yang lama (kalau ada), lalu Import `db_florist.sql`.
4. Buat akun admin: buka http://localhost/florist/admin/reset.php sekali
   (file ini otomatis terhapus setelah berhasil).
5. Pengunjung: http://localhost/florist/
   Admin: http://localhost/florist/admin/login.php  (admin / admin123)

Ganti nama toko, nomor WhatsApp, alamat, dan jam buka di `koneksi.php`.
