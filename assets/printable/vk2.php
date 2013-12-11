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
width:95px;
}
span.box_3 {
display:inline-block;
background-color:#999;
width:80px;
}
span.box_4 {
display:inline-block;
background-color:#999;
width:300px;
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
</div>

<div class="text">
<br>
<div align="center">ใบอนุญาตผลิตวัตถุอันตราย</div>
<br>

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
อนุญาตให้ <?php echo Input::get("name"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo Input::get("lastname"); ?><br>
เลชประจำตัวผู้เสียภาษีอากร <?php echo Input::get("idenNum"); ?><br>


<!-- ---------------------------------------------------------------------- -->

สถานที่ติดต่อของผู้ได้รับอนุญาตตั้งอยู่เลขที่ <span class="box_1"><?php echo Input::get("houseNum"); ?></span> หมู่ที่ <span class="box_1"><?php echo Input::get("group"); ?></span> ตรอก/ซอย <span class="box_2"><?php echo Input::get("soi"); ?></span><br>
ถนน <span class="box_2"><?php echo Input::get("road"); ?></span> ตำบล/แขวง <span class="box_2"><?php echo Input::get("district"); ?></span> อำเภอ/เขต <span class="box_2"><?php echo Input::get("area"); ?></span><br>
จังหวัด <span class="box_3"><?php echo Input::get("city"); ?></span> รหัสไปรษณีย์ <span class="box_3"><?php echo Input::get("postcode"); ?></span> โทรศัพท์ <span class="box_3"><?php echo Input::get("phoneNum"); ?></span> โทรสาร <span class="box_3"><?php echo Input::get("fax"); ?></span><br>

<!-- ---------------------------------------------------------------------- -->

สถานที่ผลิตวัตถุอันตรายชื่อ <?php echo Input::get("namePlace"); ?><br>
ตั้งอยู่เลขที่ <span class="box_1"><?php echo Input::get("houseNumPlace"); ?></span> หมู่ที่ <span class="box_1"><?php echo Input::get("groupPlace"); ?></span> ตรอก/ซอย <span class="box_2"><?php echo Input::get("soiPlace"); ?></span> ถนน <span class="box_2"><?php echo Input::get("roadPlace"); ?></span><br>
ตำบล/แขวง <span class="box_2"><?php echo Input::get("districtPlace"); ?></span> อำเภอ/เขต <span class="box_2"><?php echo Input::get("areaPlace"); ?></span> จังหวัด <span class="box_3"><?php echo Input::get("cityPlace"); ?></span><br>
รหัสไปรษณีย์ <span class="box_3"><?php echo Input::get("postcodePlace"); ?></span> โทรศัพท์ <span class="box_3"><?php echo Input::get("phoneNumPlace"); ?></span> โทรสาร <span class="box_3"><?php echo Input::get("faxPlace"); ?></span><br>

<!-- ---------------------------------------------------------------------- -->

ผลิตวัตถุอันตรายดังต่อไปนี้<br>
ชื่อวัตถุอันตราย สูตรเคมี และอัตราส่วน <span class="box_4"><?php echo Input::get("objectName"); ?></span><br>
ลักษณะและสูตร (Formulation) <?php echo Input::get("type"); ?><br>
ชื่อทางการค้า (ถ้ามี) <?php echo Input::get("marketName"); ?><br>
ปริมาณ <?php echo Input::get("volume"); ?><br>
หมายเหตุ <?php echo Input::get("note"); ?><br>
สถานที่เก็บวัตถุอันตรายตามรายการด้านหลังใบอนุญาตนี้<br>
ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการผลิต (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)<br> <span class="box_4"><?php echo Input::get("namePro"); ?></span><br>
ใบอนุญาตนี้ออกให้โดยมีเงื่อนไขดังต่อไปนี้ <span class="box_4"><?php echo Input::get("condition"); ?></span><br>
ใบอนุญาตนี้ใช้ได้จนถึงวันที่ <span class="box_1"><?php echo Input::get("dayPermit"); ?></span> เดือน <span class="box_3"><?php echo Input::get("monthPermit"); ?></span> พ.ศ. <span class="box_3"><?php echo Input::get("yearPermit"); ?></span><br>
<br>
<div align="right">ลงชื่อ <?php echo Input::get("signature"); ?> พนักงานเจ้าหน้าที่ </div>
<br>
<!-- ---------------------------------------------------------------------- -->

<br><br><br><br><br><br><br><br><br><br><br><br><br>
รายการด้านหลังใบอนุญาตผลิตวัตถุอันตราย<br>
ใบอนุญาตผลิตวัตถุอันตรายเลขที <?php echo Input::get("numPermit"); ?><br>

<!-- ---------------------------------------------------------------------- -->

สถานที่เก็บรักษาวัตถุอันตรายแห่งที่ ๑ ชื่อ <?php echo Input::get("placeObject"); ?><br>
ตั้งอยู่เลขที่ <span class="box_1"><?php echo Input::get("houseNumKeep"); ?></span> หมู่ที่ <span class="box_1"><?php echo Input::get("groupKeep"); ?></span> ตรอก/ซอย <span class="box_2"><?php echo Input::get("soiKeep"); ?></span> ถนน <span class="box_2"><?php echo Input::get("roadKeep"); ?></span><br>
ตำบล/แขวง <span class="box_2"><?php echo Input::get("districtKeep"); ?></span> อำเภอ/เขต <span class="box_2"><?php echo Input::get("areaKeep"); ?></span> จังหวัด <span class="box_3"><?php echo Input::get("cityKeep"); ?></span><br>
รหัสไปรษณีย์ <span class="box_3"><?php echo Input::get("postcodeKeep"); ?></span> โทรศัพท์ <span class="box_3"><?php echo Input::get("phoneNumKeep"); ?></span> โทรสาร <span class="box_3"><?php echo Input::get("faxKeep"); ?></span><br>

<!-- ---------------------------------------------------------------------- -->

ชื่อผู้เชี่ยวชาญสำหรับรับผิดชอบการเก็บรักษา (ในกรณีที่มีใบประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ) <?php echo Input::get("reapName"); ?><br>
<br>
<div align="right">ลงชื่อ <?php echo Input::get("signature2"); ?> พนักงานเจ้าหน้าที่ </div>
<br>
(ในกรณีที่มีสถานที่เก็บวัตถุอันตรายมากกว่า ๑ แห่งให้ระบุรายละเอียดเพิ่มเติมด้านล่าง)<br><br><br><br>

หมายเหตุ (๑) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา กรมวิชาการเกษตร
กรมประมง และกรมปศุสัตว์ไม่ต้องระบุสูตรเคมี<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(๒) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรมไม่ต้องระบุสูตร (Formulation)

</div>
</body>
</html>


