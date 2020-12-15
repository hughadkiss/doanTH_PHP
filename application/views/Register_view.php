<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/register.css">
</head>
<body>
    <div class="container">
        <div class="container col-md-4 mt-5">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="getRegister" method="post">
                        Họ và tên: <input type="text" class="form-control rounded-pill" name="yourname" required>
                        Địa chỉ: <input type="text" class="form-control rounded-pill" name="address" required>
                        Email: <input type="email" class="form-control rounded-pill" name="email" required>
                        Số điện thoại: <input type="text" class="form-control rounded-pill" name="sdt" required>
                        Tên tài khoản: <input type="text" class="form-control rounded-pill" name="username" required>
                        Mật khẩu: <input type="password" class="form-control rounded-pill" name="password" required>
                        Nhập lại mật khẩu: <input type="password" class="form-control rounded-pill" name="confirm" required>
                        <div style="color: red; text-align: center; font-size: 20px;"><?= $this->session->flashdata('status'); ?></div>
                        <div style="color: red; text-align: center; font-size: 20px;"><?= $this->session->flashdata('error'); ?></div>
                        <input type="submit" class="btn btn-block btn-info rounded-pill" value="Đăng ký">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>