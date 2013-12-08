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

<p align="left">สถานที่เก็บรักษาวัตถุอันตราย ชื่อ <input = "text" class = "box" name="factory" style="width:400px"><p>
<p align="left">ตั้งอยู่ที่ <input = "text" class = "box" name="faddr" style="width:90px"> หมู่ที่ <input = "text" class = "box" name="fmhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="fsoi" style="width:100px"><p>
<p align="left">ถนน  <input = "text" class = "box" name="froad" style="width:150px"> ตำบล/แขวง  <input = "text" class = "box" name="fdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class = "box" name="farea" style="width:200px"><p> 
<p align="left">จังหวัด <input = "text" class = "box" name="fprovince" style="width:150px"> รหัสไปรษณีย์ <input = "text" class = "box" name="fzip code" style="width:150px"> โทรศัพท์ <input = "text" class = "box" name="ftel" style="width:150px"> โทรสาร <input = "text" class = "box" name="ffax" style="width:150px"><p>
<p align="left">ชื่อผู้เชี่ยวชาญหรือบุคคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา/การใช้รับจ้าง (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒o (๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคคลากรเฉพาะรับผิดชอบฯ)
        <input = "text" class = "box" name="respName" style="width:700px"> <p>
<p align="left">ขออนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ในการครอบครองเพื่อ

<form>
<input type="radio" name="type" value="sell">ขาย
<input type="radio" name="type" value="tran">ขนส่ง
<input type="radio" name="type" value="use">ใช้
<input type="radio" name="type" value="etc">อื่นๆ (ระบุ) <input = "text" class = "box" name="etcType" style="width:150px">
</form>

<p align="left"> ชื่อวัตถุอันตรายที่ขออนุญาตมีไว้ในครอบครอง <input = "text" class = "box" name="objectName" style="width:300px"><p>
<p align="left"> ชื่อทางการค้าของวัตถุอันตรายที่ขออนุญาตมีไว้ในครอบครอง <input = "text" class = "box" name="marketName" style="width:300px"><p>
<p align="left"> ทะเบียนเลขที่ <input = "text" class = "box" name="recordNum" style="width:300px"><p>
<p align="left"> ปริมาณการครองครองรวมสูงสุด <input = "text" class = "box" name="ownNum" style="width:300px"><p>
<p align="left"> พื้นที่เฉพาะในส่วนของการครอบครองรวมสูงสุด <input = "text" class = "box" name="ownNum" style="width:150px"> ตารางเมตร<p>
<p align="left">(ถ้ามีหลายรายการให้ระบุว่า "ดังบัญชีรายชื่อแนบท้าย")<p>

<p align="left">พร้อมกันนี่ข้าพเจ้าได้ส่งมอบเอกสารประกอบคำขออนุญาต ดังต่อไปนี้<p>
<form>
<input type="checkbox" name="doc" value="Bike">สำเนาบัตรประจำตัวประชาชน/สำเนาใบสำคัญประจำตัวคนต่างด้าว<br>
<input type="checkbox" name="doc" value="Car">สำเนาหนังสือรับรองการจดทะเบียนเป็นนิติบุคลล<br>
<input type="checkbox" name="doc" value="Car">สำเนาใบทะเบียนภาษีมูลค่าเพิ่ม (ภ.พ.๒๐)<br>
<input type="checkbox" name="doc" value="Car">สำเนาใบสำคัญการขึ้นทะเบียนวัตถุอันตราย<br>
<input type="checkbox" name="doc" value="Car">หลักฐารแสดงการได้วัตถุอันตรายไว้ในครอบครอง<br>
<input type="checkbox" name="doc" value="Car">รายชื่อวัตถุอันตรายที่มีไว้ในครอบครองในกรณีที่มีมากกว่าหนึ่งรายการ<br>
<input type="checkbox" name="doc" value="Car">แผนที่สังเขปแสดงสถานที่เก็บรักษาวัตถุอันตรายและบริเวณข้างเคียง<br>
<input type="checkbox" name="doc" value="Car">แผนผังภายในของอาคารที่ใช้สถานที่เก็บรักษาวัตถุอันตราย (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐ (๑) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ ให้สถานที่เก็บรักษาวัตถุอันตรายต้องเป็นไปตามหลักเกณฑ์ที่กำหนด)<br>
<input type="checkbox" name="doc" value="Car">เอกสารแสดงความรู้ความชำนาญของผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา<br>
<input type="checkbox" name="doc" value="Car">เอกสารแสดงระบบ/กรรมวิธี การป้องกัน และอุปกรณ์ในการบรรเทาความรุนแรงของอุบัติภัยของสถานที่เก็บรักษาวัตถุอันตราย
<input type="checkbox" name="doc" value="Car">เอกสารแสดงวิธีการเก็บรักษาวัตถุอันตราย<br>
<input type="checkbox" name="doc" value="Car">เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย เช่น Materials Safety Data Sheet<br>
<input type="checkbox" name="doc" value="Car">อื่นๆ (ระบุ) <input = "text" class = "box" name="etcDoc" style="width:500px"><br>
</form>

<p align="left">มาเพื่อประกอบการพิจารณาด้วย<p>
<p align="right">ลงชื่อ<input = "text" class = "box" name="sign" style="width:150px">ผู้ขออนุญาต<p>
<p align="left"><u>หมายเหตุ</u><p>
<p align="left">(๑) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรม ให้ระบุเฉพาะชื่อวัตถุอันตราย<p>
<p align="left">(๒) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา ให้ระบุเฉพาะชื่อทางการค้า<p>    
<p align="left">(๓) เอกสารประกอบคำขออนุญาตดังกล่าวข้างต้นต้องแนบเฉพาะการขออนุญาตครั้งแรกหรือกรณีในที่เอกสารประกอบคำขออนุญาตมีการเปลี่ยนแลงข้อความไปจากฉบับเดิมที่ได้เคยมอบไว้<p>
<p align="left">(๔) ให้ใส่เครื่องหมาย ถูก ในข่อง วงกลม หน้าข้อความที่ต้องการ<p>

</div>












