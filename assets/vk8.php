<?php
require_once('../core/init.php');
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
</style>
<body>

<div align = 'center'>
	<img src='../image/krut.jpg' width = '70'>
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
		อนุญาตให้ <?php echo Input::get("name"); ?>
	</span>
	<span class="right">
		<div align="left">
			สัญชาติ <?php echo Input::get("nationality"); ?>
		</div>
	</span>
	<br>
	<span class="left">
		เลขประจำตัวผู้เสียภาษีอากร <?php echo Input::get("tax_no"); ?>
	</span>
	<br>
	<span class="left">
		สถานที่ติดต่อของผู้ได้รับใบอนุญาตตั้งอยู่เลขที่ <?php echo Input::get("house_no"); ?>
		หมู่ที่ <?php echo Input::get("mhoo"); ?>
		ตรอก/ซอย <?php echo Input::get("soi"); ?>
	</span>
	<br>
	<span class="left">
		ถนน <?php echo Input::get("road"); ?>
		ตำบล/แขวง <?php echo Input::get("district"); ?>
		อำเภอ/เขต <?php echo Input::get("district1"); ?>
	</span>
	<br>
	<span class="left">
		จังหวัด <?php echo Input::get("province"); ?>
		รหัสไปรษณีย์ <?php echo Input::get("zip_code"); ?>
		โทรศัพท์ <?php echo Input::get("tel") ?>
		โทรสาร <?php echo Input::get("fax") ?>
	</span>
	<br>
	<span class="left">
		สถานที่เก็บรักษาวัตถุอันตราย ชื่อ <?php echo Input::get("hazard_store"); ?>
	</span>
	<br>
	<span class="left">
		ตั้งอยู่เลขที่ <?php echo Input::get("hazard_store_no"); ?>
		หมู่ที่ <?php echo Input::get("hazard_mhoo"); ?>
		ตรอก/ซอย <?php echo Input::get("hazard_soi"); ?>
		ถนน <?php echo Input::get("hazard_road"); ?>
	</span>
	<br>
	<span class="left">
		ตำบล/แขวง <?php echo Input::get("hazard_district"); ?>
		อำเภอ/เขต <?php echo Input::get("hazard_district1"); ?>
		จังหวัด <?php echo Input::get("hazard_province"); ?>
	</span>
	<br>
	<span class="left">
		รหัสไปรษณีย์ <?php echo Input::get("hazard_zip_code"); ?>
		โทรศัพท์ <?php echo Input::get("hazard_tel"); ?>
		โทรสาร <?php echo Input::get("hazard_fax"); ?>
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
		บุคลากรเฉพาะรับผิดชอบ ฯ)&nbsp;&nbsp;&nbsp;<?php echo Input::get("professor"); ?>
	</span>
	<br>
	<span class="left">
		ปริมาณการครอบครองรวมสูงสุด <?php echo Input::get("quantity"); ?>
	</span>
	<br>
	<span class="left">
		พื้นที่เฉพาะในส่วนของการครอบครองรวมสูงสุด <?php echo Input::get("quantity_map"); ?>
		&nbsp;&nbsp;&nbsp;ตารางเมตร
	</span>
	<br>
	<span class="left">
		มีไว้ในครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ของการครอบครองเพื่อ <?php echo Input::get("hazard_purpose"); ?>
	</span>
	<br>
	<span class="left">
		ชื่อวัตถุอันตราย <sup>(๑)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง <?php echo Input::get("hazard_name"); ?>
	</span>
	<br>
	<span class="left">
		ชื่อทางการค้าของวัตถุอันตราย <sup>(๒)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง<?php echo Input::get("hazard_trade_name"); ?>
	</span>
	<br>
	<span class="left">
		ทะเบียนเลขที่ <?php echo Input::get("hazard_no"); ?>
	</span>
	<br>
	<span class="left">
		<i>(ในกรณีที่มีวัตถุอันตรายไว้ในครอบครองมากกว่า ๑ รายการ ให้ระบุรายละเอียดเพิ่มเติมด้านหลัง)</i>
	</span>
	<br>
	<span class="left">
		ใบอนุญาตนี้ออกให้โดยมีเงื่อนไข ดังต่อไปนี้ <?php echo Input::get("hazard_condition"); ?>
	</span>
	<br>
	<span class="left">
		ใบอนุญาตนี้ให้ใช้ได้จนถึงวันที่ <?php echo Input::get("certificate_day"); ?>
		เดือน <?php echo Input::get("certificate_month"); ?>
		พ.ศ. <?php echo Input::get("certificate_year"); ?>
	</span>
	<br>
	<span class="right">
		<div align="left">
			(ลายมือชื่อ)&nbsp;&nbsp;<?php echo Input::get("signature"); ?>&nbsp;&nbsp;พนักงานเจ้าหน้าที่
		</div>
		<div align="left">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			(<?php echo Input::get("signature1"); ?>)
		</div>
	</span>
	<br>
	<br>
	<span class="left">
		รายการด้านหลังใบอนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย
	</span>
	<br>
	<span class="left">
		ใบอนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตรายเลขที่&nbsp;&nbsp;<?php echo Input::get("certificate_no1"); ?>
	</span>
	<br>
	<span class="left">
		รายชื่อวัตถุอันตรายที่ได้รับอนุญาตมีไว้ในครอบครอง
	</span>
	<br>
	<span class="left">
		๑. ชื่อวัตถุอันตราย&nbsp;&nbsp;<?php echo Input::get("hazard_name1"); ?>
	</span>
	<br>
	<span class="left">
		ชื่อทางการค้า&nbsp;&nbsp;<?php echo Input::get("hazard_trade_name1"); ?>
	</span>
	<br>
	<span class="left">
		ทะเบียนเลขที่&nbsp;&nbsp;<?php echo Input::get("hazard_no1"); ?>
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


