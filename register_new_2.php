<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
?>
<div class="page-header">
    <h1>คำขอต่ออายุใบสำคัญการขึ้นทะเบียนวัตถุอันตราย</h1>
</div>
<form class="form-horizontal" role="form" method="get" action="">
	<div class="form-group" >
    	<label for="hazardid" class="col-sm-6">มีความประสงค์จะขอต่ออายุใบสำคัญการขึ้นทะเบียนวัตถุอันตรายเลขที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="hazardid" name="hazardid" placeholder="วัตถุอันตรายเลขที" >
    	</div>
  	</div>
	<div class="form-group">
    	<label class="col-sm-6">พร้อมนี้ข้าพเจ้าได้แนบเอกสารเพื่อประกอบการพิจราณา ดังนี้</label>
 	</div>
 	<div class="form-group">
  	<label class="col-sm-8 col-sm-offset-1">
    	- รายการข้อมูลเพื่อการขึ้นทะเบียนวัตถุอันตราย ตามที่กรมวิชาการเกษตรประกาศกำหนด
  	</label>
  	</div>
  <div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    		- แผนการทดลองประสิทธิภาพและพิษตกค้าง(ถ้ามี)
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    	- ตัวอย่างเอกสารหรือภาพถ่ายแสดงลักษณะหีบห่อหรือภาชนะบรรจุ
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    	- ตัวอย่างฉลากและใบแทรก
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    	- รายงานผลการวิเคราะห์ตัวอย่างวัตถุอันตราย
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-2 col-sm-offset-1">- อื่นๆ (ถ้ามี)</label>
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