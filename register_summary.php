  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

 $registype = array('client'=>'เอกชน','hazcontrol'=>'เจ้าหน้าที่ควบคุมวัตถุอันตราย','plantprotection'=>'เจ้าหน้าที่สำนักอารักขาพืช','agriproduction'=>'เจ้าหน้าที่สำนักปัจจัยการผลิต','cashier'=>'เจ้าหน้าที่การเงิน'); 

 ?>

<div class="page-header">
    <h1>ผลการลงทะเบียน</h1>
</div>

<div class="form-horizontal">
	<div class="form-group">
    	<label class="col-sm-3 control-label">ประเภทผู้ใช้</label>
    	<label class="col-sm-3 radio-inline"><?php echo  $registype[Input::post('regis_type')]; ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">ชื่อล็อกอิน</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('username'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">รหัสผ่าน</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('password'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">ชื่อ-สกุล</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('name'); ?><label>
  	</div>

<?php
	if(Input::post('regis_type') == 'client')
	{
?>
	<div class="form-group">
    	<label class="col-sm-3 control-label">วัน-เดือน-ปี เกิด</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('userbirthdate'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">สัญชาติ</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('usernationality'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">บ้านเลขที่</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('useraddrhouse'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">หมู่ที่</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('useraddrvillage'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">ตรอก/ซอย</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('userdrive'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">ถนน</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('useraddrroad'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">ตำบล/แขวง</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('usersubdistrict'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">จังหวัด</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('userprovince'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">รหัสไปรษณีย์</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('userpostalcode'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">หมายเลขโทรศัพท์</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('userphone'); ?><label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-3 control-label">หมายเลขโทรสาร</label>
    	<label class="col-sm-3 radio-inline"><?php echo Input::post('userfax'); ?><label>
  	</div>

<?php
	}
?>

</div>

<?php

 include(resolveHeader('includes/footer.php'));
 ?>