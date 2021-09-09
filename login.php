<?php

session_start();
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

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="POST">
		        <h2 class="form-login-heading">ĐĂNG NHẬP</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="NHẬP SỐ ĐIỆN THOẠI ..." name="hoten" autofocus value="<?php echo isset($data['hoten']) ? $data['hoten'] : ''; ?>" />
		            <br>
		            <input type="password" class="form-control" placeholder="MẬT KHẨU ..." name="passw" value="<?php echo isset($data['passw']) ? $data['passw'] : ''; ?>" /> 
		            <label class="checkbox">
		            </label>
		            <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> DĂNG NHẬP</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p style="color: red;"><?=   $error ??  null; ?></p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Nếu bạn không có tài khản ?<br/>
		                <a class="" href="singin.php">
		                    Tạo Tài Khoản Mới
		                </a>
		            </div>
		
		        </div>
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
