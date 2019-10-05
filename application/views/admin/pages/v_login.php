<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
</head>
<body>
	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('wrong_login') ?>"></div>
	<h1>TEST LOGIN FORM </h1>
	<form action="<?php echo base_url('syslogin/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
<script src="<?=base_url();?>dashboard/assets/swal/sweetalert2.all.min.js"></script>	
<!-- JAVASCRIPT FILES -->

<script type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>dashboard/assets/js/view/demo.revolution_slider.js"></script>
<script type="">
	
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			title: 'Gagal Login',
			text : '' + flashData,
			type : 'warning'
		})
	}
</script>
	
</body>

</html>



