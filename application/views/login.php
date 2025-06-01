<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="mx-auto" style="width:330px; margin-top: 150px;">
<div class="card">
  <div class="card-header" align="center">
    Login Admin
  </div>
  <div class="card-body">
  <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
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
				<td><input class="btn btn-primary" type="submit" value="Login">
				<a class="btn btn-warning" href="<?php echo base_url(). 'himatif/index'?>">Menu Utama</a></td>
			</tr>
		</table>
	</form>
	</div>
</div>
</div>
</body>
</html>