<?php
require_once('../../core/init.php');
?>
<html>
<style type="text/css">
span.left {
position: absolute;
left: 0;
}
span.right {
position: absolute;
right: 0;
}
div.line {
position: relative;
text-align: center;
width: 100%;
}
span.box_1 {
display:inline-block;
background-color:#999;
width:50px;
}
span.box_2 {
display:inline-block;
background-color:#999;
width:100px;
}
span.box_3 {
display:inline-block;
background-color:#999;
width:150px;
}
span.box_4 {
display:inline-block;
background-color:#999;
width:200px;
}
span.box_5 {
display:inline-block;
background-color:#999;
width:250px;
}
span.box_6 {
display:inline-block;
background-color:#999;
width:300px;
}
span.box_7 {
display:inline-block;
background-color:#999;
width:350px;
}
span.box_8 {
display:inline-block;
background-color:#999;
width:400px;
}
span.box_9 {
display:inline-block;
background-color:#999;
width:450px;
}
span.box_10 {
display:inline-block;
background-color:#999;
width:500px;
}
div.text {
position: absolute;
left: 40;
right: 40;
font-size: 100%;
}
</style>
<body>

<div align = 'center'>
	<img src='<?php echo resolveURIHeader("/image/krut.jpg"); ?>' width = '70'>
<div/>
<div align="center">ใบอนุญาติมีไว้ในครอบครองซึ่งวัตถุอันตราย</div>
<div style="font-size:15px">
	<div>
		<span class="left">ใบอนุญาติเลขที่ <?php echo Input::get("certificate_no"); ?>
		</span>

		<span class="right">
			<div align="left">
				กรม/สำนักงาน <?php echo Input::get("department"); ?>
			</div>
			<div align="left">
				กระทรวง <?php echo Input::get("ministry"); ?>
			</div>
			<div align="left">
				วันที่ <?php echo Input::get("day"); ?>
				เดือน <?php echo Input::get("month"); ?>
				พ.ศ. <?php echo Input::get("year"); ?>
			</div>
		</span>
	</div>
	<br><br><br>
	<span class="left">
		อนุญาตให้ 
		<span class="box_8"><?php echo Input::get("name"); ?></span>
		สัญชาติ
		<span class="box_2"><?php echo Input::get("nationality"); ?></span>
	</span>
	<br>
	<span class="left">
		เลขประจำตัวผู้เสียภาษีอากร 
		<span class="box_8"><?php echo Input::get("tax_no"); ?></span>
	</span>
	<br>
	<span class="left">
		สถานที่ติดต่อของผู้ได้รับใบอนุญาตตั้งอยู่เลขที่
		<span class="box_2"><?php echo Input::get("house_no"); ?></span>
		หมู่ที่
		<span class="box_1"><?php echo Input::get("mhoo"); ?></span>
		ตรอก/ซอย 
		<span class="box_2"><?php echo Input::get("soi"); ?></span>
	</span>
	<br>
	<span class="left">
		ถนน 
		<span class="box_3"><?php echo Input::get("road"); ?></span>
		ตำบล/แขวง 
		<span class="box_3"><?php echo Input::get("district"); ?></span>
		อำเภอ/เขต 
		<span class="box_3"><?php echo Input::get("district1"); ?></span>
	</span>
	<br>
	<span class="left">
		จังหวัด 
		<span class="box_3"><?php echo Input::get("province"); ?></span>
		รหัสไปรษณีย์ 
		<span class="box_1"><?php echo Input::get("zip_code"); ?></span>
		โทรศัพท์ 
		<span class="box_2"><?php echo Input::get("tel") ?></span>
		โทรสาร 
		<span class="box_2"><?php echo Input::get("fax") ?></span>
	</span>
	<br>
	<span class="left">
		สถานที่เก็บรักษาวัตถุอันตราย ชื่อ 
		<span class="box_7"><?php echo Input::get("hazard_store"); ?></span>
	</span>
	<br>
	<span class="left">
		ตั้งอยู่เลขที่ 
		<span class="box_2"><?php echo Input::get("hazard_store_no"); ?></span>
		หมู่ที่
		<span class="box_1"><?php echo Input::get("hazard_mhoo"); ?></span>
		ตรอก/ซอย 
		<span class="box_1"><?php echo Input::get("hazard_soi"); ?></span>
		ถนน 
		<span class="box_3"><?php echo Input::get("hazard_road"); ?></span>
	</span>
	<br>
	<span class="left">
		ตำบล/แขวง 
		<span class="box_3"><?php echo Input::get("hazard_district"); ?></span>
		อำเภอ/เขต 
		<span class="box_3"><?php echo Input::get("hazard_district1"); ?></span>
		จังหวัด 
		<span class="box_3"><?php echo Input::get("hazard_province"); ?></span>
	</span>
	<br>
	<span class="left">
		รหัสไปรษณีย์ 
		<span class="box_3"><?php echo Input::get("hazard_zip_code"); ?></span>
		โทรศัพท์ 
		<span class="box_3"><?php echo Input::get("hazard_tel"); ?></span>
		โทรสาร 
		<span class="box_3"><?php echo Input::get("hazard_fax"); ?></span>
	</span>
	<br>
	<span class="left">
		ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา(กรณีที่มีประกาศฯ 
		ออกตาม
	</span>
	<br>
	<span class="left">
		ความในมาตรา ๒๐ (๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ 
		กำหนดให้ต้องมีผู้เชี่ยวชาญหรือ
	</span>
	<br>
	<span class="left">
		บุคลากรเฉพาะรับผิดชอบ ฯ)&nbsp;&nbsp;&nbsp;
		<?php echo Input::get("professor"); ?>
	</span>
	<br>
	<span class="left">
		ปริมาณการครอบครองรวมสูงสุด 
		<span class="box_8"><?php echo Input::get("quantity"); ?></span>
	</span>
	<br>
	<span class="left">
		พื้นที่เฉพาะในส่วนของการครอบครองรวมสูงสุด 
		<span class="box_6"><?php echo Input::get("quantity_map"); ?></span>
		&nbsp;&nbsp;&nbsp;ตารางเมตร
	</span>
	<br>
	<span class="left">
		มีไว้ในครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ของการครอบครองเพื่อ 
		<span class="box_4"><?php echo Input::get("hazard_purpose"); ?></span>
	</span>
	<br>
	<span class="left">
		ชื่อวัตถุอันตราย <sup>(๑)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง 
		<span class="box_6"><?php echo Input::get("hazard_name"); ?></span>
	</span>
	<br>
	<span class="left">
		ชื่อทางการค้าของวัตถุอันตราย <sup>(๒)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง
		<span class="box_5"><?php echo Input::get("hazard_trade_name"); ?></span>
	</span>
	<br>
	<span class="left">
		ทะเบียนเลขที่ 
		<span class="box_8"><?php echo Input::get("hazard_no"); ?></span>
	</span>
	<br>
	<span class="left" style="font-size:10px">
		<i>(ในกรณีที่มีวัตถุอันตรายไว้ในครอบครองมากกว่า ๑ รายการ ให้ระบุรายละเอียดเพิ่มเติมด้านหลัง)</i>
	</span>
	<br>
	<span class="left">
		ใบอนุญาตนี้ออกให้โดยมีเงื่อนไข ดังต่อไปนี้ <?php echo Input::get("hazard_condition"); ?>
	</span>
	<br>
	<span class="left">
		ใบอนุญาตนี้ให้ใช้ได้จนถึงวันที่ 
		<span class="box_1"><?php echo Input::get("certificate_day"); ?></span>
		เดือน 
		<span class="box_3"><?php echo Input::get("certificate_month"); ?></span>
		พ.ศ. 
		<span class="box_2"><?php echo Input::get("certificate_year"); ?></span>
	</span>
	<br>
	<span class="right">
		<div align="left">
			(ลายมือชื่อ)
			<span class="box_4"><?php echo Input::get("signature"); ?></span>
			พนักงานเจ้าหน้าที่
		</div>
		<div align="left">
			<span class="box_7">(<?php echo Input::get("signature1"); ?>)</span>
		</div>
	</span>
	<br>
	<br>
	<span class="left">
		รายการด้านหลังใบอนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย
	</span>
	<br>
	<span class="left">
		ใบอนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตรายเลขที่
		<span class="box_4"><?php echo Input::get("certificate_no1"); ?></span>
	</span>
	<br>
	<span class="left">
		รายชื่อวัตถุอันตรายที่ได้รับอนุญาตมีไว้ในครอบครอง
	</span>
	<br>
	<span class="left">
		๑. ชื่อวัตถุอันตราย
		<span class="box_5"><?php echo Input::get("hazard_name1"); ?></span>
	</span>
	<br>
	<span class="left">
		ชื่อทางการค้า
		<span class="box_5"><?php echo Input::get("hazard_trade_name1"); ?></span>
	</span>
	<br>
	<span class="left">
		ทะเบียนเลขที่
		<span class="box_5"><?php echo Input::get("hazard_no1"); ?></span>
	</span>
	<br>
	<span class="right">
		<div align="left">
			(ลายมือชื่อ)&nbsp;&nbsp;<?php echo Input::get("signature_again"); ?>&nbsp;&nbsp;พนักงานเจ้าหน้าที่
		</div>
		<div align="left">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			(<?php echo Input::get("signature_again1"); ?>)
		</div>
	</span>
	<br>
	<br>
	<span class="left">
		(ระบุรายการเพิ่มเติมด้านล่าง)
	</span>
	<br>
</div>
<div style="font-size:10px">
	<span class="left">
		<u>หมายเหตุ</u>&nbsp;&nbsp;&nbsp;(๑)&nbsp;&nbsp;วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรม
			ให้ระบุเฉพาะชื่อวัตถุอันตราย
	</span>
	<br>
	<span class="left">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			(๒)&nbsp;&nbsp;วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา 
			ให้ระบุเฉพาะชื่อทางการค้า
	</span>
	<br>
</div>
</body>
</html>


