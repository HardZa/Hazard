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
		try
		{
			User::create( Input::post('username') , Input::post('password') , Input::post('name') );
			echo "ลงทะเบียนสำเร็จ";
		}
		catch(Exception $regiserror)
		{
			echo $regiserror->getMessage();
		}
		//Redirect::to("register_result.php");
	}else{
		foreach($validate->errors() as $error_msg)
		{
			echo $error_msg."<br>";
		}
	}
	
}
 
 ?>
 
 <form class="form-horizontal" method="post" action="" role="form" >
	<div class="form-group">
		<label for="username"  class="col-sm-offset-1 col-sm-2 control-label">Username</label>
		<div class="col-sm-6">
			<input class="form-control " type="text" name="username" autocomplete="off" id="username">
		</div>
	</div>
	<div class="form-group">
		<label for="password"  class="col-sm-offset-1 col-sm-2 control-label">Password</label>
		<div class="col-sm-6">
			<input class="form-control" type="password" name="password" id="password">
		</div>
	</div>
	<div class="form-group">
		<label for="name"  class="col-sm-offset-1 col-sm-2 control-label">Name</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="name" id="name">
		</div>
	</div>
	<input type="submit" value="Register" class="btn btn-success">
 </form>
 
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>