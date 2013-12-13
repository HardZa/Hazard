 <?php
   
  function translate($key,$error){
		$new_error = '';
		$new_key = $key;
		if( $key == "username" ) $new_key = "ชื่อล็อกอิน";
		if( $key == "regis_type" ) $new_key = "ประเภทผู้ใช้";
		if( $key == "name" ) $new_key = "ชื่อ-สกุล";
		if( $key == "userbirthdate" ) $new_key = "วันเกิด";
		if( $key == "useraddrhouse" ) $new_key = "บ้านเลขที่";
		if( $key == "usertaxid" ) $new_key = "เลขผู้เสียภาษี";
		if( $key == "useraddrroad" ) $new_key = "ถนน";
		if( $key == "usersubdistrict" ) $new_key = "ตำบล/แขวง";
		if( $key == "userprovince" ) $new_key = "จังหวัด";
		if( $key == "userpostalcode" ) $new_key = "รหัสไปรษณีย์";
		if( $key == "userphone" ) $new_key = "เลขโทรศัพท์";
		
		if( strstr($error,"so short") !== false ){
			$new_error = $new_key." ไม่ควรสั้นเกินไป";
		}
		elseif( strstr($error,"so long") !== false ){
			$new_error = $new_key." ไม่ควรยาวเกิน 60";
		}
		elseif( strstr($error,"we need") !== false ){
			$new_error = "คุณยังไม่ได้กรอก ".$new_key;
			if( $new_key == "regis_type" ){
				$new_error = "คุณยังไม่ได้เลือก ".$new_key;
			}
		}
		elseif( strstr($error,"should be number") !== false ){
			$new_error = $new_key." ต้องเป็นตัวเลข";
		}
		elseif( strstr($error,"should format") !== false ){
			$new_error = "วันเกิดควรอยู่ในรูป DD-MM-YY";
		}
		elseif( strstr($error,"duplicate") !== false ){
			$new_error = $new_key . " ถูกใช้ไปแล้ว";
		}
		return "$('#$key').parent().parent().append('<label style=\"color:red\" class=\"error-message control-label\">".$new_error."</label>');";
	
  }
  function users_error($validate){
  		 if( ! $validate->passed() ){
			foreach( $validate->errors() as $key => $value){
			
				echo "
						$(document).ready(function(){
						$('#$key').parent().parent().addClass('has-error');
						});
				";

				$error = $value[0];
				echo translate($key,$error);
			//	echo "$('#$key').parent().parent().append('<label>".$new_error."</label>');";
			}

		 }	
  }
  function client_error($client_validate){
  		if(Input::post('regis_type')=='client' &&  ! $client_validate->passed() ){
			foreach( $client_validate->errors() as $key => $value){
			
				echo "
						$('#$key').parent().parent().addClass('has-error');
				";

				$error = $value[0];
				echo translate($key,$error);
			
			}
		 }	
  }
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
			$('input,select').parent().parent().removeClass('has-error');
			$('.error-message').remove();
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
 $errors=array();
 $client_errors=array();

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
		$mydb =  DB::get_db();
		$result = $mydb->select('users',null,"username='".Input::post('username')."'");
		if( count($result) > 0 ){
			echo "<script type='text/javascript'>
						$(document).ready(function(){
							$('#username').parent().parent().addClass('has-error'); ";
			echo translate('username','duplicate');
			echo "});</script>";
			client_error($client_validate);
		}else{
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
					client_error($client_validate);
				}
			}else{
				echo "PASS";
				$password = User::get_rand_password();
				User::create_user(Input::post('regis_type'),Input::post('username'),$password,Input::post('name'));
				Redirect::postto('user/add/summary',array_merge($_POST,array('password'=>$password)));
			}
		}
	}else{
		 echo "<script type='text/javascript'>
					$(document).ready(function(){";

		users_error($validate);
		client_error($client_validate);
			

		 echo "});</script>";
	}
	echo ("<br>");
	$errors = $validate->errors();
	$client_errors = $client_validate->errors();
	//var_dump($errors);
	//var_dump($client_errors);

}

function echoValue($field)
{
	echo ' value="'.Input::post($field).'" ';
}

 ?>
 
<div class="container">
	<div class="register-page">
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
		    	<label for="username" class="col-sm-3 control-label">*ชื่อล็อกอิน</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="username" name="username" placeholder="ชื่อล็อกอิน" >
			    </div>
		 	</div>

		 	<div class="form-group" >
		    	<label for="name" class="col-sm-3 control-label">*ชื่อ-สกุล</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ-สกุล" <?php echoValue('name'); ?> >
			    </div>
		 	</div>

		<div id ="client_form">

			<div class="form-group" >
		    	<label for="userbirthdate" class="col-sm-3 control-label">*วัน-เดือน-ปี เกิด</label>
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
		    	<label for="usertaxid" class="col-sm-3 control-label">*เลขประจำตัวผู้เสียภาษี</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="usertaxid" name="usertaxid" placeholder="เลขประจำตัวผู้เสียภาษี" <?php echoValue('usertaxid'); ?> >
			    </div>
		 	</div>

		 	<div class="form-group" >
		    	<label for="useraddrhouse" class="col-sm-3 control-label">*บ้านเลขที่</label>
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
		    	<label for="useraddrroad" class="col-sm-3 control-label">*ถนน</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="useraddrroad" name="useraddrroad" placeholder="ถนน" <?php echoValue('useraddrroad'); ?> >
			    </div>
		 	</div>

		 	<div class="form-group" >
		    	<label for="usersubdistrict" class="col-sm-3 control-label">*ตำบล/แขวง</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="usersubdistrict" name="usersubdistrict" placeholder="ตำบล/แขวง" <?php echoValue('usersubdistrict'); ?> >
			    </div>
		 	</div>

		 	<div class="form-group" >
		    	<label for="userprovince" class="col-sm-3 control-label">*จังหวัด</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="userprovince" name="userprovince" placeholder="จังหวัด" <?php echoValue('userprovince'); ?> >
			    </div>
		 	</div>

		 	<div class="form-group" >
		    	<label for="userpostalcode" class="col-sm-3 control-label">*รหัสไปรษณีย์</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="userpostalcode" name="userpostalcode" placeholder="รหัสไปรษณีย์" <?php echoValue('userpostalcode'); ?> >
			    </div>
		 	</div>

		 	<div class="form-group" >
		    	<label for="userphone" class="col-sm-3 control-label">*หมายเลขโทรศัพท์</label>
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

			<button type="submit" class="btn btn-warning" style="margin-left:232px;">ลงทะเบียน</button>
		</form>
	</div>
 </div>

 <?php
 include(resolveHeader('includes/footer.php'));
 ?>
