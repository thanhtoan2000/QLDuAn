<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "../view/layouts/headerpage.php"; ?>
    <!--/head-->

<body>
	<?php include "../view/layouts/menupage.php"; ?>
	<!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Thể thao
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Áo thể thao </a></li>
											<li><a href="#">Quần thể thao </a></li>
											<li><a href="#">Giày  </a></li>
											<li><a href="#">Găng tay</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Nam
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Quần kaki</a></li>
											<li><a href="#">Quần Jeans</a></li>
											<li><a href="#">Quần Tây</a></li>
											<li><a href="#">Áo thun cổ tròn</a></li>
											<li><a href="#">Áo khoác</a></li>
											<li><a href="#">Áo Hoodie</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Nữ
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Váy nữ</a></li>
											<li><a href="#">Đầm nữ</a></li>
											<li><a href="#">Áo len</a></li>
											<li><a href="#">Quần tây</a></li>
											<li><a href="#">Đồ bộ</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Trẻ em</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Thời trang</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Gia đình</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Nội địa</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Quần áo</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Túi xách</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Giày dép</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
						<div class="price-range"><!--price-range-->
							<h2>Phạm vi giá</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="14000000" data-slider-step="1000" data-slider-value="[5000000,10000000]" id="sl2" ><br />
								 <b class="pull-left">đ 0</b> <b class="pull-right">đ 14000000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/product-details/1.jpg" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
								<p>Web ID: 1089772</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>VN 1.343.000 đ</span>
									<label>Số lượng:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>Thêm vào giỏ
									</button>
								</span>
								<p><b>Kho:</b> Còn Hàng</p>
								<p><b>Tình trạng:</b> Mới</p>
								<p><b>Nhãn hàng:</b> HTVV</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Chi tiết</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Thông tin công ty</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								
							<?php
									  $ArrTen = array("Áo A","Áo B","Áo C","Áo D",);
									  $ArrGia = array(5000000,1000000,1500000,2000000,);
									  $ArrAnh = array("images/home/gallery1.jpg","images/home/gallery2.jpg","images/home/gallery3.jpg","images/home/gallery4.jpg");
								    for ($i = 0; $i < count ($ArrTen); $i ++){
					    echo		'<div class="col-sm-3">';
						echo		'<div class="product-image-wrapper">';
						echo			'<div class="single-products">';
						echo				'<div class="productinfo text-center">';
						echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
						echo					'<h2>'.$ArrGia[$i].' đ</h2>';
						echo					'<p>'.$ArrTen[$i].'</p>';
						echo					'<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>';
						echo				'</div>';
						echo			'</div>';
						echo		'</div>';
						echo	'</div>';
									}
							?>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
							<?php
									  $ArrTen = array("Áo A","Áo B","Áo C","Áo D",);
									  $ArrGia = array(5000000,1000000,1500000,2000000,);
									  $ArrAnh = array("images/home/gallery2.jpg","images/home/gallery1.jpg","images/home/gallery3.jpg","images/home/gallery4.jpg");
								    for ($i = 0; $i < count ($ArrTen); $i ++){
					    echo		'<div class="col-sm-3">';
						echo		'<div class="product-image-wrapper">';
						echo			'<div class="single-products">';
						echo				'<div class="productinfo text-center">';
						echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
						echo					'<h2>'.$ArrGia[$i].' đ</h2>';
						echo					'<p>'.$ArrTen[$i].'</p>';
						echo					'<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>';
						echo				'</div>';
						echo			'</div>';
						echo		'</div>';
						echo	'</div>';
									}
							?>	
							
							</div>
							
							<div class="tab-pane fade" id="tag" >
							<?php
									  $ArrTen = array("Áo A","Áo B","Áo C","Áo D",);
									  $ArrGia = array(5000000,1000000,1500000,2000000,);
									  $ArrAnh = array("images/home/gallery1.jpg","images/home/gallery2.jpg","images/home/gallery3.jpg","images/home/gallery4.jpg");
								    for ($i = 0; $i < count ($ArrTen); $i ++){
					    echo		'<div class="col-sm-3">';
						echo		'<div class="product-image-wrapper">';
						echo			'<div class="single-products">';
						echo				'<div class="productinfo text-center">';
						echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
						echo					'<h2>'.$ArrGia[$i].' đ</h2>';
						echo					'<p>'.$ArrTen[$i].'</p>';
						echo					'<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>';
						echo				'</div>';
						echo			'</div>';
						echo		'</div>';
						echo	'</div>';
									}
							?>
							</div>							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 tháng 09 2021</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Viết review của bạn</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Tên"/>
											<input type="email" placeholder="Email"/>
										</span>
										<textarea name="" ></textarea>
										<b>Đánh giá: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Đăng
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Có thể bạn cũng thích</h2>						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<?php
							$ArrTen = array("Áo A","Áo B","Áo C");
							$ArrGia = array(5000000,1000000,1500000);
							$ArrAnh = array("images/home/recommend1.jpg","images/home/recommend2.jpg","images/home/recommend3.jpg");
						echo	'<div class="carousel-inner">';
						echo	'<div class="item active">';	
						   		for ($i =0; $i< count ($ArrTen); $i ++){
							echo		'<div class="col-sm-4">';
							echo		'<div class="product-image-wrapper">';
							echo			'<div class="single-products">';
							echo				'<div class="productinfo text-center">';
							echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
							echo					'<h2>'.$ArrGia[$i].' VND</h2>';
							echo					'<p>'.$ArrTen[$i].'</p>';
							echo					'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
							echo				'</div>';						
							echo			'</div>';
							echo			'</div>';
							echo		'</div>';
								}
								?>
								</div>
							  <div class="item">
								<?php	
							 	for ($i =0; $i< count ($ArrTen); $i ++){
							echo		'<div class="col-sm-4">';
							echo		'<div class="product-image-wrapper">';
							echo			'<div class="single-products">';
							echo				'<div class="productinfo text-center">';
							echo                    '<img src="'.$ArrAnh[$i].'" alt="" />';
							echo					'<h2>'.$ArrGia[$i].' VND</h2>';
							echo					'<p>'.$ArrTen[$i].'</p>';
							echo					'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
							echo				'</div>';			
							echo			'</div>';
							echo		'</div>';
							echo	'</div>';
							  		 }
							echo'</div>';
							echo'</div>';
							?>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
			<!--footer_start-->
			<?php include "../view/layouts/footerpage.php"; ?>

			<!--/Footer-->
			<?php include "../view/layouts/scriptpage.php"; ?>

</body>
</html>