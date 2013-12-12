<div class="col-md-offset-1">
<div class="row">
	<div class="col-md-offset-4"><h3><b>คำขออนุญาตผลิตวัตถุอันตราย</b></h3></div>
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
	<div class="col-md-6"><b>สถานที่ผลิตวัตถุอันตราย ชื่อ</b> <?php echo doc('productname')?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>ตั้งอยู่เลขที่</b> <?php echo doc('producthouse')?></div>
	<div class="col-md-2"><b>หมู่ที่</b> <?php echo doc('productvillage')?></div>
	<div class="col-md-2"><b>ตรอก/ซอย</b> <?php echo doc('productdrive')?></div>
	<div class="col-md-3"><b>ถนน</b> <?php echo doc('productroad')?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>ตําบล/แขวง</b> <?php echo doc('productsubdistrict')?></div>
	<div class="col-md-3"><b>อําเภอ/เขต</b> <?php echo doc('productdistrict')?></div>
	<div class="col-md-3"><b>จังหวัด</b> <?php echo doc('productprovince')?></div>
</div>
<div class="row">
	<div class="col-md-3"><b>รหัสไปรษณีย์</b> <?php echo doc('productpostalcode')?></div>
	<div class="col-md-3"><b>โทรศัพท์</b> <?php echo doc('productphone')?></div>
	<div class="col-md-3"><b>โทรสาร</b><?php echo doc('productfax')?></div>
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
	<div class="col-md-11"><b>ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสําหรับการเก็บรักษา (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐ (๒) 
แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กําหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</b> 
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('storespecialist')?>
	<br>
	</div>
</div>
<div class="row">
	<div class="col-md-11"><i>(ในกรณีที่มีสถานที่เก็บรักษาวัตถุอันตรายมากกว่า ๑ แห่ง ให้ระบุรายละเอียดเพิ่มเติมด้านหลัง)</i></div>
</div>
<br>
<div class="row">
	<div class="col-md-7"><u><b>ขออนุญาตผลิตวัตถุอันตรายตามรายละเอียด ดังต่อไปนี้</b></u></div>
</div>
<div class="row">
	<div class="col-md-11"><b>ชื่อวัตถุอันตราย สูตรเคมี<sup>(๑)</sup> และอัตราส่วน</b> &nbsp;&nbsp;<?php echo doc('hazardname')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>ลักษณะและสูตร (Formulation)<sup>(๒)</sup></b> &nbsp;&nbsp;<?php echo doc('hazardformulation')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>ชื่อทางการค้า ( ถ้ามี )</b> &nbsp;&nbsp;<?php echo doc('businessname')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>ปริมาณ</b> &nbsp;&nbsp;<?php echo doc('quantity')?></div>
</div>
<div class="row">
	<div class="col-md-11"><b>หมายเหตุ</b> &nbsp;&nbsp;<?php echo doc('note')?></div>
</div>
<br>
<div class="row">
	<div class="col-md-11"><b>ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสําหรับการผลิต (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐ (๒)
แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กําหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</b>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('producerspecialist')?>
	</div>
</div>
<br>
	<div class="row">
		<div class="col-md-11"><b>พร้อมกันนี้ข้าพเจ้าได้ส่งมอบเอกสารประกอบคําขออนุญาต<sup>(๓)</sup> ดังต่อไปนี้ </b></div>
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
		<div class="col-md-11"><font size ="3">O</font> สําเนาใบสําคัญการขึ้นทะเบียนวัตถุอันตราย (ในกรณีที่ผู้ขออนุญาตผลิตได้ขึ้นทะเบียนไว้แล้ว) </div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> แผนที่สังเขปแสดงสถานที่ผลิตวัตถุอันตรายและบริเวณข้างเคียง</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> แผนที่สังเขปแสดงสถานที่เก็บรักษาวัตถุอันตรายและบริเวณข้างเคียง</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> แผนผังภายในของอาคารที่ใช้เป็นสถานที่ผลิตและสถานที่เก็บรักษาวัตถุอันตราย
ทั้งที่เป็นวัตถุดิบและผลิตภัณฑ์</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงกรรมวิธีการผลิต</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงความรู้ความชํานาญของผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสําหรับ
การผลิตและเก็บรักษา</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงลักษณะภาชนะบรรจุที่จะใช้และการหุ้มห่อหรือผูกมัดภาชนะบรรจุวัตถุอันตราย</div>
	</div>
	<div class="row">
		<div class="col-md-11"><font size ="3">O</font> เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย เช่น Materials  Safety  Data  Sheet </div>
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
	<div class="col-md-8 col-md-offset-1"> (๑)  วัตถุอันตรายในความรับผิดชอบของสํานักงานคณะกรรมการอาหารและยา กรมวิชาการเกษตร
กรมประมง และกรมปศุสัตว์ไม่ต้องระบุสูตรเคมี</div>
	<div class="col-md-8 col-md-offset-1">(๒)  วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรมไม่ต้องระบุสูตร (Formulation) </div>
	<div class="col-md-8 col-md-offset-1">(๓)  เอกสารประกอบคําขออนุญาตดังกล่าวข้างต้นต้องแนบเฉพาะการขออนุญาตครั้งแรก หรือในกรณี
ที่เอกสารประกอบคําขออนุญาตมีการเปลี่ยนแปลงข้อความไปจากฉบับเดิมที่ได้เคยมอบไว้</div>
	<div class="col-md-8 col-md-offset-1">(๔)  ให้ใส่เครื่องหมาย <b>/</b> ในช่อง <b>X</b> หน้าข้อความที่ต้องการ</div>
</div>
<div class="row">
	<br>
	<div class="col-md-13">-------------------------------------------------------------------------------------------------------------------------------------------------------------</div>
	<br>
</div>
<div class="row">
	<div class="col-md-11"><b>สถานที่เก็บรักษาวัตถุอันตรายแห่งที่๒ ชื่อ </b></div>
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
	<div class="col-md-3"><b>โทรสาร</b><?php echo doc('storefax')?></div>
</div>

<br>


<div class="row">
	<div class="col-md-11"><b>ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสําหรับการผลิต (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐ (๒)
แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กําหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</b>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;<?php echo doc('producerspecialist')?>
	</div>
</div>
<div class="row">
	<div class="col-md-11">(ในกรณีที่มีสถานที่เก็บรักษาวัตถุอันตรายมากกว่า ๒ แห่ง ให้ทําเป็นเอกสารแนบ) </div>
</div>


<br>


</div>