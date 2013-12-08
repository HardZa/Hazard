<div class="vg-container">

<?
//<p align="center">ครุฑ <div align="center" id="header" style="margin-bottom:0;font-size:25px;">คำขออนุญาตผลิตวัตถุอันตราย</div><p>
?>

<p align="center"><div align="center" id="header" style="margin-center:0;font-size:25px;">คำขออนุญาตส่งออกวัตถุอันตราย</div><p>
<br><br>
<div id="z1" style="float:right;width:1000px;">


<select name="DateOfBirth_Year" style="float:right;">
    <?php  include(resolveHeader('includes/forms/element/year.php')); ?>
</select> 

<select name="DateOfBirth_Month" style="float:right;">
    <?php  include(resolveHeader('includes/forms/element/month.php')); ?>
</select> 

<select name="DateOfBirth_Day" style="float:right;">
    <?php  include(resolveHeader('includes/forms/element/day.php')); ?>
</select> 


<br>
<div id="z1.1" style="float:right">

ข้าพเจ้า <input = "text" class = "box" name="name" style="width:300px"> อายุ <input = "text" class = "box" name="age" style="width:40px"> ปี   สัญชาติ <input = "text" class = "box" name="nationality" style="width:60px">

</div>

</div>


<p align="left">เลขประจำตัวผู้เสียภาษีอากร  <input = "text" class = "box" name="tax" style="width:300px"><p>
<p align="left">สถานที่ติดต่อของข้าพเจ้าตั้งอยู่ที่ <input = "text" class = "box" name="addr" style="width:90px"> หมู่ที่ <input = "text" class = "box" name="mhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="soi" style="width:100px"><p>
<p align="left">ถนน  <input = "text" class = "box" name="road" style="width:150px"> ตำบล/แขวง  <input = "text" class = "box" name="district" style="width:200px"> อำเภอ/เขต <input = "text" class = "box" name="area" style="width:200px"><p> 
<p align="left">จังหวัด <input = "text" class = "box" name="province" style="width:150px"> รหัสไปรษณีย์ <input = "text" class = "box" name="zip code" style="width:150px"> โทรศัพท์ <input = "text" class = "box" name="tel" style="width:150px"> โทรสาร <input = "text" class = "box" name="fax" style="width:150px"><p>

<br>

<p align="left">สถานที่ผลิตวัตถุอันตราย ชื่อ <input = "text" class = "box" name="factory" style="width:400px"><p>
<p align="left">ตั้งอยู่ที่ <input = "text" class = "box" name="faddr" style="width:90px"> หมู่ที่ <input = "text" class = "box" name="fmhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="fsoi" style="width:100px"><p>
<p align="left">ถนน  <input = "text" class = "box" name="froad" style="width:150px"> ตำบล/แขวง  <input = "text" class = "box" name="fdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class = "box" name="farea" style="width:200px"><p> 
<p align="left">จังหวัด <input = "text" class = "box" name="fprovince" style="width:150px"> รหัสไปรษณีย์ <input = "text" class = "box" name="fzip code" style="width:150px"> โทรศัพท์ <input = "text" class = "box" name="ftel" style="width:150px"> โทรสาร <input = "text" class = "box" name="ffax" style="width:150px"><p>

<br>

<p align="left">สถานที่เก็บวัตถุอันตราย ชื่อ <input = "text" class = "box" name="factory" style="width:400px"><p>
<p align="left">ตั้งอยู่ที่ <input = "text" class = "box" name="faddr" style="width:90px"> หมู่ที่ <input = "text" class = "box" name="fmhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="fsoi" style="width:100px"><p>
<p align="left">ถนน  <input = "text" class = "box" name="froad" style="width:150px"> ตำบล/แขวง  <input = "text" class = "box" name="fdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class = "box" name="farea" style="width:200px"><p> 
<p align="left">จังหวัด <input = "text" class = "box" name="fprovince" style="width:150px"> รหัสไปรษณีย์ <input = "text" class = "box" name="fzip code" style="width:150px"> โทรศัพท์ <input = "text" class = "box" name="ftel" style="width:150px"> โทรสาร <input = "text" class = "box" name="ffax" style="width:150px"><p>


<p align="left"> เป็นผู้ได้รับใบอนุญาต<p>

<form>
<input type="radio" name="type" value="produce">ผลิตวัตถุอันตรายฒ<br>
<input type="radio" name="type" value="tran">ส่งออกวัตถุอันตราย<br>
<input type="radio" name="type" value="import">นำเข้าวัตถุอันตราย<br>
<input type="radio" name="type" value="own">มีไว้ในครอบครองซึ่งวัตถุอันตราย<br>
</form>

<p align="left"> มีความประสงค์ขอต่ออายุใบอนุญาต <input = "text" class = "box" name="objectName" style="width:300px"><p>
<p align="left"> ใบอนุญาตเลขที่ <input = "text" class = "box" name="permitNum" style="width:300px"><p>
<p align="left"> พร้อมกันนี้ข้าพเจ้าได้ส่ง<p>
<form>
<input type="radio" name="type" value="permit">ใบอนุญาต<br>
<input type="radio" name="type" value="etc">อื่นๆ ระบ <input = "text" class = "box" name="etcDoc" style="width:150px"><br>
</form>

<p align="left">มาเพื่อประกอบการพิจารณาด้วย<p>

<p align="right">ลงชื่อ<input = "text" class = "box" name="sign" style="width:150px">ผู้ขออนุญาต<p>
<p align="left"><u>หมายเหตุ</u> ให้ใส่เครื่องหมาย ถูก ในข่อง วงกลม หน้าข้อความที่ต้องการ<p>

</div>












