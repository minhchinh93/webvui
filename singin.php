<?php


include ('lib/dbconnet.php');
include ('lib/checkloin.php');




?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
			
		          <div aria-labelledby="myModalLabel"  tabindex="-100"  >

		              <div class="modal-dialog">
		                  <div class="modal-content">
							  <form method="POST" >
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title"> ĐĂNG KÝ TÀI KHOẢN </h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Tên Đăng Ký.</p>
		                          <input type="text" name="name" placeholder="Tên Đăng Ký" autocomplete="off" class="form-control placeholder-no-fix" value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>">
								  <span class="help-block" style="color: red;"><?= isset($error['name']) ? $error['name'] : ''; ?></span> 
		                      </div>
							  <div class="modal-body">
		                          <p>Email or Số Điện Thoại.</p>
		                          <input type="text" name="email" placeholder=" Số Điện Thoại" autocomplete="off" class="form-control placeholder-no-fix" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
								  <span class="help-block" style="color: red;"><?= isset($error['email']) ? $error['email'] : ''; ?></span> 
		                      </div>
							  <div class="modal-body">
		                          <p>Nhập Mật Khẩu.</p>
		                          <input type="password" name="pass" placeholder="Nhập Mật Khẩu" autocomplete="off" class="form-control placeholder-no-fix" value="<?php echo isset($data['pass']) ? $data['pass'] : ''; ?>">
								  <span class="help-block" style="color: red;"><?= isset($error['pass']) ? $error['pass'] : ''; ?></span> 
		                      </div>
							  <div class="modal-body">
		                          <p>Nhập lại Mật Khẩu.</p>
		                          <input type="password" name="repass" placeholder="Nhập Mật Khẩu" autocomplete="off" class="form-control placeholder-no-fix" value="<?php echo isset($data['repass']) ? $data['repass'] : ''; ?>">
								  <span class="help-block" style="color: red;"><?= isset($error['repass']) ? $error['repass'] : ''; ?></span> 
		                      </div>
		                      <div class="modal-footer">
							  <?php if(isset($v)){ ?>
  									  <div class="alert alert-danger" style="text-align: right;"><?=$v?? null ?> </div>
  									 <?php } elseif (isset($h)) { ?>
  									  <div class="alert alert-success"><b> </b><?= $h ?? null  ?></div><?php } else { ?>
                                  <?= "" ?> <?php } ?>
		                      </div>
							  <div class="modal-footer">
		                          <button  class="btn btn-default" name="login"  type="submit">ĐĂNG NHẬP</button>
		                          <button class="btn btn-theme" name="dk">Đăng Ký</button>
		                      </div>
							  </form>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
