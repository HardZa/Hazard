<?php
require_once('../core/init.php');
?>
<html>
<body>

<div align = 'center'>
	<img src='../image/krut.jpg' width = '70'>
</div>
<!--ชื่อ <?php echo Input::get("name"); ?> 
นามสกุล <?php echo Input::get("lastname"); ?>-->
<div align="center">ใบอนุญาตผลิตวัตถุอันตราย</div>

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
รายการด้านหลังใบอนุญาตผลิตวัตถุอันตราย<br>
ใบอนุญาตผลิตวัตถุอันตรายเลขที <?php echo Input::get("numPermit"); ?><br>
สถานที่เก็บรักษาวัตถุอันตรายแห่งที่ ๑ ชื่อ <?php echo Input::get("placeObject"); ?><br>


ชื่อผู้เชี่ยวชาญสำหรับรับผิดชอบการเก็บรักษา (ในกรณีที่มีใบประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ) <?php echo Input::get("reapName"); ?><br>
<div align="right">ลงชื่อ <?php echo Input::get("signature2"); ?> พนักงานเจ้าหน้าที่ </div>

(ในกรณีที่มีสถานที่เก็บวัตถุอันตรายมากกว่า ๑ แห่งให้ระบุรายละเอียดเพิ่มเติมด้านล่าง)<br>

หมายเหตุ (๑) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา กรมวิชาการเกษตร
กรมประมง และกรมปศุสัตว์ไม่ต้องระบุสูตรเคมี<br>
         (๒) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรมไม่ต้องระบุสูตร (Formulation)


</body>
</html>


