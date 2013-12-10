  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));


 ?>
 
 <h1>Hazard System : Home Page</h1>
<?php
	if(!User::is_session_exist())
	{

?>
	 <input class="btn btn-lg btn-success btn-block" type="button" value="Login as Client" onclick="parent.location='fakelogin.php?user=test_client'"> 
	 <input class="btn btn-lg btn-primary btn-block" type="button" value="Login as Hazard Control Officer" onclick="parent.location='fakelogin.php?user=test_hazcontrol'"> 
	 <input class="btn btn-lg btn-warning btn-block" type="button" value="Login as Plant Protection Officer" onclick="parent.location='fakelogin.php?user=test_plantprotection'"> 
	 <input class="btn btn-lg btn-danger btn-block" type="button" value="Login as Cashier" onclick="parent.location='fakelogin.php?user=test_cashier'"> 
	 <input class="btn btn-lg btn-info btn-block" type="button" value="Login as Registrar" onclick="parent.location='fakelogin.php?user=test_registrar'"> 
 <?php
	}
 include(resolveHeader('includes/footer.php'));
 ?>