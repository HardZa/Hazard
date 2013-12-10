 <?php
  
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
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

 		$("#btn").click(function(){
 			clearClientForm();
 		});

 		
 	});
 </script>

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
			}else{
				echo "CLIENT FAIL";
			}
		}else{
			echo "PASS";
			$password = User::get_rand_password();
			User::create_user(Input::post('regis_type'),Input::post('username'),$password,Input::post('name'));

		}
	}else{
		 echo "FAIL";
	}
	echo ("<br>");
	$errors = $validate->errors();
	$client_errors = $client_validate->errors();
	var_dump($client_errors);
}

function echoValue($field)
{
	echo ' value="'.Input::post($field).'" ';
}

 
 ?>
 


 <form class="form-horizontal" method="post" action="" role="form" >
	ประเภทผู้ใช้ 
	<select name="regis_type" id="regis_type">
		<option value="" >--เลือกประเภทผู้ใช้--</option>
	    <option value="client"  >เอกชน</option>
	    <option value="hazcontrol"  >เจ้าหน้าที่ควบคุมวัตถุอันตราย</option>
	    <option value="plantprotection">เจ้าหน้าที่สำนักอารักขาพืช</option>
	    <option value="agriproduction" >เจ้าหน้าที่สำนักปัจจัยการผลิต</option>
	    <option value="cashier" >เจ้าหน้าที่การเงิน</option>
	</select> 
	<?php
	if(getifset($errors,'regis_type'))
	echo "กรุณาเลือก"; 
?>
<br><br><br>

<p align="left">
ชื่อล็อกอิน:  <input type="text" name="username" <?php echoValue('username'); ?> > (เป็นตัวอักษรภาษาอังกฤษตัวเล็ก, เลข 0-9, หรือสัญลักษณ์ '-','_','.' ยาวไม่เกิน 60 ตัวอักษร)<br>
ชื่อ-สกุล:   <input type="text" name="name" <?php echoValue('name'); ?> ><br>
</p>
<br><br><br><br>
<!--<button id="but">CLICK</button>-->

<input type ="button" id="btn">

<div id ="client_form" align="left">

|  วัน-เดือน-ปี เกิด:   <input type="text" name="userbirthdate" id="userbirthdate" <?php echoValue('userbirthdate'); ?>> [กรอกเป็น วัน-เลขเดือน-ปีพ.ศ.สี่หลัก] เช่น  31-01-2532 (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)<br>
|  สัญชาติ: 

<select name="usernationality" id="usernationality">
<?php 
	include(resolveHeader("includes/forms/element/nationality.php"));
?>
</select>  (ไม่ต้องระบุ กรณีที่เป็นนิติบุคคล)<br>

| !เลขประจำตัวผู้เสียภาษี  <input type="text" name="usertaxid" id="usertaxid" <?php echoValue('usertaxid'); ?>>[กรอก: ตัวเลขล้วน]<br>
| <br>
| ที่อยู่:<br>
|&nbsp;&nbsp;&nbsp;&nbsp;!บ้านเลขที่  <input type="text" name="useraddrhouse" id="useraddrhouse"  <?php echoValue('useraddrhouse'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;หมู่ที่      <input type="text" name="useraddrvillage" id="useraddrvillage" <?php echoValue('useraddrvillage'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;ตรอก/ซอย <input type="text" name="userdrive" id="userdrive" <?php echoValue('userdrive'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!ถนน <input type="text" name="useraddrroad" id="useraddrroad" <?php echoValue('useraddrroad'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!ตำบล/แขวง <input type="text" name="usersubdistrict" id="usersubdistrict" <?php echoValue('usersubdistrict'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!จังหวัด <input type="text" name="userprovince" id="userprovince" <?php echoValue('userprovince'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!รหัสไปรษณีย์ <input type="text" name="userpostalcode" id="userpostalcode"   <?php echoValue('userpostalcode'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;!หมายเลขโทรศัพท์ <input type="text" name="userphone" id="userphone"  <?php echoValue('userphone'); ?>><br>
|&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขโทรสาร <input type="text" name="userfax" id="userfax" <?php echoValue('userfax'); ?>><br>

</div>

<input type="submit" value="เพิ่มผู้ใช้">
</form>
 



 <?php
 include(resolveHeader('includes/footer.php'));
 ?>