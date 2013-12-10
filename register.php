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

	<div class="form-group">
		<label for="userid"  class="col-sm-offset-1 col-sm-2 control-label">User's id</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="userid" id="userid">
		</div>
	</div>

	<div class="form-group">
		<label for="userbirthdate"  class="col-sm-offset-1 col-sm-2 control-label">User's BirthDate</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="userbirthdate" id="userbirthdate">
		</div>
	</div>
	<div class="form-group">
		<label for="usernationality"  class="col-sm-offset-1 col-sm-2 control-label">User's Nationality</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="usernationality" id="usernationality">
		</div>
	</div>
	<div class="form-group">
		<label for="usertaxid"  class="col-sm-offset-1 col-sm-2 control-label">User's Tax id</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="usertaxid" id="usertaxid">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrhouse"  class="col-sm-offset-1 col-sm-2 control-label">User's house address</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrhouse" id="useraddrhouse">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrvillage"  class="col-sm-offset-1 col-sm-2 control-label">User's village address</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrvillage" id="useraddrvillage">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrdrive"  class="col-sm-offset-1 col-sm-2 control-label">User's drive number</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrdrive" id="useraddrdrive">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrroad"  class="col-sm-offset-1 col-sm-2 control-label">User's Addr road</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrroad" id="useraddrroad">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrsubdistrict"  class="col-sm-offset-1 col-sm-2 control-label">User's Addr Subdistrict</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrsubdistrict" id="useraddrsubdistrict">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrdistrict"  class="col-sm-offset-1 col-sm-2 control-label">User's Addr District</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrdistrict" id="useraddrdistrict">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrprovince"  class="col-sm-offset-1 col-sm-2 control-label">User's Addr Province</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrprovince" id="useraddrprovince">
		</div>
	</div>
	<div class="form-group">
		<label for="useraddrpostalcode"  class="col-sm-offset-1 col-sm-2 control-label">User's Addr Postalcode</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useraddrpostalcode" id="useraddrpostalcode">
		</div>
	</div>
	<div class="form-group">
		<label for="userphone"  class="col-sm-offset-1 col-sm-2 control-label">User Phone</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="userphone" id="userphone">
		</div>
	</div>
	<div class="form-group">
		<label for="userfax"  class="col-sm-offset-1 col-sm-2 control-label">User Fax</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="userfax" id="userfax">
		</div>
	</div>
	<div class="form-group">
		<label for="useremail"  class="col-sm-offset-1 col-sm-2 control-label">User Email</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="useremail" id="useremail">
		</div>
	</div>

	<input type="submit" value="Register" class="btn btn-success">
 </form>
 
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>