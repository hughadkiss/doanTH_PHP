<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="container col-md-4 mt-5">
			<div class="card">
				<div class="card-header">Change Password</div>
				<div class="card-body">
					
					<form action="" method="post">
						Mật khẩu cũ: <input type="password" class="form-control rounded-pill" name="passold" required>
						Mật khẩu mới: <input type="password" class="form-control rounded-pill" name="passnew" required>
						Nhập lại mật khẩu mới: <input type="password" class="form-control rounded-pill" name="confirm" required>
						
						<input type="submit" class="btn btn-block btn-info rounded-pill" value="Đồng ý">
					</form>

				</div>
			</div>
		</div>
	</div>
</body>
</html>