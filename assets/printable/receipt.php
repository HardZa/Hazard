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
span.center {
position: absolute;
right: 300;
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
table, th,td
{
border: 1px solid black;
}
</style>
<body>
<div>
	<span class = 'center'>
		<img src='<?php echo resolveURIHeader("/image/krut.jpg"); ?>' width = '70'>
	</span>
	<span class = 'right'>
		<div align = 'left'>
			<font size=4>เล่มที่ <?php echo Input::get("bookno"); ?></font>
		</div>
		<div align = 'left'>
			<font size=4>เลขที่ <?php echo Input::get("no"); ?></font>
		</div>
	</span>
<br><br><br><br>
</div>
<div align='center'>
	ใบเสร็จรับเงิน
</div>
<div align='center'>
	Receipt
</div>
<div>
	<span class = 'left'>
		ที่ทำการ   <span class = 'box_7'><?php echo Input::get("office"); ?></span>
		เลขที่อ้างอิง   <span class = 'box_3'><?php echo Input::get("referenceno"); ?></span>
	</span>
	<br>
	<span class = 'box_8'></span>
		วันที่/DATE   <span class = 'box_3'><?php echo Input::get("date"); ?></span>
	<br>
	<span class = 'left'>
		ชื่อ/NAME   <span class = 'box_8'><?php echo Input::get("name"); ?></span>    
</div>
<br><br>
	<table style="width:600px;border-collapse:collapse">
<tr>
<th style="width:400px">รายการ / DESCRIPTION</th>
<th>จำนวนเงิน / AMOUNT</th>
</tr>
<tr>
<td style="height:50px;border-bottom-width:0px"><div><?php echo Input::get("description"); ?></div></td>
<td style="border-bottom-width:0px"><?php echo Input::get("amount"); ?></td>
</tr>
<tr>
<td style="height:450px;border-top-width:0px"></td>
<td style="border-top-width:0px"></td>
</tr>
<tr>
<td>(<?php echo Input::get("amounttext"); ?>)
<span style='position:absolute;right:270'>รวมเงิน/Total</span></td>
<td><?php echo Input::get("amount"); ?></td>
</tr>
</table>
<div align="left">
	ชำระโดย   <?php echo Input::get("payment"); ?>   
</div>
	<span class = 'box_7'></span>
		ได้รับเงินไว้เป็นการถูกต้องแล้ว
	<br><br>
	<span class = 'box_6'></span>
		<span>ลายมือชื่อ   <span class = 'box_3'></span>  ผู้รับเงิน
	<br>
	<span class = 'box_8'></span>เจ้าหน้าที่การเงิน
	<br>
	<span class = 'box_6'></span>
	<span class = 'box_6'>	<div align='center'>(<?php echo Input::get("officername"); ?>)</div></span>
	<br>
	<span class = 'box_6'></span>ตำแหน่ง<span class = 'box_4'><div align='center'><?php echo Input::get("officeposition"); ?></div></span>
	<br>    
</html>