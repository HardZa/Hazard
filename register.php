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
		User::create( Input::get('username') , Input::get('password') , Input::get('name') );
		//Redirect::to("register_result.php");
	}else{
		foreach($validate->errors() as $error_msg)
		{
			echo $error_msg."<br>";
		}
	}
	
}
 
 ?>
 
 <form class="form-horizontal" method="post" action=""  >
	<div class="form-group">
		<label for="username">Username</label>
		<input class="form-control" type="text" name="username" autocomplete="off" id="username">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input class="form-control" type="password" name="password" id="password">
	</div>
	<div class="form-group">
		<label for="name">Name</label>
		<input class="form-control" type="text" name="name" id="name">
	</div>
	<input type="submit" value="Register" class="btn btn-success">
 </form>
 
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>