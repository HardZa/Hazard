<div class="vg-container">


<div id="header" style="margin-bottom:0;font-size:25px;">คำขออนุญาตผลิตวัตถุอันตราย</div>
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

ข้าพเจ้า <input = "text" class="box" name="name" style="width:300px" class="myheight"> อายุ <input = "text" class="box" name="age" style="width:40px"> ปี   สัญชาติ <input = "text" class="box" name="nationality" style="width:60px">

</div>

<br><br><br>

</div>


<p align="left">
เลขประจำตัวผู้เสียภาษีอากร  <input = "text" class="box" name="tax" style="width:300px"><br>
สถานที่ติดต่อของข้าพเจ้าตั้งอยู่ที่ <input = "text" class="box" name="addr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="mhoo" style="width:30px"> ตรอก/ซอย <input = "text" class="box" name="soi" style="width:100px"><br>
ถนน  <input = "text" class="box" name="road" style="width:150px"> ตำบล/แขวง  <input = "text" class="box" name="district" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="area" style="width:200px"><br>
จังหวัด <input = "text" class="box" name="province" style="width:150px"> รหัสไปรษณีย์ <input = "text" class="box" name="zip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="tel" style="width:150px"> โทรสาร <input = "text" class="box" name="fax" style="width:150px"><br>

<br>

สถานที่ผลิตวัตถุอันตราย ชื่อ <input = "text" class="box" name="factory" style="width:400px"><br>
ตั้งอยู่ที่ <input = "text" class="box" name="faddr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="fmhoo" style="width:30px"> ตรอก/ซอย <input = "text;" name="fsoi" style="width:100px"><br>
ถนน  <input = "text" class="box" name="froad" style="width:150px"> ตำบล/แขวง  <input = "text" class="box" name="fdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="farea" style="width:200px"><br>
จังหวัด <input = "text" class="box" name="fprovince" style="width:150px"> รหัสไปรษณีย์ <input = "text" class="box" name="fzip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="ftel" style="width:150px"> โทรสาร <input = "text" class="box" name="ffax" style="width:150px"><br>


<br>

สถานที่เก็บรักษาวัตุอันตราย ชื่อ <input = "text" class="box" name="store" style="width:400px"><br>
ตั้งอยู่ที่ <input = "text" class="box" name="saddr" style="width:90px"> หมู่ที่ <input = "text" class="box" name="smhoo" style="width:30px"> ตรอก/ซอย <input = "text" class="box" name="ssoi" style="width:100px"><br>
ถนน  <input = "text" class="box" name="sroad" style="width:150px"> ตำบล/แขวง  <input = "text" class="box" name="sdistrict" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="sarea" style="width:200px"><br>
จังหวัด <input = "text" class="box" name="sprovince" style="width:150px"> รหัสไปรษณีย์ <input = "text" class="box" name="szip code" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="stel" style="width:150px"> โทรสาร <input = "text" class="box" name="sfax" style="width:150px"><br>

<br>

ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา(กรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐ (๒) แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ. ๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบ ฯ)<br> 
<textarea name = "accom" rows="2" cols="100">
</textarea>
<br>
<i><font size="2">ในกรณีที่มีสถานที่เก็บรักษาวัตถุอันตรายมากกว่า ๑ แห่ง ให้ระบุรายระเอียดเพิ่มเติมด้านหลัง</font></i>

<br><br>

ขออนุญาตผลิตวัตถุอันตรายตามรายละเอียด ดังต่อไปนี้ <br>
ชื่อวัตถุอันตราย สูตรเคมี<sup>(๑)</sup>และอัตราส่วน
<textarea name = "chem" rows="2" cols="100">
</textarea>

<br>

ลักษณะและสูตร (Formulation)<sup>๒</sup>และอัตราส่วน
<textarea name = "Formulation" rows="1" cols="100">
</textarea>

<br>

ชื่อทางการค้า (ถ้ามี) <input = "text" class="box" name="name2" style="width:250px"> <br>
ปริมาณ <input = "text" class="box" name="quantity" style="width:250px"> <br>
หมายเหตุ <input = "text" class="box" name="comment" style="width:250px"> <br>

<br>
พร้อมกันนี้ข้าพเจ้าได้มอบเอกสารประกอบคำขออนุญาต<sup>(๓)</sup>ดังต่อไปนี้<br>
<input type="checkbox" name="copy" value="1"> สำเนาบัตรประจำตัวประชาชน/สำเนาใบสำคัญประจำตัวคนต่างด้าว<br>
<input type="checkbox" name="copy" value="2"> สำเนาหนังสือรับรองการจดทะเบียนเป็นนิติบุคคล<br>
<input type="checkbox" name="copy" value="3"> สำเนาใบทะเบียนภาษีมูลค่าเพิ่ม( ภ.พ. ๒๐ )<br>
<input type="checkbox" name="copy" value="4"> สำเนาใบสำคัญการขึ้นทะเบียนวัตถุอันตราย (ในกระณีที่ผู้ขออนุญาตผลิตได้ขึ้นทะเบียนไว้แล้ว)<br>
<input type="checkbox" name="copy" value="5"> แผนที่สังเขปแสดงสถานที่ผลิตวัตถุอันตรายและบริเวณข้างเคียง<br>
<input type="checkbox" name="copy" value="6"> แผนที่สังเขปแสดงสถานที่เก็บรักษาวัตถุอันตรายและบริเวณข้างเคียง<br>
<input type="checkbox" name="copy" value="7"> แผนผังภายในของอาคารที่ใช้เป็นสถานที่ผลิตและสถานที่เก็บรักษาวัตถุอันตรายทั้งที่เป็นวัตถุดิบและผลิตภัณฑ์<br>
<input type="checkbox" name="copy" value="8"> เอกสารแสดงกรรมวิธีารผลิต<br>
<input type="checkbox" name="copy" value="9"> เอกสารแสดงความรู้ความชำนาญของผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการผลิตและเก็บรักษา<br>
<input type="checkbox" name="copy" value="10"> เอกสารแสดงลักษณะภาชนะบรรจุที่จะใช้และการหุ้มห่อหรือผูกมัดภาชนะบรรจุวัตถุอันตราย<br>
<input type="checkbox" name="copy" value="11"> เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย เช่น Materials Safety Data Sheet<br>
<input type="checkbox" name="copy" value="12"> อื่น ๆ (ระบุ) <input = "text" class="box" name="etc" style="width:350px"><br>
มาเพื่อประกอบการพิจารณาด้วย <sup>(๔)</sup>
</p>

<p align = "right">
	( ลายมือชื่อ ) <input = "text" class="box" name="sig" style="width:100px"> ผู้ขออนุญาต
</p>

<p align = "left">
<u>หมายเหตุ</u><br>
&nbsp&nbsp&nbsp&nbsp(๑) วัตถุอันตรายในความรับผิดชอบของสำนักงานคณะกรรมการอาหารและยา กรมวิชาการเกษตร กรมประมง และกรมปศุสัตว์ ไม่ต้องระบุสูตรเคมี<br>
&nbsp&nbsp&nbsp&nbsp(๒) วัตถุอันตรายในความรับผิดชอบของกรมโรงงานอุตสาหกรรมไม่ต้องระบุสูตร (Formulation)<br>
&nbsp&nbsp&nbsp&nbsp(๓) เอกสารประกอบคำขออนุญาตดังกล่าวข้างต้นต้องแนบเฉพาะการขออนุญาตครั้งแรกหรือในกรณีที่เอกสารประกอบคำขออนุญาตมีการเปลี่ยนแปลงข้อความไปจากฉบับเดิมที่เคยมอบไว้<br>
&nbsp&nbsp&nbsp&nbsp(๔) ให้ทำเครื่องหมายในช่องที่เหลี่ยมหน้าข้อความที่ต้องการ<br>
</p>

<br><br><br>
<p align = "left">
สถานที่เก็บรักษาวัตุอันตรายแห่งที่ ๒ ชื่อ <input = "text" class="box" name="store2" style="width:400px"><br>
ตั้งอยู่ที่ <input = "text" class="box" name="saddr2" style="width:90px"> หมู่ที่ <input = "text" class="box" name="smhoo2" style="width:30px"> ตรอก/ซอย <input = "text;" name="ssoi2" style="width:100px"><br>
ถนน  <input = "text" class="box" name="sroad2" style="width:150px"> ตำบล/แขวง  <input = "text" class="box" name="sdistrict2" style="width:200px"> อำเภอ/เขต <input = "text" class="box" name="sarea2" style="width:200px"><br>
จังหวัด <input = "text" class="box" name="sprovince2" style="width:150px"> รหัสไปรษณีย์ <input = "text" class="box" name="szip code2" style="width:150px"> โทรศัพท์ <input = "text" class="box" name="stel2" style="width:150px"> โทรสาร <input = "text" class="box" name="sfax2" style="width:150px"><br>

</p>

</div>
</div>


