<!DOCTYPE html>
<html lang="en">
<head>
<?php include "layouts/menupage.php"; ?>
   <!--/head-->
<body>
	<?php include "layouts/headerpage.php"; ?>
	<!--/header-->
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Trang chủ</a></li>
				  <li class="active">Danh sách yêu thích</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng cộng</td>
							<td>Mua</td>
							<td>Xóa</td>
						</tr>
					</thead>
					<tbody>
						<?php
						$ArrTen = array ("Áo A","Áo B","Áo C");
						$ArrGia = array (5000000,1000000,1500000);
						$Arrid = array ("11222","12985","13690");
						$ArrAnh = array("images/cart/one.png","images/cart/two.png","images/cart/three.png");
						for ($i = 0; $i < count ($ArrTen); $i ++){
					echo	'<tr>';
					echo	'<td class="cart_product">';
					echo		'<a href=""><img src="'.$ArrAnh[$i].'" alt=""></a>';
					echo	'</td>';
					echo	'<td class="cart_description">';
					echo		'<h4><a href="">'.$ArrTen[$i].'</a></h4>';
					echo		'<p>Web ID: '.$Arrid[$i].'</p>';
					echo	'</td>';
					echo	'<td class="cart_price">';
					echo		'<p>'.$ArrGia[$i].' VND</p>';
					echo	'</td>';
					echo	'<td class="cart_quantity">';
					echo		'<div class="cart_quantity_button">';
					echo			'<a class="cart_quantity_up" href=""> + </a>';
					echo			'<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">';
					echo			'<a class="cart_quantity_down" href=""> - </a>';
					echo		'</div>';
					echo	'</td>';
					echo	'<td class="cart_total">';
					echo		'<p class="cart_total_price">1.343.000 đ</p>';
					echo	'</td>';
					echo	'<td class="cart_add">';
					echo		'<a class="btn btn-default add-to-cart" href=""><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
					echo	'</td>';
					echo	'<td class="cart_delete">';
					echo		'<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>';
					echo	'</td>';
					echo'</tr>';
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->	
<!--footer_start-->
<?php include "layouts/footerpage.php"; ?>
<!--/Footer-->
<?php include "layouts/scriptpage.php"; ?>
</body>
</html>