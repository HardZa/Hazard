<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="th">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ระบบใบรับรองการนำเข้า ครอบครอง ส่งออก และขึ้นทะเบียนวัตถุอันตราย</title>
	<link rel="shortcut icon" href="<?php echo resolveURIHeader("image/Hazard-favi-16.png")?>" type="image/png">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/dist/css/bootstrap.css");?>">
<!--	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/dist/css/bootstrap-theme.css");?>"> -->
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/non-responsive.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/signin.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("style/css_style.css");?>">

	<script type="text/javascript" src="<?php echo resolveURIHeader("lib/jquery/jquery-1.10.2.js");?>"></script>
	<script type="text/javascript" src="<?php echo resolveURIHeader("lib/bootstrap/dist/js/bootstrap.js");?>"></script>
	<script type="text/javascript" src="<?php echo resolveURIHeader("lib/jquery/jquery.printPage.js");?>"></script>
	<script type="text/javascript" src="<?php echo resolveURIHeader("lib/jquery/jquery.hotkeys.js");?>"></script>

	<script type="text/javascript">
	<!--
		$(document).ready(function(){
			$(".btnPrint").printPage();
		});
	-->
  	</script>
<?php include(resolveHeader('includes/hotkey_init.php')); ?>
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div style="margin:0px 0px 0px 40px">
        <a class="navbar-brand" href="<?php echo resolveURIHeader("/");?>">
          	<img src="<?php echo resolveURIHeader("image/logo.png");?>">
          	<?php if(User::is_session_exist()) {
          		echo "&nbsp;สวัสดี &nbsp;"; 
          		echo User::get_user()->get("userrealname");
          		if(User::get_user()->is_root())
          		{
          			echo "*";
          		}
          	} ?>
        </a>
    </div>
    <div class="collapse navbar-collapse pull-right">
 	    <ul class="nav navbar-nav">
       <!--     <li class="active"><a href="login">login</a></li> -->
			<?php
				$user = User::get_user();
				if( !isset($user) || $user == null ) {
			//		<li><a href="?php echo resolveURIHeader("login");?">ลงชื่อเข้าระบบ</a></li>
			?>
			<?php
				}
				else{
					if(User::get_user()->is_group('registrar')){
			?>			
						<li><a href="<?php echo resolveURIHeader("user");?>">รายชื่อผู้ใช้</a></li>
						<li><a href="<?php echo resolveURIHeader("register");?>">เพิ่มผู้ใช้</a></li>
                        <li><a href="<?php echo resolveURIHeader("profile");?>">แก้ไขข้อมูลส่วนตัว</a></li>
						<li><a href="<?php echo resolveURIHeader("logout");?>">ออกจากระบบ</a></li>
			<?php		
					}
					else if(User::get_user()->is_group('client')){
			?>
						<li><a href="<?php echo resolveURIHeader("request");?>">รายการคำร้อง</a></li>
						<li><a href="<?php echo resolveURIHeader("profile");?>">แก้ไขข้อมูลส่วนตัว</a></li>
						<li><a href="<?php echo resolveURIHeader("logout");?>">ออกจากระบบ</a></li>
			<?php		
					}
					else{
			?>
						<li><a href="<?php echo resolveURIHeader("request");?>">รายการคำร้อง</a></li>
                        <li><a href="<?php echo resolveURIHeader("profile");?>">แก้ไขข้อมูลส่วนตัว</a></li>
						<li><a href="<?php echo resolveURIHeader("logout");?>">ออกจากระบบ</a></li>
			<?php		
					}
				}
			?>
          </ul>
    </div>
</div>	
