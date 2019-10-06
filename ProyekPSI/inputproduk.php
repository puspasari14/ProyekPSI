<?php include_once ('hdatas_pemilik.php'); ?>
<div class="halaman">
  <h3><center> ======== FORM INPUT PRODUK  ========</center></h3>



<form action="produksimpan.php" method="post" enctype="multipart/form-data">
<div class="table-responsive">  
<table class="table">
<thead>
	<tr>
		<td>kode</td>
		<td><input type="text" name="kode" /></td>
	</tr>
</thead>
<thead>
	<tr>
		<td>Jenis</td>
		<td><textarea name="jenis" rows="5" cols="19"></textarea></td>
	</tr>
	</thead>
	<tr>
	<thead>
		<td>Ukuran</td>
		<td><input type="radio" name="ukuran" value="S"';if($_POST['ukuran']=='S'){echo "checked";} />S
		<input type="radio" name="ukuran" value="M"';if($_POST['ukuran']=='M'){echo "checked";} />M
		<input type="radio" name="ukuran" value="L"';if($_POST['ukuran']=='L'){echo "checked";} />L
		<input type="radio" name="ukuran" value="XL"';if($_POST['ukuran']=='xl'){echo "checked";} />XL
		<input type="radio" name="ukuran" value="XXL"';if($_POST['ukuran']=='XXL'){echo "checked";} />XXL</td>
	</tr>
	</thead>
	<thead>
	<tr>
		<td>Harga Beli</td>
		<td><input type="text" name="harga" /></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td><input type="text" name="harga_beli" /></td>
	</tr>
	</thead>
	<thead>
	<tr>
		<td>Jumlah</td>
		<td><input type="text" name="jumlah_produk" /></td>
	</tr>
	</thead>
	<thead>
	<tr>
		<td>Gambar [max=1.5MB]</td>
		<td><input type="file" name="foto" /></td>
	</tr>
	</thead>
	<thead>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Simpan" name="Proses" />
			<input type="reset" value="Reset" name="reset" />
		</td>
	</tr>
	</thead>
</table>
</div>
</form>
<?php include_once ('template_bawah.php'); ?>