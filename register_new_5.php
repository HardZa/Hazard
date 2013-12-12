<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
?>

<div class="page-header">
    <h1>คำขออนุญาตนำเข้าวัตถุอันตราย</h1>
</div>

<form class="form-horizontal" role="form" method="get" action="สถานที่เก็บรักษาวัตถุอัตราย">
  <div class="form-group">
  			<label class="col-sm-offset-1">
    			สถานที่เก็บรักษาวัตถุอันตราย
  			</label>
  </div>
  <div class="form-group" >
    <label for="storehazardname" class="col-sm-4 control-label">ชื่อ</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardname" name="storehazardname" placeholder="ชื่อ" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrhouse" class="col-sm-4 control-label">ตั้งอยู่เลขที่</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrhouse" name="storehazardaddrhouse" placeholder="ตั้งอยู่เลขที่" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrvillage" class="col-sm-4 control-label">หมู่ที่</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrvillage" name="storehazardaddrvillage" placeholder="หมู่ที่" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrdrive" class="col-sm-4 control-label">ตรอก/ซอย</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrdrive" name="storehazardaddrdrive" placeholder="ตรอก/ซอย" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrroad" class="col-sm-4 control-label">ถนน</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrroad" name="storehazardaddrroad" placeholder="ถนน" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrsubdistrict" class="col-sm-4 control-label">ตำบล/แขวง</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrsubdistrict" name="storehazardaddrsubdistrict" placeholder="ตำบล/แขวง" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrdistrict" class="col-sm-4 control-label">อำเภอ/เขต</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrdistrict" name="storehazardaddrdistrict" placeholder="อำเภอ/เขต" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrprovince" class="col-sm-4 control-label">จังหวัด</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrprovince" name="storehazardaddrprovince" placeholder="จังหวัด" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrpostalcode" class="col-sm-4 control-label">รหัสไปรษณีย์</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrpostalcode" name="storehazardaddrpostalcode" placeholder="รหัสไปรษณีย์" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrphone" class="col-sm-4 control-label">โทรศัพท์</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrphone" name="storehazardaddrphone" placeholder="โทรศัพท์" >
    </div>
  </div>
  <div class="form-group" >
    <label for="storehazardaddrfax" class="col-sm-4 control-label">โทรสาร</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehazardaddrfax" name="storehazardaddrfax" placeholder="โทรสาร" >
    </div>
  </div>


  <div class="form-group" >
    <label for="specialstorehazardname" class="col-sm-4 control-label">ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา(ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐(๒)แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control" rows="5" id="specialstorehazardname" name="specialstorehazardname" placeholder="" ></textarea>

    </div>
  </div>
  <div class="form-group" >
    <label for="hazardmanufacture" class="col-sm-4 control-label">ประเทศที่ผลิต</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="hazardmanufacture" name="hazardmanufacture" placeholder="ประเทศที่ผลิต" >
    </div>
  </div>

<div class="form-group" >
    <label for="hazardimportquantity" class="col-sm-4 control-label">ปริมาณ</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="hazardimportquantity" name="hazardimportquantity" placeholder="ปริมาณ" >
    </div>
  </div>

<div class="form-group" >
    <label for="storehazardimportnote" class="col-sm-4 control-label">หมายเหตุ</label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control" rows="3" id="storehazardimportnote" name="storehazardimportnote" placeholder="หมายเหตุ" ></textarea>
    </div>
  </div>

  <div class="form-group">
  			<label class="col-sm-10">
    			พร้อมกันนี้ข้าพเจ้าได้ส่งมอบเอกสารประกอบคำอนุญาต ดังต่อไปนี้
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- สำเนาผลการวิเคราะห์วัตถุอันตราย
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- แผนที่สังเขปแสดงสถานที่เก็บรักษาวัตถุอันตรายและบริเวณใกล้เคียง
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- แผนผังภายในของอาคารที่ใช้เป็นสถานที่เก็บรักษาวัตถุอันตราย(ในกรณีที่ประกาศฯออกตามความในมาตรา ๒๐(๑)แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ ให้สถานที่เก็บรักษาวัตถุอันตรายต้องเป็นไปตามหลักเกณฑ์ที่กำหนด)
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- เอกสารแสดงความรู้ความชำนาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- เอกสารแสดงลักษณะภาชนะบรรจุที่จะใช้และการหุ้มห่อหรือผูกมัดภาชนะบรรจุวัตถุอันตราย
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย เช่น Masterials Safety Data Sheet
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- อื่นๆ (ระบุ)
  			</label>

  </div>
    <div class="form-group">
  			<label class="col-sm-10">
    			มาเพื่อประกอบการพิจารณาด้วย
  			</label>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">ส่งคำขอ</button>
    </div>
  </div>
</form>

<?php
 	include(resolveHeader('includes/footer.php'));
?>