<!DOCTYPE html>
<html lang="en">
<head>
<?php include "layouts/headerpage.php"; ?>
   <!--/head-->

<body>
<?php include "layouts/menupage.php"; ?>
	<!--/header-->
	
	<section class="ftco-section contact-section bg-light">
      <div class="container">
      	
        <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form">
			<h2>Đăng nhập tài khoản</h2>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Tên của bạn">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email của bạn">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Mật khẩu">
              </div>
              <label><input type="checkbox" value="" class="mr-2"> Ghi nhớ đăng nhập</label>
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;           
              <span><a href="#">Quên mật khẩu?</a></span>
              <div class="form-group">
                <input type="submit" value="Đăng nhập" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
		  <div class="col-md-6 d-flex">
		<img src="images/home/girl1.jpg"/>
									
		</div>
		</div>
        </div>
      </div>
    </section>
	
	<?php include "layouts/footerpage.php"; ?>	
	<!--/Footer-->
    <?php include "layouts/scriptpage.php"; ?>

</body>
</html>