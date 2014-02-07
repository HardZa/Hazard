<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
	if(!User::is_session_exist())
	{	
?>
	<div style="margin:55px;">
 	 <input class="btn btn-lg btn-success btn-block" type="button" value="ลงชื่อเป็น เอกชน" onclick="parent.location='fakelogin.php?user=test_client'"> 
 	 <input class="btn btn-lg btn-info btn-block" type="button" value="ลงชื่อเป็น เจ้าหน้าที่ตรวจเอกสาร" onclick="parent.location='fakelogin.php?user=test_documentchecker'"> 
	 <input class="btn btn-lg btn-primary btn-block" type="button" value="ลงชื่อเป็น กลุ่มควบคุมวัตถุอันตราย" onclick="parent.location='fakelogin.php?user=test_hazcontrol'"> 
	 <input class="btn btn-lg btn-warning btn-block" type="button" value="ลงชื่อเป็น สำนักอารักขาพืช" onclick="parent.location='fakelogin.php?user=test_plantprotection'"> 
	 <input class="btn btn-lg btn-default btn-block" type="button" value="ลงชื่อเป็น สำนักปัจจัยการผลิต" onclick="parent.location='fakelogin.php?user=test_agriproduction'"> 
	 <input class="btn btn-lg btn-danger btn-block" type="button" value="ลงชื่อเป็น การเงิน" onclick="parent.location='fakelogin.php?user=test_cashier'"> 
	 <input class="btn btn-lg btn-info btn-block" type="button" value="ลงชื่อเป็น เจ้าหน้าที่ทะเบียน" onclick="parent.location='fakelogin.php?user=test_registrar'">
	 <input class="btn btn-lg btn-success btn-block" type="button" value="ลงชื่อเป็น ROOT" onclick="parent.location='fakelogin.php?user=rootz'"> 
	</div>
<?php
	}
	include(resolveHeader('includes/footer.php'));
?>