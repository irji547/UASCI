<?php echo form_open('produk/save')  ?>
<?php echo $judul ?>

<table width="330" border="1">
	<tr>
		<td>ID</td>
		<td><input type="text" name="id" id="id"></td>
	</tr>
	<tr>
		<td>Kode Produk</td>
		<td><input type="text" name="kode_produk" id="kode_produk"></td>
	</tr>
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="nama_produk" id="nama_produk"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" id="harga"></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" name="stok" id="stok"></td>
	</tr>

	<?php foreach ($tampil as $key ->$value) {?>

		<tr>
			<td><?php echo $value->id ?></td>
			<td><?php echo $value->kode_produk ?></td>
			<td><?php echo $value->nama_produk ?></td>
			<td><?php echo $value->harga ?></td>
			<td><?php echo $value->stok ?></td>
			<td><?php echo anchor('produk/delete/'.$value->kode_produk,'Hapus');?></td>
		</tr>

	<?php } ?>
</table>