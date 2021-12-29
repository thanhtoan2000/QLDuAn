<!DOCTYPE html>
<html lang="en">
<head>
<?php include "layouts/headerpage.php"; ?>
<!--/head-->
<body>
<?php include "layouts/menupage.php"; ?>
	<!--/header-->
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Trang chủ</a></li>
				  <li><a href="cart.php">Giỏ hàng</li>
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
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
						$ArrTen = array ("Áo A","Áo B","Áo C");
						$ArrGia = array (5000000,1000000,1500000);
						$ArrTongCong= array(5000000,1000000,1500000);
						$Arrid = array ("11222","12985","13690");
						$ArrAnh = array("images/home/product1.jpg","images/home/product2.jpg","images/home/product3.jpg");						
						for ($i = 0; $i < count ($ArrTen); $i ++){
						echo' <tr>';
						echo'<td class="cart_product">';
						echo'	<a href=""><img src="'.$ArrAnh[$i].'" alt=""></a>';
						echo'</td>';
						echo'<td class="cart_description">';
						echo	'<h4><a href="">'.$ArrTen[$i].'</a></h4>';
						echo	'<p>Web ID: '.$Arrid[$i].'</p>';
						echo'</td>';
						echo'<td class="cart_price">';
						echo'	<p>'.$ArrGia[$i].' VND</p>';
						echo'</td>';
						echo'<td class="cart_quantity">';
						echo	'<div class="cart_quantity_button">';
						echo		'<a class="cart_quantity_up" href=""> + </a>';
						echo		'<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">';
						echo		'<a class="cart_quantity_down" href=""> - </a>';
						echo	'</div>';
						echo'</td>';
						echo'<td class="cart_total">';
						echo	'<p class="cart_total_price">'.$ArrTongCong[$i].' VND</p>';
						echo'</td>';
						echo'<td class="cart_delete">';
						echo	'<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>';
						echo'</td>';
						echo'</tr>';
						}
                        ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Bạn muốn làm gì tiếp theo?</h3>
				<p>Chọn nếu bạn có mã giảm giá hoặc điểm thưởng mà bạn muốn dùng hoặc muốn ước tích chi phí giao hàng.</p>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Dùng mã giảm giá</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Dùng phiếu quà tặng</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Ước tính phí giao hàng & thuế</label>
							</li>
						</ul>
						<ul class="user_info">
						<li class="single_field">
								<label>Tỉnh / Thành phố:</label>
								<select>
									<option>TP HCM</option>
									<option>TP Đà Nẳng</option>
									<option>Kiên Giang</option>
								</select>
						</li>
							<li class="single_field">	
						
								<label>Quận / Huyện:</label>
								<select>
									<option>Quận 1</option>
									<option>Quận 2</option>
									<option>Quận 3</option>
								</select>
							</li>
							<li class="single_field">	
						
								<label>Xã / Phường:</label>
								<select>
									<option>Phường 1</option>
									<option>Phường 2</option>
									<option>Phường 3</option>
								</select>
							</li>
						</ul>
						<a class="btn btn-default update" href="">Cập nhật</a>
						<a class="btn btn-default check_out" href="">Tiếp tục</a>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="total_area">
						<ul>
							<li>Tổng giá trong giỏ hàng <span>7.500.000 VND</span></li>
							<li>Thuế <span>1.500.000 VND</span></li>
							<li>Phí giao hàng <span>Miễn phí</span></li>
							<li>Tổng cộng <span>6.000.000 VND</span></li>
						</ul>
							<a class="btn btn-default update" href="">Cập nhật</a>
							<a class="btn btn-default check_out" href="checkout.html">Thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	<?php include "layouts/footerpage.php"; ?>
	<!--/Footer-->
	<?php include "layouts/scriptpage.php"; ?>
</body>
</html>