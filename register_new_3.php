<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
?>
<div class="page-header">
    <h1>คำขออนุญาตผลิตหรือนำเข้าตัวอย่างวัตถุอันตราย</h1>
</div>
<form class="form-horizontal" role="form" method="get" action="">
	<div class="form-group">
    	<label class="col-sm-4 control-label">มีความประสงค์จะขออนุญาต</label>
    	<div class="col-sm-2">
			<label class="radio-inline">
		    	<input type="radio" name="hazardtype" value="import" checked>นำเข้า
			</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="hazardtype" value="produce">ผลิต
		  	</label>
    	</div>
    	<label class="col-sm-4 control-label">ตัวอย่างวัตถุอันตรายเพื่อใช้ในการขึ้นทะเบียน
    	</label>
	</div> 
	<div class="form-group">
    	<label class="col-sm-4">ชื่อและที่อยู่ของสถานที่ผลิต/เก็บรักษาวัตถุอันตราย</label>
 	</div>
 		<div class="form-group" >
    	<label for="addrname" class="col-sm-4 control-label">ชื่อ</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrname" name="addrname" placeholder="ชื่อ" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrhouse" class="col-sm-4 control-label">ตั้งอยู่เลขที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrhouse" name="addrhouse" placeholder="เลขที่" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrvillage" class="col-sm-4 control-label">หมู่ที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrvillage" name="addrvillage" placeholder="หมู่ที่" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrroad" class="col-sm-4 control-label">ถนน</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrroad" name="addrroad" placeholder="ถนน" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrsubdistrict" class="col-sm-4 control-label">ตำบล/แขวง</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrsubdistrict" name="addrsubdistrict" placeholder="ตำบล/แขวง" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrdistrict" class="col-sm-4 control-label">อำเภอ/เขต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrdistrict" name="addrdistrict" placeholder="อำเภอ/เขต" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrprovince" class="col-sm-4 control-label">จังหวัด</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrprovince" name="addrprovince" placeholder="จังหวัด" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrpostalcode" class="col-sm-4 control-label">รหัสไปรษณีย์</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrpostalcode" name="addrpostalcode" placeholder="รหัสไปรษณีย์" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrphone" class="col-sm-4 control-label">โทรศัพท์</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrphone" name="addrphone" placeholder="โทรศัพท์" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addrfax" class="col-sm-4 control-label">โทรสาร</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addrfax" name="addrfax" placeholder="โทรสาร" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="addremail" class="col-sm-4 control-label">E-mail address</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="addremail" name="addremail" placeholder="E-mail" >
    	</div>
  	</div>

  	<div class="form-group">
    	<label class="col-sm-4">โดยมีรายละเอียดดังนี้</label>
 	</div>
 	<div class="form-group" >
    	<label for="hazardname" class="col-sm-4">๑. ชื่อวัตถุอันตราย</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="hazardname" name="hazardname" placeholder="ชื่อวัตถุอันตราย" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="solchem" class="col-sm-4" >๒. สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="solchem" name="solchem" placeholder="สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="businessname" class="col-sm-4" >๓. ชื่อทางการค้าหรือหมายเลขรหัส</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="businessname" name="businessname" placeholder="ชื่อทางการค้าหรือหมายเลขรหัส" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="producername" class="col-sm-4" >๔. ชื่อผู้ผลิตและแหล่งผลิต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="producername" name="producername" placeholder="ชื่อผู้ผลิตและแหล่งผลิต" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="importername" class="col-sm-4" >๕. ชื่อผู้นำเข้า</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="importername" name="importername" placeholder="ชื่อผู้นำเข้า" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="quantity" class="col-sm-4" >๖. ปริมาณ</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="quantity" name="quantity" placeholder="ปริมาณ" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label class="col-sm-6" >๗. เอกสารและตัวอย่างที่ต้องส่งประกอบการขออนุญาต</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-8 col-sm-offset-1">
    		- แผนการทดลองประสิทธิภาพและพิษตกค้าง
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-8 col-sm-offset-1">
    		- เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-8 col-sm-offset-1">
    		- อื่นๆ (ระบุ)
  		</label>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-offset-4 col-sm-10">
      		<button type="submit" class="btn btn-default">ส่งคำร้อง</button>
    	</div>
  	</div>
</form>

<?php
 	include(resolveHeader('includes/footer.php'));
?>
