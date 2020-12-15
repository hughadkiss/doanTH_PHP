<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sản phẩm</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href=" <?php echo base_url() ?>vendor/css/reponsive.css">
	<link rel="stylesheet" href=" <?php echo base_url() ?>vendor/css/product.css">
	<link rel="stylesheet" href=" <?php echo base_url() ?>vendor/css/reponsiveProduct.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>vendor/js/slide.js"></script>
	
</head>
<body>
	<div class="header">
		<?php include "template/menu.php" ?>
	</div>
	<div class="container">
		<div class="content">
			<div class="collection">
				<div class="row">
					<div class="content-left col l-9 m-12 c-12">
						<div class="header_content-left">
							<div class="content-title">
								<h1><?php echo $tieude ?></h1>
							</div>
							<!-- <div class="content-sort">
								<div class="content-sort-title">
									<label>Sắp xếp theo: </label>
								</div>
								<div class="content-sortby">
									<select data-role="sortby">
										<option value="manual">Sản phẩm nổi bật</option>
										<option value="gialon">Giá tăng dần</option>
										<option value="giagiam">Giá giảm dần</option>
										<option value="cunhat">Cũ Nhất</option>
										<option value="moinhat">Mới Nhất</option>
										<option value="banchay">Bán chạy nhất</option>
									</select>
								</div>
							</div> -->
						</div>
						<div class="result-product row">
							<?php foreach ($dulieucontroller as $key => $value):?>
								<div class="result-product-items col l-3 m-4 c-6">
									<a href="/ProductDetail" class="product-items-box">
										<div class="product-items-img">
											<img src="/vendor/img/product/<?= $value['pro_img'] ?>" alt="">
										</div>
										<p><?= $value['pro_name'] ?></p>
										<div class="price">
											<ins><?= number_format($value['price'], 0, ',', '.') ?>đ</ins>
										</div>
										<div class="giohang" data-id="<?= $value['id'] ?>">
											<span class="giohang_link">Thêm</span>
											<span class="material-icons giohang_icon">add_shopping_cart</span>
										</div>
									</a>
								</div>
							<?php endforeach ?>
								<?php 
									

								 ?>
						</div>
					</div>
					<div class="content-right col l-3 m-0 c-0">
						<div class="box_select-price-items">
							<div class="select-price-items" style="transition: linear .3s;">
								<div class="box_select-title">
									<h4>Khoảng giá</h4>
									<span class="material-icons">remove</span>
								</div>
								<ul>
									<li class="select-price">
										<label><input type="radio" name="select_price" checked><span>Tất cả</span></label>
									</li>
									<li class="select-price">
										<label><input type="radio" name="select_price"><span>Dưới 100.000đ</span></label>
									</li>
									<li class="select-price">
										<label><input type="radio" name="select_price"><span>100.000đ-300.000đ</span></label>
									</li>
									<li class="select-price">
										<label><input type="radio" name="select_price"><span>300.000đ-500.000đ</span></label>
									</li>
									<li class="select-price">
										<label><input type="radio" name="select_price"><span>500.000đ-1.000.000đ</span></label>
									</li>
									<li class="select-price">
										<label><input type="radio" name="select_price"><span>Trên 1.000.000đ</span></label>
									</li>
								</ul>
							</div>
						</div>
						<div class="box_select-color-items">
							<div class="select-color-items">
								<div class="box_select-title">
									<h4>Màu sắc</h4>
									<span class="material-icons">remove</span>
								</div>
								<ul>
									<li class="select-color"><label><input type="checkbox" name="color"></label></li>
									<li class="select-color"><label><input type="checkbox" name="color"></label></li>
									<li class="select-color"><label><input type="checkbox" name="color"></label></li>
									<li class="select-color"><label><input type="checkbox" name="color"></label></li>
									<li class="select-color"><label><input type="checkbox" name="color"></label></li>
									<li class="select-color"><label><input type="checkbox" name="color"></label></li>
								</ul>
							</div>
						</div>
						<div class="box_select-size-items">
							<div class="select-size-items">
								<div class="box_select-title">
									<h4>Kích cỡ</h4>
									<span class="material-icons">remove</span>
								</div>
								<ul>
									<li class="select-size">
										<label>
											<input type="checkbox" name="size">
											<span>S</span>
										</label>
									</li>
									<li class="select-size">
										<label>
											<input type="checkbox" name="size">
											<span>M</span>
										</label>
									</li>
									<li class="select-size">
										<label>
											<input type="checkbox" name="size">
											<span>L</span>
										</label>
									</li>
									<li class="select-size">
										<label>
											<input type="checkbox" name="size">
											<span>XL</span>
										</label>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<?php include "template/footer.php" ?>
	<div class="modal" id="box-form-select">
		<div class="modal__overlay">
		</div>
		<div class="modal__body">
			<div class="modal__inner">
				<!-- form chỉnh màu, size -->
				<div class="auth-form">
					<div class="auth-form__header">
						<h3 class="auth-form__title">
							Chọn màu, kích thước, số lượng.
						</h3>
					</div>
					<div class="auth-form__content">
						<form class="form" action="Cart/insert" id="form-select" method="post">
							<div class="auth-form__group">
								<label class="auth-form__text">Kích thước</label>
								<select class="select-color_size_amount" name="size">
									<!-- <option value="">S</option> -->
								</select>
							</div>
							<div class="auth-form__group">
								<label class="auth-form__text">Màu</label>
								<select class="select-color_size_amount" name="color">
									<!-- <option value="">blue</option> -->
								</select>
							</div>
							<div class="auth-form__group">
								<label class="auth-form__text">Số lượng</label>
								<input class="select-color_size_amount" type="number" name="amount" min="1" max="50" value="1">
							</div>
							
							
							<div class="submit">
								<input class="them" type="submit" name="submit" value="Thêm">
							</div>
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<script>
		let dataProduct;
		let productSelect;
		document.querySelectorAll('.box_select-title span').forEach( function(element, index) {
			element.parentElement.parentElement.style.height = element.parentElement.parentElement.offsetHeight+0.4+'px';
			element.onclick = function() {
				var parentElement = this.parentElement.parentElement;
				var ulElementHeight = parentElement.querySelector('ul').offsetHeight;
				var titleElementHeight = this.parentElement.offsetHeight;
				var parentElementHeight = parentElement.offsetHeight;
				if (parentElement.getAttribute('show-active')) {
					parentElement.removeAttribute('show-active');

					parentElement.style.height = (titleElementHeight+ulElementHeight+22.4)+'px';
					parentElement.querySelector('.material-icons').innerText = 'remove'
				} else {
					parentElement.setAttribute('show-active', 'true');
					
					parentElement.style.height = titleElementHeight+'px';
					parentElement.querySelector('.material-icons').innerText = 'add';
				}
			}
		});

		// click Thêm giỏ hàng
		document.querySelectorAll('.giohang').forEach( function(element, index) {
			element.onclick = function(event) {
				event.stopPropagation();
				event.preventDefault();
				let id = this.getAttribute('data-id');
				$.ajax({
					url: '/Product/getProductDetail/'+id,
					type: 'GET',
					dataType: 'json'
				})
				.done(function(data) {
					dataProduct = data;
					let formSelect = document.getElementById('box-form-select');
					// reset value
					$('#box-form-select select[name="size"]').html('');
					$('#box-form-select select[name="color"]').html('');
					document.querySelector('.select-color_size_amount[name="amount"]').value = '1';

					let selectColor = formSelect.querySelector('select[name="color"]');
					let selectSize = formSelect.querySelector('select[name="size"]');
					let firstSize = "";
					for (index in data) {
						let flag = false;
						for (var i = 0; i < index; i++) {
							if (data[index]['size'] == data[i]['size']) {
								flag = true;
							}
						}
						if (!flag) {
							$('#box-form-select select[name="size"]').append(`<option value="${data[index]['size']}">${data[index]['size']}</option>`);
						}

						if (firstSize.length == 0){
							firstSize = data[index]['size'];
							document.querySelector('.select-color_size_amount[name="amount"]').setAttribute('max', data[index]['amount']);
							productSelect = data[index]['id'];
						}

						if (firstSize == data[index]['size']) {
							$('#box-form-select select[name="color"]').append(`<option value="${data[index]['color']}">${data[index]['color']}</option>`);
						}

					}
					formSelect.classList.add('active');
				});
			}
		});
		// click chọn size
		document.querySelector('.select-color_size_amount[name="size"]').onchange = function() {
			$('#box-form-select select[name="color"]').html('');
			document.querySelector('.select-color_size_amount[name="amount"]').value = '1';
			let firstColor = false;
			for (value of dataProduct) {
				if (value['size'] == this.value) {
					$('#box-form-select select[name="color"]').append(`<option value="${value['color']}">${value['color']}</option>`);
					if (firstColor == false) {
						document.querySelector('.select-color_size_amount[name="amount"]').setAttribute('max', value['amount']);
						firstColor = true;
						productSelect = value['id'];
					}
				}
			}
		}
		// Click chọn màu
		document.querySelector('.select-color_size_amount[name="color"]').onchange = function() {
			let parentElement = this.parentElement.parentElement;
			let size = parentElement.querySelector('.select-color_size_amount[name="size"]').value;
			let color = this.value;
			for (value of dataProduct) {
				if (value['size'] == size && value['color'] == color) {
					parentElement.querySelector('.select-color_size_amount[name="amount"]').setAttribute('max', value['amount']);
					parentElement.querySelector('.select-color_size_amount[name="amount"]').value = '1';
					productSelect = value['id']
				}
			}
		}

		document.getElementById('form-select').onsubmit = function(event) {
			event.preventDefault();

			let form = this;
			$.ajax({
				url: '/Cart/insert',
				type: 'POST',
				dataType: 'json',
				data: {
					id: productSelect,
					amount: form.querySelector('input[name="amount"]').value
				},
			})
			.done(function(data) {
				// console.log(data);
				alert('Thêm thành công')
			});
			
		}

		document.querySelector('.modal__overlay').onclick = function() {
			this.parentElement.classList.remove('active');
		}
	</script>
</body>
</html>