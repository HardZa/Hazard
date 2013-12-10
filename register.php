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
 
 <form class="form-inline" method="post" action="" role="form" >
 <!--<form class="form-horizontal" method="post" action="" role="form" >-->
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

<div id='content' align="left">
	<div align="left" class='frame1'>
	ประเภทของผู้ใช้ :&nbsp;&nbsp;
	<select name="DateOfBirth_Month" id="regis_type" class='form-control' style="width:250px;height:30px;">
    	<option value="client">เอกชน</option>
    	<option value="hazcontrol">เจ้าหน้าที่ควบคุมวัตถุอันตราย</option>
    	<option value="plantprotection">เจ้าหน้าที่สำนักอารักขาพืช</option>
    	<option value="agriproduction">เจ้าหน้าที่สำนักปัจจัยการผลิต</option>
    	<option value="cashier">เจ้าหน้าที่การเงิน</option>
	</select> 
	</div>

	<div align="left" class='frame1'>

	<span style="color:#FF0000">*</span>ชื่อล็อกอิน :&nbsp;&nbsp;
	<input type="text" class="form-control" style="width:100px;height:20px;" placeholder="Username">
	<span style="color:#848484">(เป็นตัวอักษรภาษาอังกฤษตัวเล็ก, เลข 0-9, หรือสัญลักษณ์ '-','_','.' ยาวไม่เกิน 60 ตัวอักษร)</span><br>


	<span style="color:#FF0000">*</span>ชื่อ-สกุล :&nbsp;&nbsp;
	<input type="text" class="form-control" style="width:300px;height:20px;" placeholder="Name"><br>

	</div>

</div>


<br><br>



<!--<button id="but">CLICK</button>-->


<div id="client_form" align="left" class='frame1'>

  	วัน-เดือน-ปี เกิด :&nbsp;&nbsp;
  	<input type="text" name="userbirthdate" class="form-control" style="width:300px;height:20px;"> 
  	<span style="color:#848484">[กรอกเป็น วัน-เลขเดือน-ปีพ.ศ.สี่หลัก] เช่น  31-01-2532 (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)</span><br>

  	สัญชาติ :&nbsp;&nbsp;
  	<select name="usernationality"><?php include(resolveHeader('includes/forms/element/nationality.php')); ?></select>  
  	<span style="color:#848484">(ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)</span	><br>
	
	<span style="color:#FF0000">*</span>เลขประจำตัวผู้เสียภาษี :&nbsp;&nbsp; 
	<input type="text" name="usertaxid" class="form-control" style="width:300px;height:20px;">
	<span style="color:#848484">[กรอก: ตัวเลขล้วน]</span><br>

 	<br>

 	ที่อยู่:<br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>บ้านเลขที่ :&nbsp;&nbsp;<input type="text" name="useraddrhouse" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;หมู่ที่ :&nbsp;&nbsp;<input type="text" name="useraddrvillage" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;ตรอก/ซอย :&nbsp;&nbsp;<input type="text" name="userdrive" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>ถนน :&nbsp;&nbsp;<input type="text" name="useraddrroad" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>ตำบล/แขวง :&nbsp;&nbsp;<input type="text" name="usersubdistrict" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>จังหวัด :&nbsp;&nbsp;<input type="text" name="userprovince" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>รหัสไปรษณีย์ :&nbsp;&nbsp;<input type="text" name="userpostalcode" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>หมายเลขโทรศัพท์ :&nbsp;&nbsp;<input type="text" name="userphone" class="form-control" style="width:300px;height:20px;"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขโทรสาร :&nbsp;&nbsp;<input type="text" name="userfax" class="form-control" style="width:300px;height:20px;"><br>

</div>
</form>
 
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>