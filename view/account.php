<!DOCTYPE html>
<html lang="en">
<head>
<?php include "layouts/headerpage.php"; ?>

</head><!--/head-->

<body>
	
<?php include "layouts/menupage.php"; ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="class="active"">
						<h2><img src="images/account/account-icon.png" alt="" width="30px"> &nbsp; Tài khoản</h2>
						<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#user"><i class="fa fa-user"></i>
											<span class="badge ">Thông tin cá nhân</span>
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#noti"><i class="fa fa-bell"></i>
											<span class="badge">Thông báo</span>
										</a>
									</h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#"><i class="fa fa-eye"></i>
											<span class="badge">Sản phẩm đã xem</span>
										</a>
									</h4>
								</div>							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#"><i class="fa fa-star"></i>
                                            <span class="badge">Danh sách yêu thích</span>
                                        </a>
                                    </h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#"><i class="fa fa-shopping-cart"></i>
                                            <span class="badge"> Giỏ hàng</span>
                                        </a>
                                    </h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#"><i class="fa fa-credit-card"></i>
                                            <span class="badge"> Thông tin thanh toán</span>
                                        </a>
                                    </h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#"><i class="fa fa-tag fa-lg"></i>
                                            <span class="badge"> Thông tin Khuyến mãi</span>
                                        </a>
                                    </h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#"><i class="fa fa-truck"></i>
                                            <span class="badge"> Phương thức giao hàng</span>
                                        </a>
                                    </h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#"><i class="fa fa-question-circle"></i>
                                            <span class="badge"> Hỏi đáp</span>
                                        </a>
                                    </h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            
            <div class="col-sm-9">
                <div class="shopper-info">
                    <h2 class="title text-center">Thông tin cá nhân</h2>
                    <form> 
                        <label>Họ Tên:</label>                          
                        <input type="text" name="fullname" placeholder="Nhập Họ và Tên"><br>
                        <label>Số Điện Thoại:</label> 
                        <input type="text" name="phone" placeholder="Nhập Số Điện Thoại"><br>
                        <label>Email:</label> 
                        <input type="text" name="email" placeholder="Nhập địa chỉ Email"><br>
                        <label>Giới tính:</label><br>
                        &emsp;&emsp;&emsp;&emsp;
                        <label>
                            <input type="radio" name="gt" id="" value="1"><span></span>
                            <span>Nam</span>
                        </label>
                        &emsp;&emsp;&emsp;&emsp;
                        <label>
                            <input type="radio" name="gt" id="" value="0"><span></span>
                            <span>Nữ</span>
                        </label><br>
                        <label>Ngày sinh:</label>
                        <input type="date" name="ngay_sinh"> 
                    </form>
                    <a class="btn btn-default update" href="">Cập nhật</a>
                </div> 
            </div>
		</div>
	</section><br>
	 
	<?php include "layouts/footerpage.php"; ?>

	<!--/Footer-->
	

  
	<?php include "layouts/scriptpage.php"; ?>
</body>
</html>