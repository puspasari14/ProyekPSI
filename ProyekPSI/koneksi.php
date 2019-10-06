<?php
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
			id int(11) not null auto_increment primary key,
			kode varchar(5) not null,
			jenis varchar(30) not null,
			ukuran char(3) not null,
			harga decimal(22,0) ,
			harga_beli decimal(22,0) ,
			jumlah int not null ,
			foto varchar(1000) not null default '',
			KEY(idproduk) )";
mysqli_query($kon, $sqltableproduk) or die("Gagal Buat Tabel Produk");


// echo "Tabel Siap <hr/>";
?>