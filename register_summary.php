  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

 $registype = array('client'=>'เอกชน','hazcontrol'=>'เจ้าหน้าที่ควบคุมวัตถุอันตราย','plantprotection'=>'เจ้าหน้าที่สำนักอารักขาพืช','agriproduction'=>'เจ้าหน้าที่สำนักปัจจัยการผลิต','cashier'=>'เจ้าหน้าที่การเงิน'); 


 ?>

ประเภทผู้ใช้ 
<?php
echo  $registype[Input::post('regis_type')];
?>
 
 <br/>
ชื่อล็อกอิน: <?php echo Input::post('username'); ?> <br/>
รหัสผ่าน: <?php echo Input::post('password'); ?> <br/>
ชื่อ-สกุล: <?php echo Input::post('name'); ?> <br/>

<?php
	if(Input::post('regis_type') == 'client')
	{
?>
	วัน-เดือน-ปี เกิด:  <?php echo Input::post('userbirthdate'); ?> <br/>
	สัญชาติ:  <?php echo Input::post('usernationality'); ?> <br/>
	ลขประจำตัวผู้เสียภาษี:  <?php echo Input::post('usertaxid'); ?> <br/>
	บ้านเลขที่:  <?php echo Input::post('useraddrhouse'); ?> <br/>
	หมู่ที่:  <?php echo Input::post('useraddrvillage'); ?> <br/>
	ตรอก/ซอย:  <?php echo Input::post('userdrive'); ?> <br/>
	ถนน:  <?php echo Input::post('useraddrroad'); ?> <br/>
	ตำบล/แขวง:  <?php echo Input::post('usersubdistrict'); ?> <br/>
	จังหวัด:  <?php echo Input::post('userprovince'); ?> <br/>
	รหัสไปรษณีย์ :  <?php echo Input::post('userpostalcode'); ?> <br/>
	หมายเลขโทรศัพท์:  <?php echo Input::post('userphone'); ?> <br/>
	หมายเลขโทรสาร:  <?php echo Input::post('userfax'); ?> <br/>
<?php
	}


 include(resolveHeader('includes/footer.php'));
 ?>