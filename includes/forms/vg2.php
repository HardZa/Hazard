<div class="vg-container">


<div id="header" style="margin-bottom:0;font-size:25px;">ใบอนุญาตผลิตวัตถุอันตราย</div>
<br><br>
<div id="z1">

<p align="left">ใบอนุญาตเลขที่  <input = "text" class="box" name="regisNO" style="width:150px"> กรม/สำนักงาน  <input = "text" class="box" name="office" style="width:300px"><p>
<p align="right">กระทรวง  <input = "text" class="box" name="Kasoung" style="width:300px"><p>
<select name="DateOfDoc" style="float:right;">
    <?php include(resolveHeader('includes/forms/element/year.php'));?>
</select> 

<select name="DateOfBirth_Month" style="float:right;">
        <?php include(resolveHeader('includes/forms/element/month.php'));?>
</select> 

<select name="DateOfBirth_Day" style="float:right;">
       <?php include(resolveHeader('includes/forms/element/day.php'));?>
</select> 

<p align="left">ใบสำคัญการขึ้นทะเบียนเลขที่  <input = "text" class="box" name="DocNO" style="width:300px"><p>
<p align="left">อนุญาตให้  <input = "text" class="box" name="name" style="width:300px"> สัญชาติ  <input = "text" class="box" name="nationality" style="width:300px"><p>

</div>


<p align="left">เลขประจำตัวผู้เสียภาษีอากร  <input = "text" class="box" name="tax" style="width:300px"><p>
<p align="left">สถานที่ติดต่อของผู้ได้รับอนุญาตตั้งอยู่เลขที่ <input = "text" class="box" name="addr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="mhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="soi" style="width:100px"><p>
<p align="left">ถนน  <input = "text" class="box" name="road" style="width:150px"> ตำบล/แขวง  <input = "text" class="box" name="district" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="area" style="width:200px"><p> 
<p align="left">จังหวัด <input = "text" class="box" name="province" style="width:150px"> รหัสไปรษณีย์ <input = "text" class="box" name="zip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="tel" style="width:150px"> โทรสาร <input = "text" class="box" name="fax" style="width:150px"><p>
<p align="left">สถานที่ผลิตวัตถุอันตราย ชื่อ <input = "text" class="box" name="factory" style="width:400px"><p>
<p align="left">ตั้งอยู่เลขที่ <input = "text" class="box" name="faddr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="fmhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="fsoi" style="width:100px">ถนน  <input = "text" class="box" name="froad" style="width:150px"> <p>
<p align="left">ตำบล/แขวง  <input = "text" class="box" name="fdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="farea" style="width:200px">จังหวัด <input = "text" class="box" name="fprovince" style="width:150px"> <p> 
<p align="left">รหัสไปรษณีย์ <input = "text" class="box" name="fzip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="ftel" style="width:150px"> โทรสาร <input = "text" class="box" name="ffax" style="width:150px"><p>
<p align="left">ผลิตวัตถุอันตรายตามรายการต่อไปนี้<p>
<p align="left">ชื่อวัตถุอันตราย สูตรเคมี และอัตราส่วน<input = "text" class="box" name="haxardName" style="width:500px"><p>
<p align="left">ลักษณะและสูตร (Formulation)<input = "text" class="box" name="formulation" style="width:500px"><p>
<p align="left">ชื่อทางการค้า (ถ้ามี)<input = "text" class="box" name="procname" style="width:500px"><p>
<p align="left">ปริมาณ<input = "text" class="box" name="quantity" style="width:500px"><p>
<p align="left">หมายเหตุ<input = "text" class="box" name="data" style="width:500px"><p>
<p align="left">สถานที่เก็บวัตถุอันตรายตามรายการด้านหลังใบอนุญาตนี้<p>
<p align="left">ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการผลิต (ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ)<input = "text" class="box" name="geek" style="width:500px"><p>
<p align="left">ใบอนุญาตนี้ออกให้โดยมีเงื่อนไขดังต่อไปนี้<input = "text" class="box" name="config" style="width:500px"><p>
<p align="left">ใบอนุญาตนี้ใช้ได้จนถึงวันที่
<select name="DateOfDoc" style="float:right;">
    <?php include(resolveHeader('includes/forms/element/year.php'));?>
</select> 

<select name="DateOfBirth_Month" style="float:right;">
        <?php include(resolveHeader('includes/forms/element/month.php'));?>
</select> 

<select name="DateOfBirth_Day" style="float:right;">
       <?php include(resolveHeader('includes/forms/element/day.php'));?>
</select> 
<p>
<p align="right">ลงชื่อ<input = "text" class="box" name="config" style="width:200px">พนักงานเจ้าหน้าที่<p>
<p align="left">รายการด้านหลังใบอนุญาตผลิตวัตถุอันตราย<p>
<p align="left">ใบอนุญาตผลิตวัตถุอันตรายเลขที่<input = "text" class="box" name="ApproveNO" style="width:300px"><p>
<p align="left">สถานที่เก็บรักษาวัตถุอันตรายแห่งที่ ๑ ชื่อ<input = "text" class="box" name="Place" style="width:300px"><p>
<p align="left">ตั้งอยู่เลขที่ <input = "text" class="box" name="faddr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="fmhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="fsoi" style="width:100px">ถนน  <input = "text" class="box" name="froad" style="width:150px"> <p>
<p align="left">ตำบล/แขวง  <input = "text" class="box" name="fdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="farea" style="width:200px">จังหวัด <input = "text" class="box" name="fprovince" style="width:150px"> <p> 
<p align="left">รหัสไปรษณีย์ <input = "text" class="box" name="fzip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="ftel" style="width:150px"> โทรสาร <input = "text" class="box" name="ffax" style="width:150px"><p>
<p align="left">ชื่อผู้เชี่ยวชาญสำหรับรับผิดชอบการเก็บรักษา (ในกรณีที่มีใบประกาศฯ ออกตามความในมาตรา ๒๐(๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ)<input = "text" class="box" name="geekName" style="width:300px"><p>
<p align="right">ลงชื่อ<input = "text" class="box" name="config" style="width:200px">พนักงานเจ้าหน้าที่<p>
<p align="left">(ในกรณีที่มีสถานที่เก็บวัตถุอันตรายมากกว่า ๑ แห่งให้ระบุรายละเอียดเพิ่มเติมด้านล่าง)<p>
<p align="left">หมายเหตุ (๑) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา กรมวิชาการเกษตร
กรมประมง และกรมปศุสัตว์ไม่ต้องระบุสูตรเคมี<br>
(๒) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรมไม่ต้องระบุสูตร (Formulation)<p>
</div>