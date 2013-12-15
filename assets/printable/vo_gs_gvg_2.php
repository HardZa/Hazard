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
left: 5;
right:5;
font-size: 100%;
}

div.tab{
position: relative;
left: 40;
}

</style>
<body>

<div align = "right">แบบ วอ./กษ./กวก.๒</div>	

<div align = 'center'>
	<img src='<?php echo resolveURIHeader("/image/krut.jpg"); ?>' width = '70'>
</div>

<div class="text">
<br>
<div align="center">ใบสำคัญการขึ้นทะเบียนวัตถุอันตราย</div>
<br>
<span class="right">
	<div align="left">
		กรมวิชาการเกษตร<br>
		กระทรวงเกษตรและสหกรณ์<br>
	</div>
</span>

<br><br><br><br>
<span >เลขที่ <?php echo Input::get("no"); ?></span>

<span class="right">
	<div align="left">
		วันที่ <?php echo Input::get("day"); ?>
		เดือน <?php echo Input::get("month"); ?>
		พ.ศ. <?php echo Input::get("year"); ?>
	</div>
</span>
<br>

<!-- ---------------------------------------------------------------------- -->

อนุญาตให้ <?php echo Input::get("name"); ?> <span class = "right"> สัญชาติ <?php echo Input::get("nationality"); ?></span><br>
เลชประจำตัวผู้เสียภาษีอากร <?php echo Input::get("taxno"); ?><br>


<!-- ---------------------------------------------------------------------- -->

สถานที่ติดต่อผู้รับใบสำคัญการขึ้้นทะเบียนวัตถุอันตราย ตั้งอยู่เลขที่ <span class="box_1"><?php echo Input::get("addrhouse"); ?></span> หมู่ที่ <span class="box_1"><?php echo Input::get("addrvillage"); ?></span> ตรอก/ซอย <span class="box_1"><?php echo Input::get("addrdrive"); ?></span><br>
ถนน <span class="box_2"><?php echo Input::get("addrroad"); ?></span> ตำบล/แขวง <span class="box_2"><?php echo Input::get("addrsubdistrict"); ?></span> อำเภอ/เขต <span class="box_2"><?php echo Input::get("addrdistrict"); ?></span><br>
จังหวัด <span class="box_3"><?php echo Input::get("addrprovince"); ?></span> รหัสไปรษณีย์ <span class="box_3"><?php echo Input::get("addrpostalcode"); ?></span> โทรศัพท์ <span class="box_3"><?php echo Input::get("addrphone"); ?></span> โทรสาร <span class="box_3"><?php echo Input::get("addrfax"); ?></span><br>

<!-- ---------------------------------------------------------------------- -->

<!--ชื่อและที่อยู่ของสถานที่เก็บรักษาวัตถุอันตรายแห่ง ชื่อ <?php echo Input::get("storename"); ?><br>
ตั้งอยู่เลขที่ <span class="box_1"><?php echo Input::get("storehouse"); ?></span> หมู่ที่ <span class="box_1"><?php echo Input::get("storevillage"); ?></span> ตรอก/ซอย <span class="box_2"><?php echo Input::get("storedrive"); ?></span> ถนน <span class="box_2"><?php echo Input::get("storeroad"); ?></span><br>
ตำบล/แขวง <span class="box_2"><?php echo Input::get("storesubdistrict"); ?></span> อำเภอ/เขต <span class="box_2"><?php echo Input::get("storedistrict"); ?></span> จังหวัด <span class="box_3"><?php echo Input::get("storeprovince"); ?></span><br>
รหัสไปรษณีย์ <span class="box_3"><?php echo Input::get("storepostalcode"); ?></span> โทรศัพท์ <span class="box_3"><?php echo Input::get("storephone"); ?></span> โทรสาร <span class="box_3"><?php echo Input::get("storefax"); ?></span><br>

--><!-- ---------------------------------------------------------------------- -->

เป็นผู้รับใบสำคัญการขึ้นทะเบียนวัตถุอันตราย <span class="box_2"><?php echo Input::get("group"); ?></span>เพื่อ <span class="box_3"><?php echo Input::get("purposefirst"); ?></span>ดังนี้<br>
<div class="tab">
	๑. ชื่อวัตถุอันตราย <?php echo Input::get("hazardname"); ?><br>
	๒. สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ <?php echo Input::get("hazardformulation"); ?><br>
	๓. ชื่อทางการค้า <?php echo Input::get("businessname"); ?><br>
	๔. ชื่อผู้ผลิตและแหล่งผลิต <?php echo Input::get("producer"); ?><br>
	๕. ชื่อผู้นำเข้า <?php echo Input::get("importer"); ?><br>
	๖. ชื่อผู้จำหน่าย/ผู้จัดจำหน่าย <?php echo Input::get("saleman"); ?><br>
	๗. วัตถุประสงค์และประเภทของการใช้ <?php echo Input::get("purpose"); ?><br>
	๘. ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ <?php echo Input::get("container"); ?><br>
	๙. อื่นๆ (ระบุ) <?php echo Input::get("other"); ?><br>
</div>
<br>
ใบสำคัญการขึ้นทะเบียนวัตถุอันตรายนี้ให้ใช้จนถึงวันที่ <span style="display:inline-block;background-color:#999;width:20px;"><?php echo Input::get("expday"); ?></span> เดือน <span class="box_2"><?php echo Input::get("expmonth"); ?></span> พ.ศ. <span class="box_3"><?php echo Input::get("expyear"); ?></span>
<br><br><br><br>
<div align="right">( ลายมือชื่อ )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พนักงานเจ้าหน้าที่ </div>
<div align="right">( <?php echo Input::get("officername"); ?> )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
</div>
</body>
</html>