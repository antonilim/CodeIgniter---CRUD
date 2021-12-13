<!DOCTYPE html>
<html>
<head>
	<title>WOW Property</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/rumah.css">
</head>
<body>
	<center><h1>Daftar Rumah</h1></center>
	<!-- <center><?php echo anchor('crud/tambah','Tambah Data'); ?></center> -->
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
			<?php
			$no = 1;
			foreach($user as $u){
			?>
		<tr>
			<td class="nomor"><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<!-- <td>
				 <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				 <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td> -->
		</tr>
		<?php } ?>
	</table>
</body>
</html>