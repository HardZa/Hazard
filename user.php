 <?php
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

 ?>
 <h1>User Page</h1>

<?php if(! User::is_session_exist() ){ ?> 
		You're not logged in.
<?php } else {
		
	$user = User::get_user();
	if($user->is_group("registrar"))
	{
	    ?>
	    
	    <input type="button" value="เพิ่มผู้ใช้ใหม่" class="btn btn-success" onclick="parent.location='<?php echo resolveURIHeader('user/add'); ?>'">
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

}


include(resolveHeader('includes/footer.php'));
 ?>