<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Hazardous object tracking system</title>
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/dist/css/bootstrap.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/dist/css/bootstrap-theme.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/starter-template.css");?>">
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/bootstrap/signin.css");?>" >
	<link rel="stylesheet" href="<?php echo resolveURIHeader("lib/style/vg_style.css");?>" >

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

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo resolveURIHeader("");?>">Hazard</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
       <!--     <li class="active"><a href="login">login</a></li> -->
			<?php
				$user = User::get_user();
				if( !isset($user) || $user == null ) {
			?>
			<li><a href="<?php echo resolveURIHeader("login");?>">login</a></li>
			<li><a href="<?php echo resolveURIHeader("register.php");?>">register</a></li>
			<?php
				}else{
			?>
			<li><a href="<?php echo resolveURIHeader("user");?>">user</a></li>
			<li><a href="<?php echo resolveURIHeader("user/edit");?>">edit</a></li>
			<li><a href="<?php echo resolveURIHeader("logout");?>">logout</a></li>
			<?php
				}
			?>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">
	<div class="starter-template">