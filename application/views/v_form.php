<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/form.css">
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('form/aksi'); ?>
	<form>
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<?php echo form_error('nama'); ?>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<?php echo form_error('email'); ?>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<?php echo form_error('konfir_email'); ?>
		<input class="button" type="submit" value="Simpan">
	</form>
</body>
</html>