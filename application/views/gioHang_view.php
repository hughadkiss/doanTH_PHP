<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giỏ hàng</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<style type="text/css">

		.table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
		vertical-align: middle;
		}
		 
		@media screen and (max-width: 600px) { 
		table#cart tbody td .form-control { 
		width:20%; 
		display: inline !important;
		} 
		 
		.actions .btn { 
		width:36%; 
		margin:1.5em 0;
		} 
		 
		.actions .btn-info { 
		float:left;
		} 
		 
		.actions .btn-danger { 
		float:right;
		} 
		 
		table#cart thead {
		display: none;
		} 
		 
		table#cart tbody td {
		display: block;
		padding: .6rem;
		min-width:320px;
		} 
		 
		table#cart tbody tr td:first-child {
		background: #333;
		color: #fff;
		} 
		 
		table#cart tbody td:before { 
		content: attr(data-th);
		font-weight: bold; 
		display: inline-block;
		width: 8rem;
		} 
		 
		table#cart tfoot td {
		display:block;
		} 
		table#cart tfoot td .btn {
		display:block;
		}
	}</style>
		
</head>
<body>
	<h2 class="text-center">Giỏ hàng</h2>
	<div class="container">
		<form action="/Cart/editCart" method="post">
		<table id="cart" class="table table-hover table-condensed"> 
			<thead> 
				<tr> 
					<th >Tên sản phẩm</th> 
					<th >Size, màu</th> 
					<th >Giá</th> 
					<th style="width: 70px">Số lượng</th> 
					<th  class="text-center">Thành tiền</th> 
					<th > </th> 
				</tr> 
			</thead> 
			<tbody>				
				
				<?php foreach ($dataCart as $key => $value): ?>
				<tr> 
					<td data-th="Product"> 
						<div class="row"> 
	 						<div class="col-sm-2 hidden-xs">
	 							<img src="/vendor/img/product/<?= $value['pro_img']?>" alt="Sản phẩm 1" class="img-responsive" width="100">
	 						</div> 
	 						<div class="col-sm-10"> 
	  							<h4 class="nomargin"><?= $value['pro_name'] ?></h4> 
	 						</div> 
						</div> 
					</td> 
					<td data-th="detail">
						<i><?= $value['size'] ?></i>
						<i><?= $value['color'] ?></i>
					</td>
					<td data-th="Price"><?= number_format($value['price'], 0, ',', '.') ?> đ</td> 
					<td data-th="Quantity">
						<input type="text" name="id[]" hidden value="<?= $value['id']?>">
						<input class="form-control text-center" name="amount[]" value="<?= $value['amount'] ?>" type="number">
					</td> 
					<td data-th="Subtotal" class="text-center"><?= number_format($value['price']*$value['amount'], 0, ',', '.') ?> đ</td> 
					<td class="actions" data-th="">
						<a class="btn btn-danger btn-sm" href="Cart/deleteData/<?= $value['id'] ?>">
							<span class="material-icons">delete_forever</span>
						</a>
					</td>
				</tr>					
				<?php endforeach ?>
				
			</tbody>
			<tfoot> 
				<tr class="visible-xs"> 
					<td class="text-center">
						<strong>Tổng <?php
						$tong = 0;
						foreach ($dataCart as $key => $value) {
							$tong += $value['price']*$value['amount'];
						} echo number_format($tong, 0, ',', '.');
						 ?> đ</strong>
					</td> 
				</tr> 
				<tr> 
					<td>
						<a href="" class="btn btn-warning">Tiếp tục mua hàng</a>
					</td> 
					<td>
						<button class="btn btn-warning">Cập nhật</button>
					</td>
					<td colspan="3" class="hidden-xs"> </td> 
					<td class="hidden-xs text-center">
						<strong>Tổng tiền <?php
						$tong = 0;
						foreach ($dataCart as $key => $value) {
							$tong += $value['price']*$value['amount'];
						} echo number_format($tong, 0, ',', '.');
						 ?> đ</strong>
					</td> 
					<!-- <td>
						<a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
					</td>  -->
				</tr> 
				<tr>
					<div style="color: red; text-align: center; font-size: 20px;"><?= $this->session->flashdata('success'); ?></div>
					<div style="color: red; text-align: center; font-size: 20px;"><?= $this->session->flashdata('fail'); ?></div>
				</tr>
			</tfoot> 
		</table>
		</form>
	</div>
</body>
</html>