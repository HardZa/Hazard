<?php
require_once('core/init.php');
include(resolveHeader('includes/header.php'));

if(!Permission::userEditAllowed())
   Redirect::to(403);
//echo "<br><br>";

if(Input::exists('post'))
{
	$userid = Input::get('user');
	//$user_db['username'] = Input::post('username');
	$user_db['userrealname'] = Input::post('userrealname');

	DB::get_db()->update('users',$user_db,"userid=".$userid);

	if(User::get_group_by_id($userid) == 'client')
	{
		$client_db['userbirthdate'] = Input::post('userbirthdate');
		$client_db['usernationality'] = Input::post('usernationality');
		$client_db['usertaxid'] = Input::post('usertaxid');	
		$client_db['useraddrhouse'] = Input::post('useraddrhouse');
		$client_db['useraddrvillage'] = Input::post('useraddrvillage');
		$client_db['useraddrdrive'] = Input::post('userdrive');
		$client_db['useraddrroad'] = Input::post('useraddrroad');
		$client_db['useraddrsubdistrict'] = Input::post('usersubdistrict');
		$client_db['useraddrdistrict'] = Input::post('userdistrict');
		$client_db['useraddrprovince'] = Input::post('userprovince');
		$client_db['userpostalcode'] = Input::post('userpostalcode');
		$client_db['userphone'] = Input::post('userphone');
		$client_db['userfax'] = Input::post('userfax');
		$client_db['useremail'] = Input::post('useremail');

		DB::get_db()->update('usergroup_client', $client_db, "userid=".$userid);

	}
	else
	{

	}

	echo "Update completed";

}
?>

<div class="container">
<div class="data-box">
<br>
<?php
if(Input::exists('get'))
{
	//echo Input::get('user');
	$userid = Input::get('user');
	
	
	if(User::get_group_by_id($userid) == 'client')
	{
		$user = User::get_client_by_id($userid);

		?>
		<form class="form-horizontal" method="post" action="" role="form" >

		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อล็อกอิน</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user['username']; ?></label>
	  	</div>

		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อ-สกุล</label>
	    	<div class="col-sm-6">
	      		<input type="text" class="form-control" id="userrealname" name="userrealname" placeholder="ชื่อ-สกุล" value="<?php echo $user['userrealname']?>" >
	    	</div>
	  	</div>

	  	<div class="form-group">
	    	<label class="col-sm-3 control-label">ปี-เดือน-วัน เกิด</label>
	    	<div class="col-sm-6">
	      		<input type="text" class="form-control" id="userbirthdate" name="userbirthdate" placeholder="YYYY-MM-DD" value="<?php echo $user['userbirthdate']?>" >
	    	</div>
	  	</div>

	  	<div class="form-group" >
    	<label for="usernationality" class="col-sm-3 control-label">สัญชาติ</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="usernationality" name="usernationality" placeholder="สัญชาติ" value="<?php echo $user['usernationality']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="usertaxid" class="col-sm-3 control-label">เลขประจำตัวผู้เสียภาษี</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="usertaxid" name="usertaxid" placeholder="เลขประจำตัวผู้เสียภาษี" value="<?php echo $user['usertaxid']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="useraddrhouse" class="col-sm-3 control-label">ที่อยู่</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="useraddrhouse" name="useraddrhouse" placeholder="ที่อยู่" value="<?php echo $user['useraddrhouse']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="useraddrvillage" class="col-sm-3 control-label">หมู่ที่</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="useraddrvillage" name="useraddrvillage" placeholder="หมู่ที่" value="<?php echo $user['useraddrvillage']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userdrive" class="col-sm-3 control-label">ตรอก/ซอย</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userdrive" name="userdrive" placeholder="ตรอก/ซอย" value="<?php echo $user['useraddrdrive']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="useraddrroad" class="col-sm-3 control-label">ถนน</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="useraddrroad" name="useraddrroad" placeholder="ถนน" value="<?php echo $user['useraddrroad']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="usersubdistrict" class="col-sm-3 control-label">ตำบล/แขวง</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="usersubdistrict" name="usersubdistrict" placeholder="ตำบล/แขวง" value="<?php echo $user['useraddrsubdistrict']?>" >
	    </div>
 	</div>
    
    <div class="form-group" >
    	<label for="userdistrict" class="col-sm-3 control-label">อำเภอ/เขต</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userdistrict" name="userdistrict" placeholder="อำเภอ/เขต" value="<?php echo $user['useraddrdistrict']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userprovince" class="col-sm-3 control-label">จังหวัด</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userprovince" name="userprovince" placeholder="จังหวัด" value="<?php echo $user['useraddrprovince']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userpostalcode" class="col-sm-3 control-label">รหัสไปรษณีย์</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userpostalcode" name="userpostalcode" placeholder="รหัสไปรษณีย์" value="<?php echo $user['userpostalcode']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userphone" class="col-sm-3 control-label">หมายเลขโทรศัพท์</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userphone" name="userphone" placeholder="หมายเลขโทรศัพท์" value="<?php echo $user['userphone']?>" >
	    </div>
 	</div>

 	<div class="form-group" >
    	<label for="userfax" class="col-sm-3 control-label">หมายเลขโทรสาร</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="userfax" name="userfax" placeholder="หมายเลขโทรสาร" value="<?php echo $user['userfax']?>" >
	    </div>
 	</div>

	<div class="form-group" >
    	<label for="useremail" class="col-sm-3 control-label">E-Mail</label>
	    <div class="col-sm-6">
	      	<input type="text" class="form-control" id="useremail" name="useremail" placeholder="E-Mail" value="<?php echo $user['useremail']?>" >
	    </div>
 	</div>
 	<div style="margin:0px 0px 0px 100px">
	 	<button type="submit" class="btn btn-primary col-sm-offset-2">แก้ไข</button>
	</div>
	 	<?php
	 }
	 else
	 {
	 	$user = User::get_user_by_id($userid);

		?>
		<form class="form-horizontal" method="post" action="" role="form" >

		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อล็อกอิน</label>
	    	<label class="col-sm-3 radio-inline"><?php echo $user['username']; ?></label>
	  	</div>

		<div class="form-group">
	    	<label class="col-sm-3 control-label">ชื่อ-สกุล</label>
	    	<div class="col-sm-6">
	      		<input type="text" class="form-control" id="userrealname" name="userrealname" placeholder="DD-MM-YYYY" value="<?php echo $user['userrealname']?>" >
	    	</div>
	  	</div>
	  	<div style="margin:0px 0px 0px 100px">
	  		<button type="submit" class="btn btn-primary col-sm-offset-2">แก้ไข</button>
	  	</div>
	  	<?php

	 }
}
?>
</div>
</div>
<?php
include(resolveHeader('includes/footer.php'));
?>