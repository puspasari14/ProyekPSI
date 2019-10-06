<?php
include "controler/connect.php";
$sqltablecustomer ="create table if not exists customer (
		id_customer int(5) not null primary key ,
		nama varchar(30) not null,
		email varchar(30) not null,
		alamat text not null,
		KEY(id_customer) )";
mysqli_query($kon, $sqltablecustomer) or die("Gagal Buat Tabel Customer");

if(isset($_POST['id_customer'])){
	$id_customer=$_POST['id_customer'];
	$email_lama=$_POST['email_lama'];

	
	$simpan="EDIT";
	}
else{
	$simpan="BARU";
	}
	//$id_customer=$_POST['id_customer'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	
	$dataValid="YA";
	
	if(strlen(trim($nama))==0){
		$dataValid="TIDAK";
		echo "nama customer harus diisi! <br/>";
	}
	if(strlen(trim($email))==0){
		$dataValid="TIDAK";
		echo "email harus diisi! <br/>";
	}
	if(strlen(trim($alamat))==0){
		$dataValid="TIDAK";
		echo "alamat harus diisi! <br/>";
	}
	
	if($dataValid=="TIDAK"){
		echo "Masih Ada Kesalahan <br/>";
		echo "<input type='button' value='ulangi mengisi'
			onClick='self.history.back()'>";
		exit();
	}
	
	
	
	if($simpan == "EDIT"){
	
		if($size==0){
			$email=$email_lama;
		}
		$sql="update customer set
			  nama='$nama',
			  email='$email',
			  alamat='$alamat',
			  where id_customer='$id_customer'";
	}
	else{
		$sql="insert into customer
			(nama , email, alamat)
			values
			('$nama','$email', '$alamat') ";
	}
	
	
	$hasil=mysqli_query($kon, $sql);
	
	if(!$hasil){
		echo "Gagal Simpan, silahkan diulangi! <br/>";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value='Kembali'
		onClick='self.history.back()'>";
		exit();
	}else{
		echo "Simpan data berhasil";
	}

	
?>
<div class="halaman">
  <h3>.:: INPUT DATA CUSTOMER ::.</h3>
</div>
<hr/>
<a href="pembelian.php" />DATA CUSTOMER</a>