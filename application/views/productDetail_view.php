<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chi tiết sản phẩm</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href=" <?php echo base_url() ?>vendor/css/reponsive.css">
	<link rel="stylesheet" href=" <?php echo base_url() ?>vendor/css/productDetail.css">
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/js/detail_img.js"></script>

</head>
<body>
	<header>
		
	</header>
	<div class="container">
		<div class="box_product">
			<div class="row no-gutters">
				<div class="container_left col l-6">
					<div class="row no-gutters">
						<div class="show-img col l-4">
							<ul class="box_show-img">
								<li class="show-img__item">
									<img src="<?php echo base_url() ?>vendor/img/product/product1.jpg" onclick="changeImg('proD1')" id="proD1" alt="">
								</li>
								<li class="show-img__item">
									<img src="<?php echo base_url() ?>vendor/img/product/product1.1.jpg" onclick="changeImg('proD2')" id="proD2" alt="">
								</li>
								<li class="show-img__item">
									<img src="<?php echo base_url() ?>vendor/img/product/product1.2.jpg" onclick="changeImg('proD3')" id="proD3" alt="">
								</li>
								<li class="show-img__item">
									<img src="<?php echo base_url() ?>vendor/img/product/product1.3.jpg" onclick="changeImg('proD4')" id="proD4" alt="">
								</li>
							</ul>
						</div>
						<div class="product-img col l-8">
							<img src="<?php echo base_url() ?>vendor/img/product/product1.jpg" id="img-proMain" alt="">
						</div>
					</div>
				</div>
				<div class="container_right col l-6">
					<h1 class="product_title">Áo sơ mi nam kẻ sọc ca rô lớn</h1>
					<ul class="product_category">
						<li class="category">
							Loại: 
							<span>Khác</span>
						</li>
					</ul>
					<div class="box_pro_group">
						<div class="pro_price-group">
							<ins>1,700,000₫</ins>
						</div>
						<div class="box-color-size">
							<div class="color-size">
								<label class="lable_title">Màu</label>
								<select class="select_detail" name="color" id="">
									<option value="">blue</option>
									<option value="">red</option>
									<option value="">white</option>
									<option value="">yellow</option>
									<option value="">green</option>
									<option value="">grey</option>
								</select>
							</div>
							<div class="color-size">
								<label class="label_title">Kích thước</label>
								<select class="select_detail" name="size" id="">
									<option value="">S</option>
									<option value="">M</option>
									<option value="">L</option>
									<option value="">XL</option>
								</select>
							</div>
						</div>
						<div class="pro_action">
							<div class="row no-gutters">
								<div class="box_amount">
									<label class="amount_title col l-6">Số lượng: </label>
									<div class="pro_amount col l-6">
										<input class="minus" type="button" onclick="giam()" value="-">
										<span id="input-qty">1</span><!--  type="number" id="input-qty" min="1" max="50" value="1" readonly> -->
										<input class="plus" type="button" onclick="tang()" value="+">
									</div>
								</div>
							</div>
							<a class="cart_link" href=""><div class="insert_cart">Thêm vào giỏ hàng</div></a>
						</div>
					</div>
					<div class="box_buynow">
						<div class="btn_buynow">
							<a class="pro_buynow" href="">Mua ngay</a>
						</div>		
					</div>
					<div class="pro_policy">
						<div class="policy_item">
							<div class="policy_img">
								<img src="<?php echo base_url() ?>vendor/img/policy_free.png" alt="">
							</div>
							<div class="policy_info">
								<h3>Miễn phí giao hàng toàn quốc</h3>
								<div class="policy_desc">
									<span>Nội thành trên 300k - Ngoại thành trên 500k</span>
									<a href="">Xem chi tiết</a>
								</div>
							</div>
						</div>
						<div class="policy_item">
							<div class="policy_img">
								<img src="<?php echo base_url() ?>vendor/img/policy2.png" alt="">
							</div>
							<div class="policy_info">
								<h3>Đổi trả dễ dàng</h3>
								<div class="policy_desc">
									<span>(Sản phẩm đã nhận không quá 3 ngày đối với mua trực tuyến; và 2 ngày đối với mua tại cửa hàng. * Không áp dụng chính sách đổi trả với sản phẩm sale.
									</span>
									<a href="">Xem chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container_description">
		<div class="description row no-gutters">
			<div class="box_desc col l-12">
				<div class="desc_tab">
					<ul class="desc_tab-title">
						<li class="pro_desc">
							<a class="pro_desc-link" href="">Mô tả sản phẩm</a>
							<a class="pro_desc-link" href="">Hướng dẫn chọn size</a>
						</li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<script>
		function tang()
		{
			var a = document.getElementById("input-qty").innerText;
			document.getElementById("input-qty").innerText = parseInt(a)+1;
		}
		function giam()
		{
			var a = document.getElementById("input-qty").innerText;
			if (parseInt(a)>1) {
				document.getElementById("input-qty").innerText = parseInt(a)-1;
			}
		}
	</script>
</body>
</html>