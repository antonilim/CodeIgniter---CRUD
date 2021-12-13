<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload File</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/form.css">
</head>
<body>
	<center><h1>Membuat Upload File Dengan CodeIgniter</h1></center>
	<?php echo $error;?>
	<?php echo form_open_multipart('upload/aksi_upload');?>
	<form>
		<input type="file" name="berkas" />
		<br /><br />
		<input class="button" type="submit" value="Upload" />
	</form>
</body>
</html>