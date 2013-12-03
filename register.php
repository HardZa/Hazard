 <?php
  
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 
 if(Input::Exists())
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
		),
		"name" => array(
			"required"=>true,
			"min"=>1,
			"max"=>30
		)
	));
	
	if($validate->passed())
	{
		echo "ลงทะเบียนสำเร็จ";
		//Redirect::to("register_result.php");
	}else{
		foreach($validate->errors() as $error_msg)
		{
			echo $error_msg."<br>";
		}
	}
	
}
 
 ?>
 
 <form method="post" action="">
	 Username : <input type="text" name="username" autocomplete="off"><br>
	 Password : <input type="password" name="password"><br>
	 Name : <input type="text" name="name"><br>
	<input type="submit" value="Register">
 </form>
 
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>