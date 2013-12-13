<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
?>
<div class="page-header">
    <h1>คำขออนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย</h1>
</div>
<form class="form-horizontal" role="form" method="get" action="">
	<div class="form-group">
    	<label class="col-sm-4">สถานที่เก็บวัตถุอันตราย</label>
 	</div>
 	<div class="form-group" >
    	<label for="storename" class="col-sm-4 control-label">ชื่อ</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storename" name="storename" placeholder="ชื่อ" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storehouse" class="col-sm-4 control-label">ตั้งอยู่เลขที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storehouse" name="storehouse" placeholder="เลขที่" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storevillage" class="col-sm-4 control-label">หมู่ที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storevillage" name="storevillage" placeholder="หมู่ที่" >
    	</div>
  	</div>
    <div class="form-group" >
      <label for="storedrive" class="col-sm-4 control-label">ตรอก/ซอย</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="storedrive" name="storedrive" placeholder="ตรอก/ซอย" >
      </div>
    </div>
  	<div class="form-group" >
    	<label for="storeroad" class="col-sm-4 control-label">ถนน</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storeroad" name="storeroad" placeholder="ถนน" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storesubdistrict" class="col-sm-4 control-label">ตำบล/แขวง</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storesubdistrict" name="storesubdistrict" placeholder="ตำบล/แขวง" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storedistrict" class="col-sm-4 control-label">อำเภอ/เขต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storedistrict" name="storedistrict" placeholder="อำเภอ/เขต" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storeprovince" class="col-sm-4 control-label">จังหวัด</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storeprovince" name="storeprovince" placeholder="จังหวัด" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storepostalcode" class="col-sm-4 control-label">รหัสไปรษณีย์</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storepostalcode" name="storepostalcode" placeholder="รหัสไปรษณีย์" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storephone" class="col-sm-4 control-label">โทรศัพท์</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storephone" name="storephone" placeholder="โทรศัพท์" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storefax" class="col-sm-4 control-label">โทรสาร</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storefax" name="storefax" placeholder="โทรสาร" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storespecialist" class="col-sm-12">ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา/การใช้รับจ้าง(ในกรณีที่มีประกาศฯออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storespecialist" name="storespecialist" placeholder="ชื่อผู้เชี่ยวชาญ" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="purpose" class="col-sm-8">ขออนุญาติมีไว้ครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ในการครอบครองเพื่อ</label>
    	<div class="col-sm-12">
    		<div class="col-sm-4">
      		<label class="radio-inline">
		    	<input type="radio" name="purpose" id="purpose" value="ขาย" checked>ขาย
			</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="purpose" id="purpose" value="ขนส่ง">ขนส่ง
		  	</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="purpose" id="purpose" value="ใช้">ใช้
		  	</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="purpose" id="purpose" value="อื่นๆ">อื่นๆ(ระบุ)
		  	</label>
		  	</div>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" id="purpose" name="purpose" placeholder="(ระบุ)" >
    		</div>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="certidref" class="col-sm-4 control-label">ทะเบียนเลขที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="certidref" name="certidref" placeholder="ทะเบียนเลขที่" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="quantity" class="col-sm-4 control-label">ปริมาณการครอบครองรวมสูงสุด</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="quantity" name="quantity" placeholder="ปริมาณสูงสุด" >
    	</div>
  	</div>
    <div class="form-group" >
      <label for="area" class="col-sm-4 control-label">พื้นที่เฉพาะในส่วนของการครอบครองรวมสูงสุด</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="area" name="area" placeholder="ตารางเมตร" >
      </div>
    </div>
  	<div class="form-group">
    	<label class="col-sm-10">พร้อมกันนี้ข้าพเจ้าได้ส่งมอบเอกสารประกอบคำขออนุญาต ดังต่อไปนี้</label>
 	</div>
 	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- หลักฐานแสดงการได้วัตถุอันตรายไว้ในครอบครอง
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- รายชื่อวัตถุอันตรายที่มีไว้ครอบครองในกรณีที่มีมากกว่าหนึ่งรายการ
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- แผนที่สังเขปแสดงสถานที่เก็บรักษาวัตถุอันตรายและบริเวณข้างเคียง
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- แผนผังภายในของอาคารที่ใช้เป็นสถานที่เก็บรักษาวัตถุอันตราย(ในกรณีที่มีประกาศฯออกตามความในมาตรา ๒๐ (๑) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ ให้สถานที่เก็บรักษาวัตถุอันตรายต้องเป็นไปตามหลักเกณฑ์ที่กำหนด)
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- เอกสารแสดงความรู้ความชำนาญของผู้เชี่ยวชาญหรือบุคากรเฉพาะรับผิดชอสำหรับการเก็บรักษา
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- เอกสารแสดงระบบ/กรรมวิธี การป้องกัน และอุปกรณ์ในการบรรเทาความรุนแรงของอุบัติภัยของสถานที่เก็บรักษาวัตถุอันตราย
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- เอกสารแสดงวิธีการเก็บรักษาวัตถุอันตราย
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย เช่น Materials Satety Data Sheet 
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-10 col-sm-offset-1">
    		- อื่นๆ(ถ้ามี)
  		</label>
  	</div>
  	<div class="form-group">
    	<label class="col-sm-10">มาเพื่อประกอบการพิจารณา</label>
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