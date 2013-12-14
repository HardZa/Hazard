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
span.test {
display:inline-block;
background-color:#999;
word-wrap:break-word;
}
div.text {
position: absolute;
left: 0;
right: 0;
font-size: 100%;
}
</style>
<body>
<div class="text">
<div align="right">
	แบบ วอ.๘
</div>
<div align = 'center'>
	<img src='<?php echo resolveURIHeader("/image/krut.jpg"); ?>' width = '70'>
</div>
<br>
<div align="center">ใบอนุญาติมีไว้ในครอบครองซึ่งวัตถุอันตราย</div>
<br><br>
<div style="font-size:15px">
	<div>
		<span class="left">ใบอนุญาติเลขที่ <?php echo Input::get("certid"); ?>
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
		อนุญาตให้ 
		<span class="box_8"><?php echo Input::get("name"); ?></span>
		สัญชาติ
		<span class="box_2"><?php echo Input::get("nationality"); ?></span>
	<br>
	<span>
		เลขประจำตัวผู้เสียภาษีอากร 
		<span class="box_8"><?php echo Input::get("taxno"); ?></span>
	</span>
	<br>
	<span>
		สถานที่ติดต่อของผู้ได้รับใบอนุญาตตั้งอยู่เลขที่
		<span class="box_2"><?php echo Input::get("addrhouse"); ?></span>
		หมู่ที่
		<span class="box_1"><?php echo Input::get("addrvillage"); ?></span>
		ตรอก/ซอย 
		<span class="box_2"><?php echo Input::get("addrdrive"); ?></span>
	</span>
	<br>
	<span>
		ถนน 
		<span class="box_3"><?php echo Input::get("addrroad"); ?></span>
		ตำบล/แขวง 
		<span class="box_3"><?php echo Input::get("addrsubdistrict"); ?></span>
		อำเภอ/เขต 
		<span class="box_3"><?php echo Input::get("addrdistrict"); ?></span>
	</span>
	<br>
	<span>
		จังหวัด 
		<span class="box_3"><?php echo Input::get("addrprovince"); ?></span>
		รหัสไปรษณีย์ 
		<span class="box_1"><?php echo Input::get("addrpostalcode"); ?></span>
		โทรศัพท์ 
		<span class="box_2"><?php echo Input::get("addrphone") ?></span>
		โทรสาร 
		<span class="box_2"><?php echo Input::get("addrfax") ?></span>
	</span>
	<br>
	<span>
		สถานที่เก็บรักษาวัตถุอันตราย ชื่อ 
		<span class="box_7"><?php echo Input::get("storename"); ?></span>
	</span>
	<br>
	<span>
		ตั้งอยู่เลขที่ 
		<span class="box_2"><?php echo Input::get("storehouse"); ?></span>
		หมู่ที่
		<span class="box_1"><?php echo Input::get("storevillage"); ?></span>
		ตรอก/ซอย 
		<span class="box_1"><?php echo Input::get("storedrive"); ?></span>
		ถนน 
		<span class="box_3"><?php echo Input::get("storeroad"); ?></span>
	</span>
	<br>
	<span>
		ตำบล/แขวง 
		<span class="box_3"><?php echo Input::get("storesubdistrict"); ?></span>
		อำเภอ/เขต 
		<span class="box_3"><?php echo Input::get("storedistrict"); ?></span>
		จังหวัด 
		<span class="box_3"><?php echo Input::get("storeprovince"); ?></span>
	</span>
	<br>
	<span>
		รหัสไปรษณีย์ 
		<span class="box_3"><?php echo Input::get("storepostalcode"); ?></span>
		โทรศัพท์ 
		<span class="box_3"><?php echo Input::get("storephone"); ?></span>
		โทรสาร 
		<span class="box_3"><?php echo Input::get("storefax"); ?></span>
	</span>
	<br>
		<span>
		ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา(กรณีที่มีประกาศฯ 
		ออกตามความในมาตรา ๒๐ (๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ ฯ)
		<br><?php echo Input::get("storespecialist"); ?>
		</span>
	<br>
	<span>
		ปริมาณการครอบครองรวมสูงสุด 
		<span class="box_8"><?php echo Input::get("quantity"); ?></span>
	</span>
	<br>
	<span>
		พื้นที่เฉพาะในส่วนของการครอบครองรวมสูงสุด 
		<span class="box_2"><?php echo Input::get("area"); ?></span>
		&nbsp;&nbsp;&nbsp;ตารางเมตร
	</span>
	<br>
	<span>
		มีไว้ในครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ของการครอบครองเพื่อ 
		<span class="box_4"><?php echo Input::get("purpose"); ?></span>
	</span>
	<br>
	<span>
		ชื่อวัตถุอันตราย <sup>(๑)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง 
		<span class="box_6"><?php echo Input::get("hazardname"); ?></span>
	</span>
	<br>
	<span>
		ชื่อทางการค้าของวัตถุอันตราย <sup>(๒)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง
		<span class="box_5"><?php echo Input::get("businessname"); ?></span>
	</span>
	<br>
	<span>
		ทะเบียนเลขที่ 
		<span class="box_4"><?php echo Input::get("hazardno"); ?></span>
	</span>
	<br>
	<span style="font-size:10px">
		<i>(ในกรณีที่มีวัตถุอันตรายไว้ในครอบครองมากกว่า ๑ รายการ ให้ระบุรายละเอียดเพิ่มเติมด้านหลัง)</i>
	</span>	
	<br>
	<span>
		ใบอนุญาตนี้ออกให้โดยมีเงื่อนไข ดังต่อไปนี้ <br><?php echo Input::get("condition"); ?>
	</span>
	<br>
	<span>
		ใบอนุญาตนี้ให้ใช้ได้จนถึงวันที่ 
		<span class="box_1"><?php echo Input::get("expday"); ?></span>
		เดือน 
		<span class="box_2"><?php echo Input::get("expmonth"); ?></span>
		พ.ศ. 
		<span class="box_2"><?php echo Input::get("expyear"); ?></span>
	</span>
	<br>
	<br><br><br>
	<span class="right">
		<div align="left">
			(ลายมือชื่อ)
			<div align="center" style="display:inline-block;width:200px"><?php echo Input::get(""); ?></div>
			พนักงานเจ้าหน้าที่
		</div>
		<br>
		<div align="left">
			<div align="center" style="display:inline-block;width:350px">(<?php echo Input::get("officername"); ?>)</div>
		</div>
	</span>
	<br><br><br><br><br><br><br><br><br><br>
	<br>
	<br>
	<br>
	<!--
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
-->
<br>
<br>
<br>
<br>
<br>
<br>
<!--page2-->
<div align="center">-๑/๑-</div>
<br>
<br>
รายการด้านหลังใบอนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย<br>
<span>
	ใบอนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตรายเลขที่
	<span class="box_3"><?php echo Input::get("certid1"); ?></span>
</span>
<br>
รายชื่อวัตถุอันตรายที่ได้รับอนุญาตมีไว้ในครอบครอง<br>
<span>
	๑. ชื่อวัตถุอันตราย
	<span class="box_4"><?php echo Input::get("hazardname1"); ?></span>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อทางการค้า
	<span class="box_4"><?php echo Input::get("businessname1"); ?></span>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทะเบียนเลขคี่
	<span class="box_4"><?php echo Input::get("hazardno1"); ?></span>
</span>
	<br><br><br><br>
	<span class="right">
		<div align="left">
			(ลายมือชื่อ)
			<div align="center" style="display:inline-block;width:200px"><?php echo Input::get(""); ?></div>
			พนักงานเจ้าหน้าที่
		</div>
		<br>
		<div align="left">
			<div align="center" style="display:inline-block;width:350px">(<?php echo Input::get("officername"); ?>)</div>
		</div>
	</span>
	<br>
	<br>
	<br>
	<br>
	<br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br>
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
</div>
</body>
</html>


