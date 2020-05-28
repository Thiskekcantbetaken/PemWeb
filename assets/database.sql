DROP DATABASE IF EXISTS shop;
CREATE DATABASE shop;
USE shop;

CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT UNIQUE,
  first_name VARCHAR(25) NOT NULL,
  last_name VARCHAR(25) NOT NULL,
  username VARCHAR(100) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
	country VARCHAR(255) NOT NULL,
	city VARCHAR(255) NOT NULL,
	contact VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
  birthdate DATE NOT NULL,
  gender VARCHAR(2) NOT NULL,
	imagename TEXT (255) NOT NULL,
	ukuran_file DOUBLE NOT NULL,
	tipe_file VARCHAR (20) NOT NULL,
  privilege_level INT NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE admin (
  id_admin INT NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR (255) NOT NULL,
  PRIMARY KEY (id_admin)
);

CREATE TABLE barang (
  id_barang INT NOT NULL , 
  nama_barang VARCHAR(255) NOT NULL,
  harga_barang INT NOT NULL,
  stok INT NOT NULL,
  jumlah_terjual INT , 
  foto VARCHAR (255),
  PRIMARY KEY (id_barang) 
);

CREATE TABLE transaksi (
  waktu DATE , 
  id_transaksi INT NOT NULL,
  id INT NOT NULL , 
  status INT NOT NULL,
  PRIMARY KEY (id_transaksi),
  FOREIGN KEY (id) references users (id)
);

CREATE TABLE transaksi_detail (
  id_barang INT NOT NULL ,
  id_transaksi INT NOT NULL,
  jumlah INT NOT NULL,
  FOREIGN KEY (id_barang) REFERENCES barang (id_barang),
  FOREIGN KEY (id_transaksi) REFERENCES transaksi (id_transaksi) 
);

INSERT INTO users VALUES
(1, 'Test', 'Ting', 'coba', 'test@gmail.com', '$2y$10$y3e6GkIMkFXg3/Pk.hnzVuai9Supasyjv9lel/twyB9yRZagZUEnG','Indonesia','Jakarta','0812122313','JakartaBarat no 31', '2000-01-01', 'M','avenger.png','1.340.464','png', 2);
