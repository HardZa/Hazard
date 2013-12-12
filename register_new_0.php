<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));

	$errors=array();
	if(Input::exists('get'))
	{
		$validate = new Validate();
		$validate->check($_GET,array(
			'hazardname'=> array(
				'required'=>true
			),
			'for'=> array(
				'required'=>true,
				'numeric'=>true
			)
		));
		if($validate->passed())
		{
			echo "<h1>pass</h1>";
			Request::create_request($user->get_user()->get('userid'),0,$_GET);
		}else{
			echo "<h1>fail</h1>";
		}
		$errors = $validate->errors();
	}

?>

<div class="page-header">
    <h1>คำขอขึ้นทะเบียนวัตถุอันตราย</h1>
</div>

<form class="form-horizontal" role="form" method="get" action="">
  <div class="form-group">
    <label class="col-sm-4 control-label">เพื่อ</label>
    <div class="col-sm-8">
		  <label class="radio-inline">
		    <input type="radio" name="for" id="for1" value="1" checked>นำเข้า
		  </label>
		  <label class="radio-inline">
		    <input type="radio" name="for" id="for2" value="2">ส่งออก
		  </label>
    </div>
  </div>
  <div class="form-group" >
    <label for="hazardname" class="col-sm-4 control-label">ชื่อวัตถุอันตราย</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="hazardname" name="hazardname" placeholder="ชื่อวัตถุอันตราย" >
    </div>
  </div>
  <div class="form-group" >
    <label for="solchem" class="col-sm-4 control-label" >สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="solchem" name="solchem" placeholder="สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ" >
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">ลงทะเบียน</button>
    </div>
  </div>
</form>


<?php
 	include(resolveHeader('includes/footer.php'));
?>