 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 $user = User::get_user();
 $error = null;
 
 if( $user != null && Input::exists() )
 {
	$validate = new Validate();
	$validate->check( $_POST ,array(
		"name" => array(
			"required"=>true,
			"min"=>1,
			"max"=>30
		)
	));
	if( $validate->passed() )
	{
		$user->set( 'name' , Input::get('name')  );
		$user->save();
	}
	else
	{
		$error = $validate->errors();
	}
 }
 
 ?>

<? if( $user == null ){ ?> 
		You not login !
<? } else { ?>

<? 
		if( $error != null )
		{
			foreach( $error as $err_msg )
			{
				echo "error : $error<br>";
			}
		}
?>
		
		 <form method="post" action="">
			 Username : <input type="text" name="username" autocomplete="off" value="<? echo $user->get('username'); ?>" disabled><br>
			 Name : <input type="text" name="name"><br>
			<input type="submit" value="edit">
		 </form>
		
<? } ?>
 
  <?php
 include(resolveHeader('includes/footer.php'));
 ?>