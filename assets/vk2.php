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
span.width {
	width: 300px;
}
</style>
<body>

<div align = 'center'>
	<img src='../image/krut.jpg' width = '70'>
</div>
<!--ชื่อ <?php echo Input::get("name"); ?> 
นามสกุล <?php echo Input::get("lastname"); ?>-->
<div align="center">ใบอนุญาตผลิตวัตถุอันตราย</div>

<span >ใบอนุญาติเลขที่ <?php echo Input::get("certificate_no"); ?></span>

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
<br><br><br><br>

<!-- ---------------------------------------------------------------------- -->

ใบสำคัญการขึ้นทะเบียนเลขที่ <?php echo Input::get("cerNum"); ?><br>
<span class="width">อนุญาตให้ <?php echo Input::get("name"); ?></span> <?php echo Input::get("lastname"); ?><br>
เลชประจำตัวผู้เสียภาษีอากร <?php echo Input::get("idenNum"); ?><br>

<!-- ---------------------------------------------------------------------- -->

สถานที่ติดต่อของผู้ได้รับอนุญาตตั้งอยู่เลขที่ <?php echo Input::get("houseNum"); ?> หมู่ที่ <?php echo Input::get("group"); ?> ตรอก/ซอย <?php echo Input::get("soi"); ?><br>
ถนน <?php echo Input::get("road"); ?> ตำบล/แขวง <?php echo Input::get("district"); ?> อำเภอ/เขต <?php echo Input::get("area"); ?><br>
จังหวัด <?php echo Input::get("city"); ?> รหัสไปรษณีย์ <?php echo Input::get("postcode"); ?> โทรศัพท์ <?php echo Input::get("phoneNum"); ?> โทรสาร <?php echo Input::get("fax"); ?><br>

<!-- ---------------------------------------------------------------------- -->

สถานที่ผลิตวัตถุอันตรายชื่อ <?php echo Input::get("namePlace"); ?><br>
ตั้งอยู่เลขที่ <?php echo Input::get("houseNumPlace"); ?> หมู่ที่ <?php echo Input::get("groupPlace"); ?> ตรอก/ซอย <?php echo Input::get("soiPlace"); ?> ถนน <?php echo Input::get("roadPlace"); ?><br>
ตำบล/แขวง <?php echo Input::get("districtPlace"); ?> อำเภอ/เขต <?php echo Input::get("areaPlace"); ?> จังหวัด <?php echo Input::get("cityPlace"); ?><br>
รหัสไปรษณีย์ <?php echo Input::get("postcodePlace"); ?> โทรศัพท์ <?php echo Input::get("phoneNumPlace"); ?> โทรสาร <?php echo Input::get("faxPlace"); ?><br>

<!-- ---------------------------------------------------------------------- -->

ผลิตวัตถุอันตรายดังต่อไปนี้<br>
<span style= "width:10000px">ชื่อวัตถุอันตราย สูตรเคมี และอัตราส่วน <?php echo Input::get("objectName"); ?></span><br>
ลักษณะและสูตร (Formulation) <?php echo Input::get("type"); ?><br>
ชื่อทางการค้า (ถ้ามี) <?php echo Input::get("marketName"); ?><br>
ปริมาณ <?php echo Input::get("volume"); ?><br>
หมายเหตุ <?php echo Input::get("note"); ?><br>
สถานที่เก็บวัตถุอันตรายตามรายการด้านหลังใบอนุญาตนี้<br>
ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการผลิต (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)<br> <?php echo Input::get("namePro"); ?><br>
ใบอนุญาตนี้ออกให้โดยมีเงื่อนไขดังต่อไปนี้ <?php echo Input::get("condition"); ?><br>
ใบอนุญาตนี้ใช้ได้จนถึงวันที่ <?php echo Input::get("dayPermit"); ?> เดือน <?php echo Input::get("monthPermit"); ?> พ.ศ. <?php echo Input::get("yearPermit"); ?>
<div align="right">ลงชื่อ <?php echo Input::get("signature"); ?> พนักงานเจ้าหน้าที่ </div>

<!-- ---------------------------------------------------------------------- -->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
รายการด้านหลังใบอนุญาตผลิตวัตถุอันตราย<br>
ใบอนุญาตผลิตวัตถุอันตรายเลขที <?php echo Input::get("numPermit"); ?><br>
สถานที่เก็บรักษาวัตถุอันตรายแห่งที่ ๑ ชื่อ <?php echo Input::get("placeObject"); ?><br>


ชื่อผู้เชี่ยวชาญสำหรับรับผิดชอบการเก็บรักษา (ในกรณีที่มีใบประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ) <?php echo Input::get("reapName"); ?><br>
<div align="right">ลงชื่อ <?php echo Input::get("signature2"); ?> พนักงานเจ้าหน้าที่ </div>

(ในกรณีที่มีสถานที่เก็บวัตถุอันตรายมากกว่า ๑ แห่งให้ระบุรายละเอียดเพิ่มเติมด้านล่าง)<br><br><br><br>

หมายเหตุ (๑) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา กรมวิชาการเกษตร
กรมประมง และกรมปศุสัตว์ไม่ต้องระบุสูตรเคมี<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(๒) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรมไม่ต้องระบุสูตร (Formulation)


</body>
</html>


