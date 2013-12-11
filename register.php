 <?php
  
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

if(!Permission::userAddAllowed())
{
	Redirect::to(403);
}

 ?>
 <script type="text/javascript">
 	function clearClientForm()
 	{
 		$("#userbirthdate").val('');
 		$("#usertaxid").val('');
 		$("#useraddrhouse").val('');
 		$("#useraddrvillage").val('');
 		$("#userdrive").val('');
 		$("#useraddrroad").val('');
 		$("#usersubdistrict").val('');
 		$("#userprovince").val('');
 		$("#userpostalcode").val('');
 		$("#userphone").val('');
 		$("#userfax").val('');
 		$("#usernationality").val('--');
 	}

 	$(document).ready(function(){

 		<?php
 			echo '$("#regis_type").val("'.Input::post('regis_type').'");';
 			echo '$("#usernationality").val("'.Input::post('usernationality').'");';
 		?>

 		if( $("#regis_type option:selected").val() =='client') 
 		{
 			$('#client_form').show();	
 		}else{
 			$('#client_form').hide();	
 		}

 		$("#regis_type").change(function()
 		{
 			if( $("#regis_type option:selected").val() =='client') 
 			{
 				clearClientForm();
 				$('#client_form').fadeIn();
 			}else{
				$('#client_form').fadeOut();	
 			}
 		});
 		
 	});
 </script>
<br><br><br>

 <?php 
 $errors=[];
 $client_errors=[];

 if(Input::Exists())
{

	$validate = new Validate();
	$validate->check($_POST,array(
		"regis_type" => array(
			"required"=>true
		),
		"username" => array(
			"required"=>true,
			"max"=>60
		),
		"name" => array(
			"required"=>true
		)
	));

	$client_validate = new Validate();
	$client_validate->check($_POST,array(
		"userbirthdate" => array(
			"required"=>true,
			"date"=>true
		),
		"usertaxid" => array(
			"required"=>true,
			"numeric"=>true
		),
		"useraddrhouse" => array(
			"required"=>true
		),
		"useraddrroad" => array(
			"required"=>true
		),
		"usersubdistrict" => array(
			"required"=>true
		),
		"userprovince" => array(
			"required"=>true
		),
		"userpostalcode" => array(
			"required"=>true
		),
		"userphone" => array(
			"required"=>true
		)
	));
	
	if($validate->passed())
	{
		if(Input::post('regis_type')=='client')
		{
			if($client_validate->passed())
			{
				echo "CLIENT PASS";
				$password = User::get_rand_password();
				User::create_client(Input::post('username'),$password,Input::post('name'),Input::post('userbirthdate')
					,Input::post('usernationality'),Input::post('usertaxid'),Input::post('useraddrhouse')
					,Input::post('useraddrvillage'),Input::post('userdrive'),Input::post('useraddrroad')
					,Input::post('usersubdistrict'),Input::post('userprovince'),Input::post('userpostalcode')
					,Input::post('userphone'),Input::post('userfax'));
				Redirect::postto('user/add/summary',array_merge($_POST,array('password'=>$password)));
			}else{
				echo "CLIENT FAIL";
			}
		}else{
			echo "PASS";
			$password = User::get_rand_password();
			User::create_user(Input::post('regis_type'),Input::post('username'),$password,Input::post('name'));
			Redirect::postto('user/add/summary',array_merge($_POST,array('password'=>$password)));
		}
	}else{
		 echo "FAIL";
	}
	echo ("<br>");
	$errors = $validate->errors();
	$client_errors = $client_validate->errors();
	var_dump($errors);

}

function echoValue($field)
{
	echo ' value="'.Input::post($field).'" ';
}

 
 ?>
 


 <form class="form-inline" method="post" action="" role="form" >
 	<div align="left" class='frame1'>
	ประเภทผู้ใช้  :&nbsp;&nbsp;
	<select name="regis_type" id="regis_type">
		<option value="" >--เลือกประเภทผู้ใช้--</option>
	    <option value="client"  >เอกชน</option>
	    <option value="hazcontrol"  >เจ้าหน้าที่ควบคุมวัตถุอันตราย</option>
	    <option value="plantprotection">เจ้าหน้าที่สำนักอารักขาพืช</option>
	    <option value="agriproduction" >เจ้าหน้าที่สำนักปัจจัยการผลิต</option>
	    <option value="cashier" >เจ้าหน้าที่การเงิน</option>
	</select> 
	</div>
	<?php
	if(getifset($errors,'regis_type'))
	echo "กรุณาเลือก"; 
?>


<div align="left" class='frame2'>

<span style="color:#FF0000">*</span>ชื่อล็อกอิน :&nbsp;&nbsp;
<input type="text" name="username" id="username" class="form-control" style="width:100px;height:20px;" <?php echoValue('username'); ?> > 
<span style="color:#848484">(เป็นตัวอักษรภาษาอังกฤษตัวเล็ก, เลข 0-9, หรือสัญลักษณ์ '-','_','.' ยาวไม่เกิน 60 ตัวอักษร)</span><br>

<span style="color:#FF0000">*</span>ชื่อ-สกุล :&nbsp;&nbsp;
<input type="text" name="name" id="name" class="form-control" style="width:300px;height:20px;"  <?php echoValue('name'); ?> ><br>

</div>

<!--<button id="but">CLICK</button>-->


<div id ="client_form" align="left" class='frame3'>

วัน-เดือน-ปี เกิด :&nbsp;&nbsp;
<input type="text" name="userbirthdate" id="userbirthdate" class="form-control" style="width:300px;height:20px;" <?php echoValue('userbirthdate'); ?>> 
<span style="color:#848484">[กรอกเป็น วัน-เลขเดือน-ปีพ.ศ.สี่หลัก] เช่น  31-01-2532 (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)</span><br>

สัญชาติ :&nbsp;&nbsp;
<select name="usernationality" id="usernationality">
<?php 
	include(resolveHeader("includes/forms/element/nationality.php"));
?>
</select>  
<span style="color:#848484">(ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)</span	><br>

<span style="color:#FF0000">*</span>เลขประจำตัวผู้เสียภาษี :&nbsp;&nbsp; 
<input type="text" name="usertaxid" id="usertaxid"  class="form-control" style="width:300px;height:20px;" <?php echoValue('usertaxid'); ?>>
<span style="color:#848484">[กรอก: ตัวเลขล้วน]</span><br>

<br>
ที่อยู่:<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>บ้านเลขที่ :&nbsp;&nbsp;
<input type="text" name="useraddrhouse" id="useraddrhouse" class="form-control" style="width:300px;height:20px;" <?php echoValue('useraddrhouse'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;หมู่ที่ :&nbsp;&nbsp;    
<input type="text" name="useraddrvillage" id="useraddrvillage" class="form-control" style="width:300px;height:20px;" <?php echoValue('useraddrvillage'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;ตรอก/ซอย :&nbsp;&nbsp;
<input type="text" name="userdrive" id="userdrive" class="form-control" style="width:300px;height:20px;" <?php echoValue('userdrive'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>ถนน :&nbsp;&nbsp;
<input type="text" name="useraddrroad" id="useraddrroad" class="form-control" style="width:300px;height:20px;" <?php echoValue('useraddrroad'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>ตำบล/แขวง :&nbsp;&nbsp;
<input type="text" name="usersubdistrict" id="usersubdistrict" class="form-control" style="width:300px;height:20px;" <?php echoValue('usersubdistrict'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>จังหวัด :&nbsp;&nbsp;
<input type="text" name="userprovince" id="userprovince" class="form-control" style="width:300px;height:20px;" <?php echoValue('userprovince'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>รหัสไปรษณีย์ :&nbsp;&nbsp;
<input type="text" name="userpostalcode" id="userpostalcode" class="form-control" style="width:300px;height:20px;" <?php echoValue('userpostalcode'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF0000">*</span>หมายเลขโทรศัพท์ :&nbsp;&nbsp;
<input type="text" name="userphone" id="userphone" class="form-control" style="width:300px;height:20px;" <?php echoValue('userphone'); ?>><br>

&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขโทรสาร :&nbsp;&nbsp;
<input type="text" name="userfax" id="userfax"  class="form-control" style="width:300px;height:20px;" <?php echoValue('userfax'); ?>><br>

</div>

<input type="submit" value="เพิ่มผู้ใช้">
</form>
 



 <?php
 include(resolveHeader('includes/footer.php'));
 ?>