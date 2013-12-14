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
			$user = User::auth( Input::post('username') , Input::post('password') );
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

<div class="home-container">
		<div class="front-card">
			<div class="front-welcome">
				<div class="hazard-img">
					<img src="<?php echo resolveURIHeader("image/docflow.png");?>"></img>
				</div>
				<div class="welcome-msg">
					<h1 style="font-size:20px; margin-bottom:30px;">ยินดีต้อนรับเข้าสู่ระบบจัดการวัตถุอันตราย</h1>
					<p style="margin-left:30px;">- สำหรับผู้ใช้ใหม่กรุณาติดต่อข้อรับบริการจากเจ้าหน้าที่ทะเบียน</p>
					<p style="margin-left:30px;">- สำหรับผู้ใช้เดิมกรุณาลงชื่อเข้าใช้ระบบ</p>
				</div>
			</div>
			<div class="front-signin">
				<form method="post" action="">
					<div class="username">
						<input class="form-control" placeholder="Username / ชื่อผู้ใช้" type="text" name="username" autocomplete="off" autofocus="" required="">
					</div>
					<table>
						<tbody>
							<tr>
								<td>
									<div class="password">
										<input type="password" name="password" required="" class="form-control" placeholder="Password / รหัสผ่าน">
									</div>
								</td>
								<td>
									<div>	
										<button type="submit" value="Login" class="btn btn-warning">เข้าสู่ระบบ</button>
										<!-- <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"> -->
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
</div>

<?php } 
 else {
	Redirect::to('user');
 ?>
 
 Already Login :)
 
 <?php } ?>

<?php
 	include(resolveHeader('includes/footer.php'));
?>
