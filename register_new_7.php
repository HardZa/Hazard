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
    	<label for="expertname" class="col-sm-12">ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา/การใช้รับจ้าง(ในกรณีที่มีประกาศฯออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="expertname" name="expertname" placeholder="ชื่อผู้เชี่ยวชาญ" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="expertname" class="col-sm-8">ขออนุญาติมีไว้ครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ในการครอบครองเพื่อ</label>
    	<div class="col-sm-12">
    		<div class="col-sm-4">
      		<label class="radio-inline">
		    	<input type="radio" name="hazardfor" id="hazardfor" value="ขาย" checked>ขาย
			</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="hazardfor" id="hazardfor" value="ขนส่ง">ขนส่ง
		  	</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="hazardfor" id="hazardfor" value="ใช้">ใช้
		  	</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="hazardfor" id="hazardfor" value="อื่นๆ">อื่นๆ(ระบุ)
		  	</label>
		  	</div>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" id="hazardfor_other" name="hazardfor_other" placeholder="(ระบุ)" >
    		</div>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="hazardnumber" class="col-sm-4 control-label">ทะเบียนเลขที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="hazardnumber" name="hazardnumber" placeholder="ทะเบียนเลขที่" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="quantity" class="col-sm-4 control-label">ปริมาณการครอบครองรวมสูงสุด</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="quantity" name="quantity" placeholder="ปริมาณสูงสุด" >
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