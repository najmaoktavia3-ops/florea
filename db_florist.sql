CREATE DATABASE IF NOT EXISTS db_florist CHARACTER SET utf8mb4;
USE db_florist;

CREATE TABLE admin (
  id_admin INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE kategori (
  id_kategori INT AUTO_INCREMENT PRIMARY KEY,
  nama_kategori VARCHAR(50) NOT NULL
);

CREATE TABLE produk (
  id_produk INT AUTO_INCREMENT PRIMARY KEY,
  id_kategori INT NOT NULL,
  nama_produk VARCHAR(100) NOT NULL,
  deskripsi TEXT,
  harga INT NOT NULL,
  gambar VARCHAR(255),
  unggulan TINYINT(1) DEFAULT 0,
  FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori)
);

CREATE TABLE pesan (
  id_pesan INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  isi_pesan TEXT NOT NULL,
  tanggal DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO kategori (nama_kategori) VALUES ('Buket'), ('Bunga Papan'), ('Bunga Meja');

INSERT INTO produk (id_kategori, nama_produk, deskripsi, harga, unggulan) VALUES
(1, 'Buket Mawar Merah', 'Dua belas tangkai mawar merah segar dengan baby breath.', 250000, 1),
(1, 'Buket Tulip Mix', 'Tulip warna-warni dengan pembungkus pastel.', 320000, 1),
(2, 'Papan Congratulations', 'Bunga papan ucapan selamat ukuran 2 meter.', 650000, 0),
(3, 'Blush Whisper', 'Bunga segar dalam vas kaca.', 180000, 1);
