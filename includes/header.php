<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ระบบใบรับรองการนำเข้า ครอบครอง ส่งออก และขึ้นทะเบียนวัตถุอันตราย</title>
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/dist/css/bootstrap.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/dist/css/bootstrap-theme.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/non-responsive.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/signin.css");?>" >
	<link rel="stylesheet" href="<?php echo resolveURIHeader("style/vg_style.css");?>" >

	<script src="<?php echo resolveURIHeader("lib/jquery/jquery-1.10.2.js");?>"></script>
	<script src="<?php echo resolveURIHeader("lib/bootstrap/dist/js/bootstrap.js");?>"></script>
	<script src="<?php echo resolveURIHeader("lib/jquery/jquery.printPage.js");?>"></script>

	<script>  
  	$(document).ready(function(){
    	$(".btnPrint").printPage();
  	});
  	</script>
</head>

<body>
<div class="orange-container">
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="<?php echo resolveURIHeader("/");?>">
	          	<img src="<?php echo resolveURIHeader("image/cl-logo-32p.png");?>"></img>
	          	<?php if(User::is_session_exist()) echo User::get_user()->get("username"); ?>
	          </a>
	        </div>
	        <div class="collapse navbar-collapse pull-right">
	          <ul class="nav navbar-nav">
	       <!--     <li class="active"><a href="login">login</a></li> -->
				<?php
					$user = User::get_user();
					if( !isset($user) || $user == null ) {
				?>
				<li><a href="<?php echo resolveURIHeader("login");?>">ลงชื่อเข้าระบบ</a></li>
				<?php
					}else{
				?>
				<li><a href="<?php echo resolveURIHeader("user");?>">หน้าของฉัน</a></li>
				<li><a href="<?php echo resolveURIHeader("user/edit");?>">แก้ไขบัญชี</a></li>
				<li><a href="<?php echo resolveURIHeader("logout");?>">ออกจากระบบ</a></li>
				<?php
					}
				?>
	          </ul>
	        </div><!--/.nav-collapse --> 
	    </div>
	</div>	
