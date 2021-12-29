<!DOCTYPE html>
<html lang="en">
<head>
<?php include "layouts/headerpage.php"; ?>
<!--/head-->
<body>
	<!--header-->
<?php include "layouts/menupage.php"; ?>	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>	
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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm</h2>
						<?php
						$ArrTen = array("Áo A","Áo B","Áo C","Áo D","Áo E","Áo F","Áo L","Áo M","Áo N","Áo P","Áo Q","Áo X");
						$ArrGia = array(5000000,1000000,1500000,5000000,1000000,1500000,5000000,1000000,1500000,5000000,1000000,1500000);
						$ArrAnh = array("images/shop/product12.jpg","images/shop/product11.jpg","images/shop/product10.jpg","images/shop/product12.jpg","images/shop/product11.jpg","images/shop/product10.jpg","images/shop/product12.jpg","images/shop/product11.jpg","images/shop/product10.jpg"
					,"images/shop/product12.jpg","images/shop/product11.jpg","images/shop/product10.jpg");
						for ($i = 0; $i < count ($ArrTen); $i ++){
				echo		'<div class="col-sm-4">';
				echo		'<div class="product-image-wrapper">';
				echo			'<div class="single-products">';
				echo				'<div class="productinfo text-center">';
				echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
				echo					'<h2>'.$ArrGia[$i].' đ</h2>';
				echo					'<p>'.$ArrTen[$i].'</p>';
				echo					'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
				echo				'</div>';
				echo				'<div class="product-overlay">';
				echo					'<div class="overlay-content">';
				echo						'<h2>'.$ArrGia[$i].' đ</h2>';
				echo						'<p>'.$ArrTen[$i].'</p>';
				echo						'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
				echo					'</div>';
				echo				'</div>';
				echo			'</div>';
				echo			'<div class="choose">';
				echo				'<ul class="nav nav-pills nav-justified">';
				echo					'<li><a href=""><i class="fa fa-plus-square"></i>Thêm vào Yêu thích</a></li>';
				echo				'</ul>';
				echo			'</div>';
				echo		'</div>';
				echo	'</div>';
						}
						?>							
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>	
<!--footer_start-->
<?php include "layouts/footerpage.php"; ?>
<!--/Footer--> 
<?php include "layouts/scriptpage.php"; ?>
</body>
</html>