<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="container col-md-4 mt-5">
			<div class="card">
				<div class="card-header">Login</div>
				<div class="card-body">
					<div class="notice" style="color: red"><?php echo $this->session->flashdata('notice');?></div>
					<div class="notice" style="color: red"><?php echo $this->session->flashdata('dangnhap');?></div>
					<form action="getLogin" method="post">
						Username: <input type="text" class="form-control rounded-pill" name="username" required>
						Password: <input type="password" class="form-control rounded-pill" name="password" required>
						<input type="checkbox" value="remember">Remember <br>
						<div style="color: red; text-align: center; font-size: 20px;"><?= $this->session->flashdata('error'); ?></div>
						<input type="submit" class="btn btn-block btn-info rounded-pill" value="Đăng nhập">
					</form>

				</div>
			</div>
		</div>
	</div>
</body>
</html>