<div class="col-md-offset-1">
<div class="row">
	<div class="col-md-offset-4"><h3><b>คําขอขึ้นทะเบียนวัตถุอันตราย</b></h3></div>
</div>
<br><br>
<div class="row">
	<div class="col-md-offset-9"><?php echo "วัน ".doc('day')." เดือน ".doc('month')." ปี ".doc('year'); ?></div>
	<br>
</div>

<div class="row">
	<div class="col-md-offset-1 col-md-5"><b>ข้าพเจ้า</b> <?php echo doc('name'); ?></div>
	<div class="col-md-2"><b>อายุ</b> <?php echo doc('age'); ?><b> ปี</b></div>
	<div class="col-md-2"><b>สัญชาติ</b> <?php echo doc('nationality'); ?></div>
</div>
<div class="row">
	<div class="col-md-7"><b>เลขประจำตัวผู้เสียภาษีอากร</b> <?php echo doc('taxno'); ?></div>
</div>
<br>
<div class="row">
	<div class="col-md-5"><b>สถานที่ติดต่อผู้ขอขึ้นทะเบียน ตั้งอยู่เลขที่</b> <?php echo doc('addrhouse');?></div>
	<div class="col-md-3"><b>หมู่ที่</b> <?php echo doc('addrvillage'); ?></div>
	<div class="col-md-3"><b>ตรอก/ซอย</b> <?php echo doc('addrdrive'); ?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>ถนน</b> <?php echo doc('addrroad')?></div>
	<div class="col-md-3"><b>ตำบล/แขวง</b> <?php echo doc('addrsubdistrict')?></div>
	<div class="col-md-3"><b>อำเภอ/เขต</b> <?php echo doc('addrdistrict')?></div>
</div>
<div class="row">
	<div class="col-md-2"><b>จังหวัด</b> <?php echo doc('addrprovince')?></div>
	<div class="col-md-3"><b>รหัสไปรษณีย์</b> <?php echo doc('addrpostalcode')?></div>
	<div class="col-md-3"><b>โทรศัพท์</b> <?php echo doc('addrphone')?></div>
	<div class="col-md-3"><b>โทรสาร</b> <?php echo doc('addrfax')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>E-mail address</b> <?php echo doc('addremail')?></div>
</div>
<br>

<div class="row">
	<div class="col-md-3"><b>ขอขึ้นทะเบียนวัตถุอันตราย</b></div>
	<div class="col-md-3"><?php echo doc('group')?></div>
	<div class="col-md-5"><b>เพื่อ</b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('purposefirst')?></div>
</div>

<br>
<div class="row">
	<div class ="col-md-11"><b>โดยมีรายละเอียดดังนี้</b></div>
</div>

<div class="row">
	<div class="col-md-offset-1">
		<div class="col-md-11"><b>๑. ชื่อวัตถุอันตราย </b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('hazardname')?></div>
		<div class="col-md-11"><b>๒. สูตรอัตราส่วนผสมของสารสําคัญและลักษณะ </b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('hazardformulation')?></div>
		<div class="col-md-11"><b>๓. ชื่อทางการค้าหรือหมายเลขรหัส </b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('businessname')?></div>
		<div class="col-md-11"><b>๔. ชื่อผู้ผลิตและแหล่งผลิต </b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('producer')?> <!-- <b>จาก</b> <?php //echo doc('productname')?>--></div>
		<div class="col-md-11"><b>๕. ชื่อผู้นําเข้า</b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('importer')?></div>
		<div class="col-md-11"><b>๖. ชื่อผู้จําหน่าย/ผู้จัดจําหน่าย</b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('saleman')?></div>
		<div class="col-md-11"><b>๗. ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ พร้อมทั้งขนาดบรรจุ</b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('container')?></div>
		<div class="col-md-11"><b>๘. ประเภทของการใช้</b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('purpose')?></div>
		<div class="col-md-11"><b>๙. เอกสารและตัวอย่างที่ต้องส่งประกอบการขึ้นทะเบียน</b></div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> สําเนาบัตรประจําตัวประชาชน/สําเนาใบสําคัญประจําตัวคนต่างด้าว</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> สําเนาหนังสือรับรองการจดทะเบียนเป็นนิติบุคคล</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> หนังสือมอบอํานาจ (กรณีที่มีการมอบอํานาจ)</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> รายการข้อมูลเพื่อการขึ้นทะเบียนวัตถุอันตราย ตามที่กรมวิชาการเกษตรประกาศกําหนด
จํานวน 6 ชุด </div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> แผนการทดลองประสิทธิภาพ และพิษตกค้าง จํานวน 6 ชุด</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> ตัวอย่างเอกสารหรือภาพถ่ายแสดงลักษณะหีบห่อหรือภาชนะบรรจุ</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> ตัวอย่างฉลากและใบแทรก</div>
		</div>	
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> รายงานผลการวิเคราะห์ตัวอย่างวัตถุอันตราย</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> อื่นๆ  (ระบุ)………………………………………………………………………</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-5 col-md-offset-6"><b>( ลายมือชื่อ ) <u><?php echo doc('name')?></u> ผู้ขออนุญาต</b></div>
</div>
</div>