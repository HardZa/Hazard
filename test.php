   <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <script type="text/javascript">
 	$(document).ready(function(){
 		$("#regis_type").change(function()
 		{
 			if( $("#regis_type option:selected").val() =='client') 
 			{
 				$('#client_form').fadeIn();
 			}else{
				$('#client_form').fadeOut();	
 			}
 		});
 		
 	});
 </script>
 
<select name="DateOfBirth_Month" id="regis_type">
    <option value="client">เอกชน</option>
    <option value="hazcontrol">เจ้าหน้าที่ควบคุมวัตถุอันตราย</option>
    <option value="plantprotection">เจ้าหน้าที่สำนักอารักขาพืช</option>
    <option value="agriproduction">เจ้าหน้าที่สำนักปัจจัยการผลิต</option>
    <option value="cashier">เจ้าหน้าที่การเงิน</option>
</select> 

<button id="but">CLICK</button>


<div id ="client_form">

|  วัน-เดือน-ปี เกิด:   [กรอก: วัน-เลขเดือน-ปีพ.ศ.สี่หลัก] เช่น  31-01-2532 (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)<br>
|  สัญชาติ:        [เลือก: จากรายการประเทศ + ไม่ระบุ] (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)<br>
| !เลขประจำตัวผู้เสียภาษี  [กรอก: ตัวเลขล้วน]<br>
| <br>
| ที่อยู่:<br>
|  !บ้านเลขที่  [กรอก: ]<br>
|   หมู่ที่      [กรอก:]<br>
|   ตรอก/ซอย [กรอก:]<br>
|  !ถนน [กรอก: ]<br>
|  !ตำบล/แขวง [กรอก: ]<br>
|  !จังหวัด [กรอก: ]<br>
|  !รหัสไปรษณีย์ [กรอก: ]<br>
|  !หมายเลขโทรศัพท์ [กรอก: ]<br>
|   หมายเลขโทรสาร [กรอก: ]<br>

</div>

 <?php

 include(resolveHeader('includes/footer.php'));
 ?>