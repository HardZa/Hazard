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
word-wrap:break-word;
}

div.text {
position: absolute;
left: 40;
right: 40;
font-size: 100%;
}

</style>
<body>

<div align = "right">แบบ วอ.๔</div>

<div align = 'center'>
	<img src='<?php echo resolveURIHeader("/image/krut.jpg"); ?>' width = '70'>
</div>

<div class="text">
<br>
<div align="center">ใบอนุญาตนำเข้าวัตถุอันตราย</div>
<br>

<span >ใบอนุญาติเลขที่ <?php echo Input::get("certid"); ?></span>

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

ใบสำคัญการขึ้นทะเบียนเลขที่ <?php echo Input::get("certidref"); ?><br>
อนุญาตให้ <?php echo Input::get("name"); ?> <span class = "right"> สัญชาติ <?php echo Input::get("nationality"); ?></span><br>
เลชประจำตัวผู้เสียภาษีอากร <?php echo Input::get("taxno"); ?><br>


<!-- ---------------------------------------------------------------------- -->

สถานที่ติดต่อของผู้ได้รับอนุญาตตั้งอยู่เลขที่ <span class="box_1"><?php echo Input::get("addrhouse"); ?></span> หมู่ที่ <span class="box_1"><?php echo Input::get("addrvillage"); ?></span> ตรอก/ซอย <span class="box_2"><?php echo Input::get("addrdrive"); ?></span><br>
ถนน <span class="box_2"><?php echo Input::get("addrroad"); ?></span> ตำบล/แขวง <span class="box_2"><?php echo Input::get("addrsubdistrict"); ?></span> อำเภอ/เขต <span class="box_2"><?php echo Input::get("addrdistrict"); ?></span><br>
จังหวัด <span class="box_3"><?php echo Input::get("addrprovince"); ?></span> รหัสไปรษณีย์ <span class="box_3"><?php echo Input::get("addrpostalcode"); ?></span> โทรศัพท์ <span class="box_3"><?php echo Input::get("addrphone"); ?></span> โทรสาร <span class="box_3"><?php echo Input::get("addrfax"); ?></span><br>

<!-- ---------------------------------------------------------------------- -->

นำเข้าวัตถุอันตราย ดังต่อไปนี้<br>
ชื่อวัตถุอันตราย สูตรเคมี และอัตราส่วน <span class="box_4"><?php echo Input::get("hazardname"); ?></span><br><br>
ลักษณะและสูตร (Formulation) <?php echo Input::get("hazardformulation"); ?><br>
ชื่อทางการค้า (ถ้ามี) <?php echo Input::get("businessname"); ?><br>
ผู้ผลิต <?php echo Input::get("producer"); ?><br>
ประเทศที่ผลิต <?php echo Input::get("producerCountry"); ?><br>
ปริมาณ <?php echo Input::get("quantity"); ?><br>
หมายเหตุ <?php echo Input::get("note"); ?><br>
สถานที่เก็บรักษาวัตถุอันตรายตามรายการด้านหลังใบอนุญาตนี้<br>
ใบอนุญาตนี้ออกให้โดยมีเงื่อนไขดังต่อไปนี้ <span class="box_4"><?php echo Input::get("condition"); ?></span><br><br>
ใบอนุญาตนี้ให้ใช้ได้จนถึงวันที่ <span class="box_1"><?php echo Input::get("expday"); ?></span> เดือน <span class="box_3"><?php echo Input::get("expmonth"); ?></span> พ.ศ. <span class="box_3"><?php echo Input::get("expyear"); ?></span><br>
<br><br><br><br>
<div align="right">( ลายมือชื่อ )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พนักงานเจ้าหน้าที่ </div>
<div align="right">( <?php echo Input::get("officername"); ?> )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
<!-- ---------------------------------------------------------------------- -->

<br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>
<div align = "center">-๑/๑-</div><br>
รายการด้านหลังใบอนุญาตนำเข้าวัตถุอันตราย<br>
ใบอนุญาตนำเข้าวัตถุอันตรายเลขที <?php echo Input::get("productcertid"); ?><br>

<!-- ---------------------------------------------------------------------- -->

สถานที่เก็บรักษาวัตถุอันตรายแห่งที่ ๑ ชื่อ <?php echo Input::get("storename"); ?><br>
ตั้งอยู่เลขที่ <span class="box_1"><?php echo Input::get("storehouse"); ?></span> หมู่ที่ <span class="box_1"><?php echo Input::get("storevillage"); ?></span> ตรอก/ซอย <span class="box_2"><?php echo Input::get("storedrive"); ?></span> ถนน <span class="box_2"><?php echo Input::get("storeroad"); ?></span><br>
ตำบล/แขวง <span class="box_2"><?php echo Input::get("storesubdistrict"); ?></span> อำเภอ/เขต <span class="box_2"><?php echo Input::get("storedistrict"); ?></span> จังหวัด <span class="box_3"><?php echo Input::get("storeprovince"); ?></span><br>
รหัสไปรษณีย์ <span class="box_3"><?php echo Input::get("storepostalcode"); ?></span> โทรศัพท์ <span class="box_3"><?php echo Input::get("storephone"); ?></span> โทรสาร <span class="box_3"><?php echo Input::get("storefax"); ?></span><br>

<!-- ---------------------------------------------------------------------- -->

ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา (ในกรณีที่มีใบประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ) <?php echo Input::get("storespecialist"); ?><br>
<br><br><br><br>
<div align="right">( ลายมือชื่อ )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พนักงานเจ้าหน้าที่ </div>
<div align="right">( <?php echo Input::get("officername"); ?> )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
(ในกรณีที่มีสถานที่เก็บวัตถุอันตรายมากกว่า ๑ แห่งให้ระบุรายละเอียดเพิ่มเติมด้านล่าง)<br><br><br><br>

หมายเหตุ (๑) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา กรมวิชาการเกษตร
กรมประมง และกรมปศุสัตว์ไม่ต้องระบุสูตรเคมี<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(๒) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรมไม่ต้องระบุสูตร (Formulation)

</div>
</body>
</html>


