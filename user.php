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
		$user->set( 'userrealname' , Input::post('name')  );
		$user->save();
	}
	else
	{
		$error = $validate->errors();
	}
 }

 ?>
 <h1>User Page</h1>

<?php if( $user == null ){ ?> 
		You're not logged in.
<?php } else {
		
		
		if(Input::get('edit')==1)
		{
		if( $error != null )
		{
			foreach( $error as $err_msg )
			{
				echo "error : $error<br>";
			}
		}
?>
		
		 <form class="form-horizontal" method="post" action="" role="form">
			<div class="form-group">
				<label for="username" class="col-sm-offset-1 col-sm-2 control-label">Username</label>
				<div class="col-sm-6">
					<input type="text" name="username" class="form-control" autocomplete="off" value="<?php echo $user->get('username'); ?>" id="username" disabled>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-offset-1 col-sm-2 control-label">Name</label> 
				<div class="col-sm-6">
					<input type="text" name="name" class="form-control" value="<?php echo $user->get('userrealname'); ?>" id="name">
				</div>
			</div>
			<input type="submit" value="Edit" class="btn btn-success">
		 </form>
		
<?php 
		
		}
	}		

include(resolveHeader('includes/footer.php'));
 ?>