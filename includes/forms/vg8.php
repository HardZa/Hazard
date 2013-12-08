<div id="container" style="width:1000px;height:2000px;background-color:#C0C0C0;">


<div id="header" style="margin-bottom:0;font-size:25px;">ใบอนุญาตมีไว้ในครอบครองซึ่งวัตถุอันตราย</div>
<br><br>
<div id="z1" style="float:right;width:1000px;">

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


<p align="left">อนุญาตให้  <input = "text" class="box" name="name" style="width:300px"> สัญชาติ  <input = "text" class="box" name="nationality" style="width:300px"><p>

</div>


<p align="left">เลขประจำตัวผู้เสียภาษีอากร  <input = "text" class="box" name="tax" style="width:300px"><p>
<p align="left">สถานที่ติดต่อของผู้ได้รับอนุญาตตั้งอยู่เลขที่ <input = "text" class="box" name="addr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="mhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="soi" style="width:100px"><p>
<p align="left">ถนน  <input = "text" class="box" name="road" style="width:150px"> ตำบล/แขวง  <input = "text" class="box" name="district" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="area" style="width:200px"><p> 
<p align="left">จังหวัด <input = "text" class="box" name="province" style="width:150px"> รหัสไปรษณีย์ <input = "text" class="box" name="zip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="tel" style="width:150px"> โทรสาร <input = "text" class="box" name="fax" style="width:150px"><p>

<br>

<p align="left">สถานที่เก็บรักษาวัตถุอันตราย ชื่อ <input = "text" class="box" name="store" style="width:400px"><p>
<p align="left">ตั้งอยู่ที่ <input = "text" class="box" name="saddr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="smhoo" style="width:30px"> ตรอก/ซอย <input = "text" class="box" name="ssoi" style="width:100px"><p>
<p align="left">ถนน  <input = "text" class="box" name="sroad" style="width:150px"> ตำบล/แขวง  <input = "text" class="box" name="sdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="sarea" style="width:200px"><p>
<p align="left">จังหวัด <input = "text" class="box" name="sprovince" style="width:150px"> รหัสไปรษณีย์ <input = "text" class="box" name="szip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="stel" style="width:150px"> โทรสาร <input = "text" class="box" name="sfax" style="width:150px"><p>

<br>

<p align="left">ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา(กรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐ (๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ ฯ)
<textarea name = "accom" rows="2" cols="100">
</textarea>
<p>

<p align="left">
ปริมาณการครอบครองรวมสูงสุด <input = "text" class="box" name="maxQuantity" style="width:100px">
พื้นที่เฉพาะในส่วนของการครอบครองรวมสูงสุด <input = "text" class="box" name="maxOwn" style="width:50px"> ตารางเมตร <br>
มีไว้ในครอบครองซึ่งวัตถุอันตราย โดยมีวัตถุประสงค์ของการครอบครองเพื่อ <input = "text" class="box" name="why" style="width:300px"> <br>
ชื่อวัตถุอันตราย <sup>(๑)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง <input = "text" class="box" name="permission1" style="width:300px"> <br>
ชื่อทางการค้าของวัตถุอันตราย <sup>(๒)</sup> ที่ได้รับอนุญาตมีไว้ในครอบครอง <input = "text" class="box" name="permission2" style="width:300px"> <br>
ทะเบียนเลขที่ <input = "text" class="box" name="code" style="width:300px"> <br>
<i>(ในกรณีที่มีวัตถุอันตรายไว้ในครอบครองมากกว่า ๑ รายการ ให้ระบุรายละเอียดเพิ่มเติมด้านหลัง)</i><br>


ใบอนุญาตนี้ออกให้โดยมีเงื่อนไข ดังต่อไปนี้ <input = "text" class="box" name="condition" style="width:300px"> <br>

ใบอนุญาตนี้ให้ใช้ได้จนถึง<br>

</p>


<select name="DateOfDoc" style="float:right;">
    <?php include(resolveHeader('includes/forms/element/year.php'));?>
</select> 

<select name="DateOfBirth_Month" style="float:right;">
        <?php include(resolveHeader('includes/forms/element/month.php'));?>
</select> 

<select name="DateOfBirth_Day" style="float:right;">
       <?php include(resolveHeader('includes/forms/element/day.php'));?>
</select> 
<br>
<p align="right">(ลายมือชื่อ)<input = "text" class="box" name="config" style="width:200px">พนักงานเจ้าหน้าที่<p>
<p align="left">รายการด้านหลังใบอนุญาตนำเข้าวัตถุอันตราย<p>
<p align="left">ใบอนุญาตนำเข้าวัตถุอันตรายเลขที่<input = "text" class="box" name="ApproveNO" style="width:300px"><p>
<p align="left">รายชื่อวัตถุอันตรายที่ได้รับอนุญาตมีไว้ในครอบครอง</p>
<p align="left">
๑. ชื่อวัตถุอันตราย <input = "text" class="box" name="nameD" style="width:300px"><br>
ชื่อทางการค้า <input = "text" class="box" name="nameZ" style="width:300px"><br>
ทะเบียนเลขที่ <input = "text" class="box" name="numberT" style="width:300px"><br>
</p>

<p align="right">ลงชื่อ<input = "text" class="box" name="config" style="width:200px">พนักงานเจ้าหน้าที่<p>
<p align="left">(ในกรณีที่มีสถานที่เก็บวัตถุอันตรายมากกว่า ๑ แห่งให้ระบุรายละเอียดเพิ่มเติมด้านล่าง)<p>
<p align="left">หมายเหตุ (๑) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรม ให้ระบุเฉพาะชื่อวัตถุอันตราย<br>
(๒) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา ให้ระบุเฉพาะชื่อทางการค้า<p>
</div>