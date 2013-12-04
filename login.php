 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

 $user = User::get_user();
 
 $error_msg = '';
 
 if( $user == null && Input::exists() )
 {
 
	$validate = new Validate();
	$validate->check($_POST,array(
		"username" => array(
			"required"=>true,
			"min"=>6,
			"max"=>30
		),
		"password" => array(
			"required"=>true,
			"min"=>6,
			"max"=>20
		)
	));
	
	if($validate->passed())
	{
		try
		{
			$user = User::auth( Input::get('username') , Input::get('password') );
		}catch(Exception $e )
		{
			$error_msg .= $e->getMessage()."<br>";
		}
		
	}else{
		foreach($validate->errors() as $e)
		{
			$error_msg .= $e."<br>";
		}
	}
 
 }
 
 ?>
 
 <?php include(resolveHeader('menu_test.php')); ?>
 
 <?php
if( $user == null )
{
?>

<?php
	if( $error_msg != '' )
	{
		echo $error_msg;
	}
?>
 
 <form method="post" action="">
	 Username : <input type="text" name="username" autocomplete="off"><br>
	 Password : <input type="password" name="password"><br>
	<input type="submit" value="Login">
 </form>
 
 <?php } 
 else {
 ?>
 
 Already Login :)
 
 <?php } ?>
 
 
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>