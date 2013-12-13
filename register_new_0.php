<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
	include(resolveHeader('includes/upload_head.php'));	
	$errors=array();
	if(Input::exists('post'))
	{
	
		
		$validate = new Validate();
		$validate->check($_POST,array(
			'hazardname'=> array(
				'required'=>true
			)
		));
		if($validate->passed())
		{
			echo "<h1>pass</h1>";
			$r = Request::create_request($user->get('userid'),0,$_GET);
			foreach ($picarr as $value) {
				$r->add_pic(PIC_DOC_ATTACH,$value);
			}
			
		}else{
			echo "<h1>fail</h1>";
		}
		$errors = $validate->errors();
	}

?>
<div class="container">

<div class="page-header">
    <h1>คำขอขึ้นทะเบียนวัตถุอันตราย</h1>
</div>

<form class="form-horizontal" role="form" method="post" action="">
  <div class="form-group">
    <label class="col-sm-4 control-label">เพื่อ</label>
    <div class="col-sm-8">
		  <label class="radio-inline">
		    <input type="radio" name="for" id="for1" value="นำเข้า" checked>นำเข้า
		  </label>
		  <label class="radio-inline">
		    <input type="radio" name="for" id="for2" value="ส่งออก">ส่งออก
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
  <?php
include(resolveHeader('includes/upload_form.php'));
?>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">ลงทะเบียน</button>
    </div>
  </div>
</form>







</div>
<?php
 	include(resolveHeader('includes/footer.php'));
?>