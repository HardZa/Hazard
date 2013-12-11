 <?php
  
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

if(!Permission::userAddAllowed())
{
	//Redirect::to(403);
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
 		$("#usernationality").val('');
 	}

 	$(document).ready(function(){

 		<?php
 			echo '$("#regis_type").val("'.Input::post('regis_type').'");';
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
 

<div class="page-header">
    <h1>ลงทะเบียนผู้ใช้</h1>
</div>

 <form class="form-horizontal" method="post" action="" role="form" >
 	<div class="form-group">
    	<label class="col-sm-3 control-label">ประเภทผู้ใช้</label>
	    <div class="col-sm-4">
			<select class="form-control" name="regis_type" id="regis_type">
				<option value="" >--เลือกประเภทผู้ใช้--</option>
			    <option value="client"  >เอกชน</option>
			    <option value="hazcontrol"  >เจ้าหน้าที่ควบคุมวัตถุอันตราย</option>
			    <option value="plantprotection">เจ้าหน้าที่สำนักอารักขาพืช</option>
			    <option value="agriproduction" >เจ้าหน้าที่สำนักปัจจัยการผลิต</option>
			    <option value="cashier" >เจ้าหน้าที่การเงิน</option>
			</select> 
	    </div>
  	</div>

  	<div class="form-group" >
    	<label for="username" class="col-sm-3 control-label">ชื่อล็อกอิน</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="username" name="username" placeholder="ชื่อล็อกอิน" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="name" class="col-sm-3 control-label">ชื่อ-สกุล</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ-สกุล" <?php echoValue('name'); ?> >
	    </div>
 	</div>

<div id ="client_form">

	<div class="form-group" >
    	<label for="userbirthdate" class="col-sm-3 control-label">วัน-เดือน-ปี เกิด</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userbirthdate" name="userbirthdate" placeholder="DD-MM-YYYY" <?php echoValue('userbirthdate'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="usernationality" class="col-sm-3 control-label">สัญชาติ</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="usernationality" name="usernationality" placeholder="สัญชาติ" <?php echoValue('usernationality'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="usertaxid" class="col-sm-3 control-label">เลขประจำตัวผู้เสียภาษี</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="usertaxid" name="usertaxid" placeholder="เลขประจำตัวผู้เสียภาษี" <?php echoValue('usertaxid'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="useraddrhouse" class="col-sm-3 control-label">ที่อยู่</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="useraddrhouse" name="useraddrhouse" placeholder="ที่อยู่" <?php echoValue('useraddrhouse'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="useraddrvillage" class="col-sm-3 control-label">หมู่ที่</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="useraddrvillage" name="useraddrvillage" placeholder="หมู่ที่" <?php echoValue('useraddrvillage'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userdrive" class="col-sm-3 control-label">ตรอก/ซอย</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userdrive" name="userdrive" placeholder="ตรอก/ซอย" <?php echoValue('userdrive'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="useraddrroad" class="col-sm-3 control-label">ถนน</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="useraddrroad" name="useraddrroad" placeholder="ถนน" <?php echoValue('useraddrroad'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="usersubdistrict" class="col-sm-3 control-label">ตำบล/แขวง</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="usersubdistrict" name="usersubdistrict" placeholder="ตำบล/แขวง" <?php echoValue('usersubdistrict'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userprovince" class="col-sm-3 control-label">จังหวัด</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userprovince" name="userprovince" placeholder="จังหวัด" <?php echoValue('userprovince'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userpostalcode" class="col-sm-3 control-label">รหัสไปรษณีย์</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userpostalcode" name="userpostalcode" placeholder="รหัสไปรษณีย์" <?php echoValue('userpostalcode'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userphone" class="col-sm-3 control-label">หมายเลขโทรศัพท์</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userphone" name="userphone" placeholder="หมายเลขโทรศัพท์" <?php echoValue('userphone'); ?> >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userfax" class="col-sm-3 control-label">หมายเลขโทรสาร</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userfax" name="userfax" placeholder="หมายเลขโทรสาร" <?php echoValue('userfax'); ?> >
	    </div>
 	</div>

</div>

	<button type="submit" class="btn btn-primary col-sm-offset-3">ลงทะเบียน</button>

</form>
 



 <?php
 include(resolveHeader('includes/footer.php'));
 ?>