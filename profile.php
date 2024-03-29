<?php
 
require_once('core/init.php');
include(resolveHeader('includes/header.php'));

if(!Permission::userDataEditAllowed())
   Redirect::to(403);

echo "<br>";

$user = User::get_user();
$error_msgs = array();
?>


<style type="text/css">
div.mid {
position: relative;
left: 500;
}
</style>

<div class='container'>
<div class="data-box">
<div class="page-header">
    <h1>ข้อมูลผู้ใช้</h1>
</div>
<?php

if($user!=NULL)
{
	if($user->is_group('client'))
	{
		//var_dump(DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['userbirthdate']);

	?>
	<form class="form-horizontal" method="post" action="" role="form" >
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อ-สกุล</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('userrealname'); ?></label>
	  	</div>
	  	
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อล็อกอิน</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('username'); ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ประเภทผู้ใช้</label>
	    	<label class="col-sm-3 radio-inline"><?php echo User::group_to_string($user->get_groupname()); ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">วัน-เดือน-ปี เกิด</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		$tmp = DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'));
	    		echo date_format(date_create($tmp[0]['userbirthdate']),'d ').get_month(date_format(date_create($tmp[0]['userbirthdate']),'m')).' พ.ศ. '.(date_format(date_create($tmp[0]['userbirthdate']),'Y') + 543); ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">สัญชาติ</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['usernationality']; ?></label>
	  	</div>
	  	
	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">เลขประจำตัวผู้เสียภาษี</label>
	    	<label class="col-sm-3 radio-inline"><?php
	    		echo $tmp[0]['usertaxid']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">บ้านเลขที่</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['useraddrhouse']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">หมู่ที่</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['useraddrvillage']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ตรอก/ซอย</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['useraddrdrive']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ถนน</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['useraddrroad']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ตำบล/แขวง</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['useraddrsubdistrict']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">อำเภอ/แขวง</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['useraddrdistrict']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">จังหวัด</label>
	    	<label class="col-sm-3 radio-inline"><?php
	    		echo $tmp[0]['useraddrprovince']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">รหัสไปรษณีย์</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['userpostalcode']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">หมายเลขโทรศัพท์</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['userphone']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">หมายเลขโทรสาร</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['userfax']; ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">อีเมลล์</label>
	    	<label class="col-sm-3 radio-inline"><?php 
	    		echo $tmp[0]['useremail']; ?></label>
	  	</div>


		<div class="form-group" >
	    	<label for="oldpassword" class="col-sm-3 control-label">รหัสผ่านเก่า</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="กรอกรหัสผ่านเก่า" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="กรอกรหัสผ่านใหม่" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่อีกครั้ง</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="กรอกรหัสผ่านใหม่อีกครั้ง" >
		    </div>
	 	</div>
	 <div style="margin:25px 0px 0px 595px">
	 	<button type="edit" class="btn btn-primary">แก้ไข</button>
	 </div>
<?php
if($user!=NULL && Input::Exists())
{
	$passwordSha1 = sha1(Input::post('oldpassword'));
	$newpasswordSha1 = sha1(Input::post('newpassword'));
	$username = $user->get("username");
	$rows = DB::get_db()->select('users',null,"username='$username'",1);
	$user_db = $rows[0];

	$validate = new Validate();
	$validate->check($_POST,array(
		"oldpassword" => array(
			"required"=>true,
		),
		"newpassword" => array(
			"required"=>true,
		),
		"newpassword2" => array(
			"required"=>true,
		)
	));
	
	if($validate->passed())
	{
		if($user_db['userpasssha1'] != $passwordSha1)
		{
			array_push($error_msgs,"ใส่รหัสผ่านเก่าไม่ถูกต้อง");
		}
		else if(Input::post('newpassword') != Input::post('newpassword2'))
		{
			array_push($error_msgs,"ใส่รหัสผ่านใหม่ไม่ตรงกัน");
		}
		else
		{
			$user->set('userpasssha1',$newpasswordSha1);
			$user->save();
			?>
			<div class="profile-error-msg">
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					แก้ไขรหัสผ่านเรียบร้อย
				</div>
			</div>
			<?php
		}
	}
	else
	{
		foreach($validate->errors() as $validate_errors)
		{
			foreach($validate_errors as $validate_error)
				array_push($error_msgs,$validate_error);
		}
		#var_dump($validate->errors());
	}
	
if(count($error_msgs) !=0) {
?>
<div class="profile-error-msg">
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>การแก้ไขข้อมูลผิดพลาด</strong>
		<ul>
	<?php
			foreach($error_msgs as $error_message)
			{
				echo "		<li>".$error_message."\n";
			}
	?>
		</ul>
	</div>
</div>	
<?php
	}

}
?>
	 </form>
<?php
	}
	else
	{
?>
	<form class="form-horizontal" method="post" action="" role="form" >
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อ-สกุล</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('userrealname'); ?></label>
	  	</div>
	  	
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อล็อกอิน</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('username'); ?></label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ประเภทผู้ใช้</label>
	    	<label class="col-sm-3 radio-inline"><?php echo User::group_to_string($user->get_groupname()); ?></label>
	  	</div>
	  	
		<div class="form-group" >
	    	<label for="oldpassword" class="col-sm-3 control-label">รหัสผ่านเก่า</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="กรอกรหัสผ่านเก่า" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="กรอกรหัสผ่านใหม่" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่อีกครั้ง</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="กรอกรหัสผ่านใหม่อีกครั้ง" >
		    </div>
	 	</div>
	 <div style="margin:25px 0px 0px 595px">
		<button type="edit" class="btn btn-primary">แก้ไข</button>
	</div>
<?php
if($user!=NULL && Input::Exists())
{
	$passwordSha1 = sha1(Input::post('oldpassword'));
	$newpasswordSha1 = sha1(Input::post('newpassword'));
	$username = $user->get("username");
	$rows = DB::get_db()->select('users',null,"username='$username'",1);
	$user_db = $rows[0];

	$validate = new Validate();
	$validate->check($_POST,array(
		"oldpassword" => array(
			"required"=>true,
		),
		"newpassword" => array(
			"required"=>true,
		),
		"newpassword2" => array(
			"required"=>true,
		)
	));
	
	if($validate->passed())
	{
		if($user_db['userpasssha1'] != $passwordSha1)
		{
			array_push($error_msgs,"ใส่รหัสผ่านเก่าไม่ถูกต้อง");
		}
		else if(Input::post('newpassword') != Input::post('newpassword2'))
		{
			array_push($error_msgs,"ใส่รหัสผ่านใหม่ไม่ตรงกัน");
		}
		else
		{
			$user->set('userpasssha1',$newpasswordSha1);
			$user->save();
			?>
			<div class="profile-error-msg">
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					แก้ไขรหัสผ่านเรียบร้อย
				</div>
			</div>
			<?php
		}
	}
	else
	{
		foreach($validate->errors() as $validate_errors)
		{
			foreach($validate_errors as $validate_error)
				array_push($error_msgs,$validate_error);
		}
		#var_dump($validate->errors());
	}
	
if(count($error_msgs) !=0) {
?>
<div class="profile-error-msg">
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>การแก้ไขข้อมูลผิดพลาด</strong>
		<ul>
	<?php
			foreach($error_msgs as $error_message)
			{
				echo "		<li>".$error_message."\n";
			}
	?>
		</ul>
	</div>
</div>	
<?php
	}

}
?>
	</form>
<?php
	}
}
?>
</div>
</div>
<?php
include(resolveHeader('includes/footer.php'));
?>