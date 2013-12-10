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


$user = User::get_user();
if($user->is_group("registrar"))
{
    ?>
    
    <input type="button" value="เพิ่มผู้ใช้ใหม่" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="จัดการผู้ใช้ในระบบ" class="btn btn-success" onclick="parent.location='register.php'">

    <?php

}
else if($user->is_group("client"))
{
    ?>
    
    <input type="button" value="ขออนุญาตผลิตวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขออนุญาตนำเข้าวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขออนุญาตส่งออกวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขออนุญาตครอบครองวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขอขึ้นทะเบียนวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขอต่ออายุทะเบียนวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    
    <?php

}
else if($user->is_group("hazcontrol"))
{
	?>

	<input type="button" value="แสดงคำร้องที่เข้ามาใหม่" class="btn btn-success" onclick="parent.location='register.php'">
	<br><br>
	<input type="button" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">
	<br><br>
	<input type="button" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">

	<?php

}
else if($user->is_group("plantprotection"))
{
	?>

	<input type="button" value="แสดงคำร้องที่เข้ามาใหม่" class="btn btn-success" onclick="parent.location='register.php'">
	<br><br>
	<input type="button" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">	
	<br><br>
	<input type="button" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">

	<?php

}
else if($user->is_group("agriproduction"))
{
	?>

	<input type="button" value="แสดงคำร้องที่เข้ามาใหม่" class="btn btn-success" onclick="parent.location='register.php'">
	<br><br>
	<input type="button" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">	
	<br><br>
	<input type="button" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">
	
	<?php

}
else if($user->is_group("cashier"))
{
	?>

	<input type="button" value="แสดงคำร้องใหม่ที่รอการชำระเงิน" class="btn btn-success" onclick="parent.location='register.php'">
	<br><br>
	<input type="button" value="แสดงคำร้องใหม่ที่รอการตรวจสอบหลักฐานชำระเงิน" class="btn btn-success" onclick="parent.location='register.php'">	
	<br><br>
	<input type="button" value="แสดงคำร้องใหม่ที่เกินกำหนดชำระเงิน" class="btn btn-success" onclick="parent.location='register.php'">

	<?php
}





















include(resolveHeader('includes/footer.php'));
 ?>