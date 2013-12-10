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
<span class="left">ใบอนุญาติเลขที่ <?php echo Input::get("certificate_no"); ?></span>

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
<br>

</div>
</body>
</html>


