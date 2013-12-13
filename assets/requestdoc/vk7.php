<div class="col-md-offset-1">
<div class="row">
	<div class="col-md-offset-3"><h3><b>คําขออนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย</b></h3></div>
</div>
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
	<div class="col-md-5"><b>สถานที่ติดต่อของข้าพเจ้าตั้งอยู่เลขที่</b> <?php echo doc('addrhouse');?></div>
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
<br>

<div class="row">
	<div class="col-md-6"><b>สถานที่เก็บรักษาวัตถุอันตราย ชื่อ</b> <?php echo doc('storename')?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>ตั้งอยู่เลขที่</b> <?php echo doc('storehouse')?></div>
	<div class="col-md-2"><b>หมู่ที่</b> <?php echo doc('storevillage')?></div>
	<div class="col-md-2"><b>ตรอก/ซอย</b> <?php echo doc('storedrive')?></div>
	<div class="col-md-3"><b>ถนน</b> <?php echo doc('storeroad')?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>ตําบล/แขวง</b> <?php echo doc('storesubdistrict')?></div>
	<div class="col-md-3"><b>อําเภอ/เขต</b> <?php echo doc('storedistrict')?></div>
	<div class="col-md-3"><b>จังหวัด</b> <?php echo doc('storeprovince')?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>รหัสไปรษณีย์</b> <?php echo doc('storepostalcode')?></div>
	<div class="col-md-3"><b>โทรศัพท์</b> <?php echo doc('storephone')?></div>
	<div class="col-md-3"><b>โทรสาร</b> <?php echo doc('storefax')?></div>
</div>
<br>
<div class="row">
	<div class="col-md-11"><b>ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสําหรับการเก็บรักษา/การใช้รับจ้าง (ในกรณีที่มีประกาศฯ ออกตาม
ความในมาตรา ๒๐ (๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กําหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</b> 
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('storespecialist')?>
	<br>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-11"><u><b>ขออนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ในการครอบครองเพื่อ</b></u></div>
</div>
<div class="row">
	<div class="col-md-10  col-md-offset-1"><?php echo doc('purpose')?></div>
	<!--
	<div class="col-md-2 col-md-offset-1"><font size ="3">O</font> ขาย</div>
	<div class="col-md-2"><font size ="3">O</font> ขนส่ง</div>
	<div class="col-md-2"><font size ="3">O</font> ใช้</div>
	<div class="col-md-4"><font size ="3">O</font>  อื่น ๆ  (ระบุ)  .................................. </div>
	-->
</div>
<br>
<div class="row">
	<div class="col-md-11"><b>ชื่อวัตถุอันตราย<sup>(๑)</sup> ที่ขออนุญาตมีไว้ในครอบครอง</b> &nbsp;&nbsp;<?php echo doc('hazardname')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>ชื่อทางการค้าของวัตถุอันตราย<sup>(๒)</sup>ที่ขออนุญาตมีไว้ในครอบครอง </b> &nbsp;&nbsp;<?php echo doc('businessname')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>ทะเบียนเลขที่ </b> &nbsp;&nbsp;<?php echo doc('hazardno')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>ปริมาณการครอบครองรวมสูงสุด</b> &nbsp;&nbsp;<?php echo doc('quantity')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>พื้นที่เฉพาะในส่วนของการครอบครองรวมสูงสุด </b> &nbsp;&nbsp;<?php echo doc('area')?> <b>ตารางเมตร</b></div>
</div>
<div class="row">
	<div class="col-md-11">(ถ้ามีหลายรายการให้ระบุว่า “ดังบัญชีรายชื่อแนบท้าย”) </div>
</div>

<br>
	<div class="row">
		<div class="col-md-11"><b>พร้อมกันนี้ข้าพเจ้าได้ส่งมอบเอกสารประกอบคําขออนุญาต <sup>(๓)</sup> ดังต่อไปนี้</b></div>
	</div>
	<div class="col-md-offset-1">
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> สําเนาบัตรประจําตัวประชาชน/สําเนาใบสําคัญประจําตัวคนต่างด้าว</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> สําเนาหนังสือรับรองการจดทะเบียนเป็นนิติบุคคล</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> สําเนาใบทะเบียนภาษีมูลค่าเพิ่ม ( ภ.พ. ๒๐ ) </div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> สําเนาใบสําคัญการขึ้นทะเบียนวัตถุอันตราย </div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> หลักฐานแสดงการได้วัตถุอันตรายไว้ในครอบครอง</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> รายชื่อวัตถุอันตรายที่มีไว้ในครอบครองในกรณีที่มีมากกว่าหนึ่งรายการ</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> แผนที่สังเขปแสดงสถานที่เก็บรักษาวัตถุอันตรายและบริเวณข้างเคียง</div>
	</div>	
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font>  แผนผังภายในของอาคารที่ใช้เป็นสถานที่เก็บรักษาวัตถุอันตราย (ในกรณีที่มีประกาศฯ
ออกตามความในมาตรา ๒๐ (๑) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ ให้สถานที่เก็บรักษาวัตถุอันตรายต้องเป็นไปตามหลักเกณฑ์ที่กําหนด) </div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงความรู้ความชํานาญของผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ
สําหรับการเก็บรักษา</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงระบบ/กรรมวิธีการป้องกัน และอุปกรณ์ในการบรรเทาความรุนแรงของ
อุบัติภัยของสถานที่เก็บรักษาวัตถุอันตราย</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงวิธีการเก็บรักษาวัตถุอันตราย</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย เช่น Materials Safety Data Sheet </div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> อื่น ๆ ( ระบุ) .……………………………………………………….. </div>
	</div>
</div>

<div class="row">
	<div class="col-md-11"><b>มาเพื่อประกอบการพิจารณาด้วย <sup>(๔)</sup></b></div>
</div>

<div class="row">
	<div class="col-md-5 col-md-offset-6"><b>( ลายมือชื่อ ) ……………………………… ผู้ขออนุญาต</b></div>
</div>

<div class="row">
	<div class="col-md-offset-1"><b><u>หมายเหตุ</u></b></div>
	<div class="col-md-8 col-md-offset-1">(๑)  วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรม ให้ระบุเฉพาะชื่อวัตถุอันตราย</div>
	<div class="col-md-8 col-md-offset-1">(๒)  วัตถุอันตรายในความรับผิดชอบของสํานักงานคณะกรรมการอาหารและยา ให้ระบุเฉพาะ
ชื่อทางการค้า </div>
	<div class="col-md-8 col-md-offset-1">(๓)  เอกสารประกอบคําขออนุญาตดังกล่าวข้างต้นต้องแนบเฉพาะการขออนุญาตครั้งแรก
หรือกรณีในที่เอกสารประกอบคําขออนุญาตมีการเปลี่ยนแปลงข้อความไปจากฉบับเดิมที่ได้เคยมอบไว้</div>
	<div class="col-md-8 col-md-offset-1">(๔)  ให้ใส่เครื่องหมาย <b>/</b> ในช่อง <b>X</b> หน้าข้อความที่ต้องการ</div>
</div>




<br>


</div>