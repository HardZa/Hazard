<div class="col-md-offset-1">
<div class="row">
	<div class="col-md-offset-3"><h3><b>คําขออนุญาตผลิตหรือนําเข้าตัวอย่างวัตถุอันตราย</b></h3></div>
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
	<div class="col-md-5"><b>สถานที่ติดต่อผู้ขออนุญาต ตั้งอยู่เลขที่ </b> <?php echo doc('addrhouse');?></div>
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
	<div class="col-md-3"><b>มีความประสงค์จะขออนุญาต</b> </div>
	<div class="col-md-2"><font size ="3">O</font>&nbsp;&nbsp; นำเข้า </div>
	<div class="col-md-2"><font size ="3">O</font>&nbsp;&nbsp; ผลิต </div>
	<div class="col-md-4"><b>ตัวอย่างวัตถุอันตรายเพื่อใช้ในการขึ้นทะเบียน</b> </div>
</div>
<br>
<div class="row">
	<div class="col-md-6"><b>ชื่อและที่อยู่ของสถานที่ผลิต/เก็บรักษาวัตถุอันตราย ชื่อ</b> <?php echo doc('storename')?></div>
</div>
<div class="row">
	<div class="col-md-5"><b>ตั้งอยู่เลขที่</b> <?php echo doc('storehouse')?></div>
	<div class="col-md-3"><b>หมู่ที่</b> <?php echo doc('storevillage')?></div>
	<div class="col-md-3"><b>ตรอก/ซอย</b> <?php echo doc('storedrive')?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>ถนน</b> <?php echo doc('storeroad')?></div>
	<div class="col-md-3"><b>ตําบล/แขวง</b> <?php echo doc('storesubdistrict')?></div>
	<div class="col-md-3"><b>อําเภอ/เขต</b> <?php echo doc('storedistrict')?></div>
</div>
<div class="row">
	<div class="col-md-2"><b>จังหวัด</b> <?php echo doc('storeprovince')?></div>
	<div class="col-md-3"><b>รหัสไปรษณีย์</b> <?php echo doc('storepostalcode')?></div>
	<div class="col-md-3"><b>โทรศัพท์</b> <?php echo doc('storephone')?></div>
	<div class="col-md-3"><b>โทรสาร</b> <?php echo doc('storefax')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>E-mail address</b> <?php echo doc('storeemail')?></div>
</div>
<br>

<div class="row">
	<div class ="col-md-11"><b>โดยมีรายละเอียดดังนี้</b></div>
</div>

<div class="row">
	<div class="col-md-offset-1">
		<div class="col-md-11"><b>๑. ชื่อวัตถุอันตราย </b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('hazardname')?></div>
		<div class="col-md-11"><b>๒. สูตรอัตราส่วนผสมของสารสําคัญและลักษณะ </b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('hazardformulation')?></div>
		<div class="col-md-11"><b>๓. ชื่อทางการค้าหรือหมายเลขรหัส </b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('businessname')?></div>
		<div class="col-md-11"><b>๔. ชื่อผู้ผลิตและแหล่งผลิต </b>&nbsp;&nbsp;&nbsp;&nbsp;<b>ชื่อ</b> <?php echo doc('producer')?> <b>ผลิตที่</b> <?php echo doc('productname')?></div>
		<div class="col-md-11"><b>๕. ชื่อผู้นำเข้า</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('importer')?></div>
		<div class="col-md-11"><b>๖. ปริมาณ</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('quantity')?></div>
		<div class="col-md-11"><b>๗. เอกสารและตัวอย่างที่ต้องส่งประกอบการขออนุญาต</b></div>
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
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> แผนการทดลองประสิทธิภาพและพิษตกค้าง</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย</div>
		</div>
		<div class="row">
			<div class="col-md-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="3">O</font> อื่นๆ  (ระบุ)………………………………………………………………………</div>
		</div>
	</div>
	</div>		
</div>

<br>
<div class="row">
	<div class="col-md-5 col-md-offset-6"><b>( ลายมือชื่อ ) ……………………………… ผู้ขออนุญาต</b></div>
</div>
<br>
</div>