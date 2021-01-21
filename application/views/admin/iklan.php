<!DOCTYPE html>
<html>
<head>
	<title>iklan</title>
</head>
<body>

<a href="<?php echo base_url('iklan/tambahiklan') ?>">Tambah iklan</a>

 		<?php echo $this->session->flashdata('simpan'); ?>
	  <?php echo $this->session->flashdata('edit'); ?>
	  <?php echo $this->session->flashdata('hapus'); ?>
	  <?php echo $this->session->flashdata('gagal'); ?>

	<table border="1" cellpadding="10">
			<tr>
				<th>NO</th>
				<th>NAMA IKLAN</th>
				<th>NAMA PRODUK</th>
				<th>NAMA PENGIKLAN</th>
				<th>ALAMAT</th>
				<th>NO. PENGIKLAN</th>
				<th>FOTO PRODUK</th>
				<th>POSISI IKLAN</th>
				<th>AKSI</th>
			</tr>
			<?php $no=1;?>
			<?php foreach ($iklan as $key) {?>
			<tr style="border: 1px solid black">
				<td><?php echo $no++ ?></td>
				<td><?php echo  $key->namaDriver?></td>
				<td><?php echo  $key->namaProduk?></td>
				<td><?php echo  $key->namaPengiklan?></td>
				<td><?php echo  $key->type ?></td>
				<td><?php echo $key->noTelpon ?></td>
				<td><img width="234" height="123" src="<?php echo base_url('gambar/iklan/').$key->fotoKendaraan ?>"></td>
				<td><?php echo  $key->posisiIklan ?></td>
				<td><a href="<?php echo base_url('Iklan/editiklan/'.$key->idIklan) ?>">[EDIT]</a><a href="<?php echo base_url('iklan/deleteiklan/'.$key->idIklan) ?>"onclick="return confirm('Yakin Akan Hapus Data Ini ?')">[DELETE]</a></td> 
			</tr>
			<?php } ?>
		</table>
</body>
</html>