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
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="step-one">
				<h2 class="heading">Bước 1</h2>
			</div>
			<div class="checkout-options">
				<h3>Người dùng mới</h3>
				<p>Lựa chọn</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Tài khoản đăng nhập</label>
					</li>
					<li>
						<label><input type="checkbox"> Khách</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Hủy</a>
					</li>
				</ul>
			</div><!--/checkout-options-->
			<div class="register-req">
				<p>Hãy chọn Tài khoản đăng nhập và thanh toán để dễ dàng truy cập lịch sử đặt hàng, hoặc thanh toán với tư cách là Khách</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Thông tin</p>
							<form>
								<input type="text" placeholder="Tên người dùng">
								<input type="password" placeholder="Mật khẩu">
								<input type="password" placeholder="Nhập lại mật khẩu">
							</form>
							<a class="btn btn-primary" href="">Cập nhật</a>
							<a class="btn btn-primary" href="">Tiếp tục</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Thanh toán </p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Nhập Email *">
									<input type="text" placeholder="Nhập Họ *">
									<input type="text" placeholder=" Nhập Tên *">
									<input type="text" placeholder="Nhập địa chỉ *">
								</form>
							</div>
							<div class="form-two">
								<form>
									<select>
										<option>--Tỉnh/Thành phố--</option>
										<option>TP HCM</option>
										<option>Hà Nội</option>
									</select>
									<select>
										<option>--Quận/Huyện--</option>
										<option>Quận 1</option>
										<option>Quận 2</option>
									</select>
									<select>
										<option>--Phường/Xã--</option>
										<option>Phường 1</option>
										<option>Phường 2</option>
									</select>
									<input type="password" placeholder="Nhập lại mật khẩu">
									<input type="text" placeholder="Số điện thoại *">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4
					">
						<div class="order-message">
							<p>Ghi chú</p>
							<textarea name="message"  placeholder="Ghi chú" rows="16"></textarea>
							<label><input type="checkbox"> Giao đến địa chỉ thanh toán</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Thanh toán</h2>
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
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>1.343.000 đ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1.343.000 đ</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>						
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Tổng giá trong giỏ hàng</td>
										<td>1.343.000 đ</td>
									</tr>
									<tr>
										<td>Thuế</td>
										<td>45.000 đ</td>
									</tr>
									<tr class="shipping-cost">
										<td>Phí giao hàng</td>
										<td>Miễn phí</td>										
									</tr>
									<tr>
										<td>Tổng cộng</td>
										<td><span>1.388.000 đ</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Chuyển khoản ngân hàng</label>
					</span>
					<span>
						<label><input type="checkbox"> Thanh toán khi hàng giao đến</label>
					</span>
					<span>
						<label><input type="checkbox"> Dùng Internet Banking</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->	
	<?php include "layouts/footerpage.php"; ?>	
	<!--/Footer-->
	<?php include "layouts/scriptpage.php"; ?>
</body>
</html>