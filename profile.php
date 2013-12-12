 <?php
 
require_once('core/init.php');
include(resolveHeader('includes/header.php'));

echo "<br>";

$user = User::get_user();

if(Input::Exists())
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
			"max"=>20
		),
		"newpassword" => array(
			"required"=>true,
			"max"=>20
		),
		"newpassword2" => array(
			"required"=>true,
			"max"=>20
		)
	));

	if($validate->passed())
	{
		if($user_db['userpasssha1'] != $passwordSha1)
		{
			echo "ใส่พาสเวิร์ดเก่าไม่ถูกต้อง";
			echo ("<br>");
		}
		else if(Input::post('newpassword') != Input::post('newpassword2'))
		{
			echo "ใส่พาสเวิร์ดใหม่ไม่เหมือนกัน";
			echo ("<br>");
		}
		else
		{
			echo "Update your new password completed";
			$user->set('userpasssha1',$newpasswordSha1);
			$user->save();
		}
	}
	else
	{
		echo "INPUT Fail <br>";
		var_dump($validate->errors());
	}

}

?>

<div class="page-header">
    <h1>ข้อมูลผู้ใช้</h1>
</div>

<?php

if($user->is_group('client'))
{
	//var_dump(DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['userbirthdate']);
	

	?>
	<form class="form-horizontal" method="post" action="" role="form" >
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อ-สกุล</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('userrealname'); ?><label>
	  	</div>
	  	
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อล็อกอิน</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('username'); ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ประเภทผู้ใช้</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get_groupname(); ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">วัน-เดือน-ปี เกิด</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['userbirthdate']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">สัญชาติ</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['usernationality']; ?><label>
	  	</div>
	  	
	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">เลขประจำตัวผู้เสียภาษี</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['usertaxid']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">บ้านเลขที่</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useraddrhouse']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">หมู่ที่</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useraddrvillage']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ตรอก/ซอย</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useraddrdrive']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ถนน</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useraddrroad']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ตำบล/แขวง</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useraddrsubdistrict']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">อำเภอ/แขวง</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useraddrdistrict']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">จังหวัด</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useraddrprovince']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">รหัสไปรษณีย์</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['userpostalcode']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">หมายเลขโทรศัพท์</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['userphone']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">หมายเลขโทรสาร</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['userfax']; ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">อีเมลล์</label>
	    	<label class="col-sm-3 radio-inline"><?php echo DB::get_db()->select('usergroup_client',null,'userid='.$user->get('userid'))[0]['useremail']; ?><label>
	  	</div>


		<div class="form-group" >
	    	<label for="oldpassword" class="col-sm-3 control-label">รหัสผ่านเก่า</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="พาสเวอร์เก่า" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="พาสเวอร์ใหม่" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่อีกครั้ง</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="พาสเวอร์ใหม่อีกครั้ง" >
		    </div>
	 	</div>

	 <button type="edit" class="btn btn-primary col-sm-offset-3">แก้ไข</button>

 	<?php
}
else
{
	?>
	<form class="form-horizontal" method="post" action="" role="form" >
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อ-สกุล</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('userrealname'); ?><label>
	  	</div>
	  	
		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อล็อกอิน</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get('username'); ?><label>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ประเภทผู้ใช้</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user->get_groupname(); ?><label>
	  	</div>
	  	
		<div class="form-group" >
	    	<label for="oldpassword" class="col-sm-3 control-label">รหัสผ่านเก่า</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="พาสเวอร์เก่า" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="พาสเวอร์ใหม่" >
		    </div>
	 	</div>

	 	<div class="form-group" >
	    	<label for="newpassword" class="col-sm-3 control-label">รหัสผ่านใหม่อีกครั้ง</label>
		    <div class="col-sm-6">
		      	<input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="พาสเวอร์ใหม่อีกครั้ง" >
		    </div>
	 	</div>

	 <button type="edit" class="btn btn-primary col-sm-offset-3">แก้ไข</button>

 	<?php
}


include(resolveHeader('includes/footer.php'));
?>