<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
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
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
</div>

<?php 
	if(!User::is_session_exist())
	{	
?>
	 <input class="btn btn-lg btn-success btn-block" type="button" value="Login as Client" onclick="parent.location='fakelogin.php?user=test_client'"> 
	 <input class="btn btn-lg btn-primary btn-block" type="button" value="Login as Hazard Control Officer" onclick="parent.location='fakelogin.php?user=test_hazcontrol'"> 
	 <input class="btn btn-lg btn-warning btn-block" type="button" value="Login as Plant Protection Officer" onclick="parent.location='fakelogin.php?user=test_plantprotection'"> 
	 <input class="btn btn-lg btn-warning btn-block" type="button" value="Login as หน่วยผลิต" onclick="parent.location='fakelogin.php?user=test_agriproduction'"> 
	 <input class="btn btn-lg btn-danger btn-block" type="button" value="Login as Cashier" onclick="parent.location='fakelogin.php?user=test_cashier'"> 
	 <input class="btn btn-lg btn-info btn-block" type="button" value="Login as Registrar" onclick="parent.location='fakelogin.php?user=test_registrar'"> 
<?php
 	}
 	include(resolveHeader('includes/footer.php'));
?>
