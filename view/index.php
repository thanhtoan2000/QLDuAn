<!DOCTYPE html>
<html lang="en">
<head>

<?php include "../view/layouts/headerpage.php"; ?>

</head><!--/head-->
<body>

<?php include "../view/layouts/menupage.php"; ?>

  <!--/header-->
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1>HTVV</h1>
									<h2>Hiện đang giảm 10%</h2>
									<p>Chỉ cần nhập mã GIAM10% với đơn hàng trên 250000đ </p>
									<button type="button" class="btn btn-default get">Mua ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1>HTVV</h1>
									<h2>Từ ngày 1/10 đến ngày 10/10</h2>
									<p>Với thời gian từ 17h đến 22h </p>
									<button type="button" class="btn btn-default get">Mua ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1>HTVV</h1>
									<h2>Freeship toàn quốc</h2>
									<p>Nhập mã FREESHIP với đơn hàng trên 250000đ</p>
									<button type="button" class="btn btn-default get">Mua ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
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
					
						<div class="brands_products"><!--brands_products-->
							<h2>Nhãn hàng</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
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
                    <?php
                    $ArrTen = array("Áo A","Áo B","Áo C","Áo D","Áo E","Áo F");
                    $ArrGia = array(5000000,1000000,1500000,2000000,2500000,3500000);
                    $ArrAnh = array("images/home/product1.jpg","images/home/product2.jpg","images/home/product3.jpg",
                                    "images/home/product4.jpg","images/home/product5.jpg","images/home/product6.jpg");
				echo	'<div class="features_items">';
				echo		'<h2 class="title text-center">Sản phẩm</h2>';
				// for($i = 0; $i < count($data['product']); $i ++)
                       for ($i = 0; $i < count ($ArrTen); $i ++){
                echo	'<div class="col-sm-4">';
                echo		'<div class="product-image-wrapper">';
                echo			'<div class="single-products">';
                echo					'<div class="productinfo text-center">';
                echo						'<img src="'.$ArrAnh[$i].'" alt="" />';
                echo						'<h2>'.$ArrGia[$i].' VND</h2>';
                echo						'<p>'.$ArrTen[$i].'</p>';
                echo						'<a href="cart.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                echo					'</div>';
                echo					'<div class="product-overlay">';
                echo						'<div class="overlay-content">';
                echo							'<h2>'.$ArrGia[$i].' VND</h2>';
                echo							'<p>'.$ArrTen[$i].'</p>';
                echo							'<a href="cart.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                echo						'</div>';
                echo					'</div>';
                echo			'</div>';
                echo			'<div class="choose">';
                echo				'<ul class="nav nav-pills nav-justified">';
                echo					'<li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào Yêu thích</a></li>';              					
                echo				'</ul>';
                echo			'</div>';
                echo		'</div>';
                echo	'</div>';	
                       }								
                echo'</div>';                     
					?>

					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">Áo thun</a></li>
								<li><a href="#blazers" data-toggle="tab">Áo khoác nỉ</a></li>
								<li><a href="#sunglass" data-toggle="tab">Kính</a></li>
								<li><a href="#kids" data-toggle="tab">Trẻ em</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Áo thun có cổ</a></li>
							</ul>
						</div>
						<div class="tab-content">
                            <?php
                                $ArrTen = array("Áo A","Áo B","Áo C","Áo D");
                                $ArrGia = array(5000000,1000000,1500000,2000000);
                                $ArrAnh = array("images/home/gallery1.jpg","images/home/gallery2.jpg","images/home/gallery3.jpg","images/home/gallery4.jpg");                             
						echo	 '<div class="tab-pane fade active in" id="tshirt" >';
                              for ($i =0; $i< count ($ArrTen); $i ++){
                        echo	'<div class="col-sm-3">';
                        echo		'<div class="product-image-wrapper">';
                        echo			'<div class="single-products">';
                        echo				'<div class="productinfo text-center">';
                        echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
                        echo					'<h2>'.$ArrGia[$i].' VND</h2>';
                        echo					'<p>'.$ArrTen[$i].'</p>';
                        echo					'<a href="cart.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                        echo				'</div>';                      				
						echo				'</div>';
                        echo		'</div>';
                        echo	'</div>';
                                }							
                        echo'</div>';
                                
							?>
                            <?php
                             $ArrTen = array("Áo A","Áo B","Áo C","Áo D");
                             $ArrGia = array(5000000,1000000,1500000,2000000);
                             $ArrAnh = array("images/home/gallery3.jpg","images/home/gallery2.jpg","images/home/gallery1.jpg","images/home/gallery4.jpg");
							echo  '<div class="tab-pane fade" id="blazers" >';
                             for ($i =0; $i< count ($ArrTen); $i ++){
                                echo	'<div class="col-sm-3">';
                                echo		'<div class="product-image-wrapper">';
                                echo			'<div class="single-products">';
                                echo				'<div class="productinfo text-center">';
                                echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
                                echo					'<h2>'.$ArrGia[$i].' VND</h2>';
                                echo					'<p>'.$ArrTen[$i].'</p>';
                                echo					'<a href="cart.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                                echo				'</div>';                      				
                                echo				'</div>';
                                echo		'</div>';
                                echo	'</div>';
                                        }							
                                echo'</div>';

                            ?>
							
							<div class="tab-pane fade" id="sunglass" >
                                <?php
                                $ArrTen = array("Áo A","Áo B","Áo C","Áo D");
                                $ArrGia = array(5000000,1000000,1500000,2000000);
                                $ArrAnh = array("images/home/gallery2.jpg","images/home/gallery1.jpg","images/home/gallery4.jpg","images/home/gallery3.jpg");
                                for ($i =0; $i< count ($ArrTen); $i ++){
                                    echo	'<div class="col-sm-3">';
                                    echo		'<div class="product-image-wrapper">';
                                    echo			'<div class="single-products">';
                                    echo				'<div class="productinfo text-center">';
                                    echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
                                    echo					'<h2>'.$ArrGia[$i].' VND</h2>';
                                    echo					'<p>'.$ArrTen[$i].'</p>';
                                    echo					'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                                    echo				'</div>';                      				
                                    echo				'</div>';
                                    echo		'</div>';
                                    echo	'</div>';
                                            }							
                                    echo'</div>';
    
							  ?>
							<div class="tab-pane fade" id="kids" >
                            <?php
                                $ArrTen = array("Áo A","Áo B","Áo C","Áo D");
                                $ArrGia = array(5000000,1000000,1500000,2000000);
                                $ArrAnh = array("images/home/gallery4.jpg","images/home/gallery1.jpg","images/home/gallery3.jpg","images/home/gallery2.jpg");
                                for ($i = 0; $i < count ($ArrTen); $i ++){
                                    echo	'<div class="col-sm-3">';
                                    echo		'<div class="product-image-wrapper">';
                                    echo			'<div class="single-products">';
                                    echo				'<div class="productinfo text-center">';
                                    echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
                                    echo					'<h2>'.$ArrGia[$i].' VND</h2>';
                                    echo					'<p>'.$ArrTen[$i].'</p>';
                                    echo					'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                                    echo				'</div>';                      				
                                    echo				'</div>';
                                    echo		'</div>';
                                    echo	'</div>';
                                            }							
                                    echo'</div>';
    
							  ?>
							
							<div class="tab-pane fade" id="poloshirt" >
                            <?php
                                $ArrTen = array("Áo A","Áo B","Áo C","Áo D");
                                $ArrGia = array(5000000,1000000,1500000,2000000);
                                $ArrAnh = array("images/home/gallery1.jpg","images/home/gallery3.jpg","images/home/gallery4.jpg","images/home/gallery2.jpg");
                                for ($i =0; $i< count ($ArrTen); $i ++){
                                    echo	'<div class="col-sm-3">';
                                    echo		'<div class="product-image-wrapper">';
                                    echo			'<div class="single-products">';
                                    echo				'<div class="productinfo text-center">';
                                    echo					'<img src="'.$ArrAnh[$i].'" alt="" />';
                                    echo					'<h2>'.$ArrGia[$i].' VND</h2>';
                                    echo					'<p>'.$ArrTen[$i].'</p>';
                                    echo					'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                                    echo				'</div>';                      				
                                    echo				'</div>';
                                    echo		'</div>';
                                    echo	'</div>';
                                            }							
                                    echo'</div>';
    
							  ?>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
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
	</section>
	
    <?php include "../view/layouts/footerpage.php"; ?>
	<!--/Footer-->
  
	<?php include "../view/layouts/scriptpage.php"; ?>

</body>
</html>