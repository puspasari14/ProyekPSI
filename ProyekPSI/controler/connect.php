<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host	="localhost";
	$user	="root";
	$pass	="";
	$dbname	="fashion";

	$kon=mysqli_connect($host, $user, $pass);
	if(!$kon)
		die("Gagal Koneksi . . .");
	$hasil=mysqli_select_db($kon, $dbname);
	if(!$hasil){
		$hasil=mysqli_query($kon, "CREATE DATABASE $dbname");
		if(!$hasil)
			die("Gagal Buat Database");
		else
			$hasil=mysqli_select_db($kon, $dbname);
		if(!$hasil) die("Gagal konek Database");
	}
$sqltableproduk ="create table if not exists produk (
		kode varchar(5) not null primary key,
		jenis varchar(30) not null,
		ukuran char(3) not null,
		harga_beli decimal(22,0) ,
		jumlah int not null ,
		foto varchar(70) not null default '',
		KEY(kode) )";
mysqli_query($kon, $sqltableproduk) or die("Gagal Buat Tabel Produk");




?>