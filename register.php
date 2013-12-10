 <?php
  
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 
 if(Input::Exists())
{
	$validate = new Validate();
	$validate->check($_POST,array(
		"username" => array(
			"required"=>true,
			"min"=>6,
			"max"=>30
		),
		"password" => array(
			"required"=>true,
			"min"=>6,
			"max"=>20
		),
		"name" => array(
			"required"=>true,
			"min"=>1,
			"max"=>30
		)
	));
	
	if($validate->passed())
	{
		try
		{
			User::create( Input::post('username') , Input::post('password') , Input::post('name') );
			echo "ลงทะเบียนสำเร็จ";
		}
		catch(Exception $regiserror)
		{
			echo $regiserror->getMessage();
		}
		//Redirect::to("register_result.php");
	}else{
		foreach($validate->errors() as $error_msg)
		{
			echo $error_msg."<br>";
		}
	}
	
}
 
 ?>
 
 <form class="form-horizontal" method="post" action="" role="form" >
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
<br><br><br>
<p align="left">
ชื่อล็อกอิน:  <input type="text" name="username"> (เป็นตัวอักษรภาษาอังกฤษตัวเล็ก, เลข 0-9, หรือสัญลักษณ์ '-','_','.' ยาวไม่เกิน 60 ตัวอักษร)<br>
รหัสผ่าน<br>
ชื่อ-สกุล:   <input type="text" name="name"><br>
</p>
<br><br><br><br>
<!--<button id="but">CLICK</button>-->


<div id ="client_form" align="left">

|  วัน-เดือน-ปี เกิด:   <input type="text" name="userbirthdate"> [กรอกเป็น วัน-เลขเดือน-ปีพ.ศ.สี่หลัก] เช่น  31-01-2532 (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)<br>
|  สัญชาติ: <select name="usernationality"><?php include(resolveHeader('includes/forms/element/nationality.php')); ?></select>  (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)<br>
| !เลขประจำตัวผู้เสียภาษี  <input type="text" name="usertaxid">[กรอก: ตัวเลขล้วน]<br>
| <br>
| ที่อยู่:<br>
|&nbsp;&nbsp;&nbsp;&nbsp;!บ้านเลขที่  <input type="text" name="useraddrhouse"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;หมู่ที่      <input type="text" name="useraddrvillage"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;ตรอก/ซอย <input type="text" name="userdrive"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!ถนน <input type="text" name="useraddrroad"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!ตำบล/แขวง <input type="text" name="usersubdistrict"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!จังหวัด <input type="text" name="userprovince"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!รหัสไปรษณีย์ <input type="text" name="userpostalcode"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!หมายเลขโทรศัพท์ <input type="text" name="userphone"><br>
|&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขโทรสาร <input type="text" name="userfax"><br>

</div>
</form>
 
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>