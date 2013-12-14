<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
	include(resolveHeader('includes/upload_head.php')); 
  
  if(!Permission::requestSubmissionAllowed())
   Redirect::to(403);
  $error = array();
    if(Input::exists('post'))
    {    
		$validate = new Validate();
        $validate->check($_POST,array(
										  'storename'=> array('required'=>true)
  									 )
						);
		$user = User::get_user();
        if($validate->passed())
        {
            $r = Request::create_request($user->get('userid'),VO_GS_GVG_12,$_POST,$_POST['certidref']);
			$j;
			for($j=0;$j<count($picarr);$j++)
			{
				$r->add_pic(PIC_DOC_ATTACH,$picarr[$j]);
			}
			$r->redirect();
        }
		  $error = $validate->errors();
    }
    $certs = Certificate::get_user_certs( $user->get('userid') , VO_GS_GVG_2 );
    if(count($certs) == 0) Redirect::to(704);
?>
<div class="container">
<div class="data-box">
<div class="page-header">
    <h1>คำขออนุญาตผลิตหรือนำเข้าตัวอย่างวัตถุอันตราย</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="">
	<div class="form-group">
    	<label class="col-sm-4 control-label">มีความประสงค์จะขออนุญาต</label>
    	<div class="col-sm-2">
			<label class="radio-inline">
		    	<input type="radio" name="purposefirst" value="import" checked>นำเข้า
			</label>
		  	<label class="radio-inline">
		    	<input type="radio" name="purposefirst" value="produce">ผลิต
		  	</label>
    	</div>
    	<label class="col-sm-4 control-label">ตัวอย่างวัตถุอันตรายเพื่อใช้ในการขึ้นทะเบียน
    	</label>
	</div> 
	<div class="form-group">
    	<label class="col-sm-4">ชื่อและที่อยู่ของสถานที่ผลิต/เก็บรักษาวัตถุอันตราย</label>
 	</div>
 		<div class="form-group <?php if(isset($error['storename']))echo 'has-error'; ?>" >
    	<label for="storename" class="col-sm-4 control-label">ชื่อ</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storename" name="storename" placeholder="ชื่อ" value="<?php echo Input::post('storename'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storehouse" class="col-sm-4 control-label">ตั้งอยู่เลขที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storehouse" name="storehouse" placeholder="เลขที่" value="<?php echo Input::post('storehouse'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storevillage" class="col-sm-4 control-label">หมู่ที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storevillage" name="storevillage" placeholder="หมู่ที่" value="<?php echo Input::post('storevillage'); ?>">
    	</div>
  	</div>
    <div class="form-group" >
      <label for="storedrive" class="col-sm-4 control-label">ตรอก/ซอย</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="storedrive" name="storedrive" placeholder="ตรอก/ซอย" value="<?php echo Input::post('storedrive'); ?>">
      </div>
    </div>
  	<div class="form-group" >
    	<label for="storeroad" class="col-sm-4 control-label">ถนน</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storeroad" name="storeroad" placeholder="ถนน" value="<?php echo Input::post('storeroad'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storesubdistrict" class="col-sm-4 control-label">ตำบล/แขวง</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storesubdistrict" name="storesubdistrict" placeholder="ตำบล/แขวง" value="<?php echo Input::post('storesubdistrict'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storedistrict" class="col-sm-4 control-label">อำเภอ/เขต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storedistrict" name="storedistrict" placeholder="อำเภอ/เขต" value="<?php echo Input::post('storedistrict'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storeprovince" class="col-sm-4 control-label">จังหวัด</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storeprovince" name="storeprovince" placeholder="จังหวัด" value="<?php echo Input::post('storeprovince'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storepostalcode" class="col-sm-4 control-label">รหัสไปรษณีย์</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storepostalcode" name="storepostalcode" placeholder="รหัสไปรษณีย์" value="<?php echo Input::post('storepostalcode'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storephone" class="col-sm-4 control-label">โทรศัพท์</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storephone" name="storephone" placeholder="โทรศัพท์" value="<?php echo Input::post('storephone'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storefax" class="col-sm-4 control-label">โทรสาร</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storefax" name="storefax" placeholder="โทรสาร" value="<?php echo Input::post('storefax'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="storeemail" class="col-sm-4 control-label">E-mail address</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="storeemail" name="storeemail" placeholder="E-mail" value="<?php echo Input::post('storeemail'); ?>">
    	</div>
  	</div>
      <?php  fastRender('utils/printCerts.php',array( 'cert' => $certs , 'print_label' => 'ทะเบียนเลขที่' , 'no_cert' => 'ไม่มีการลงทะเบียนไว้' )); ?>
<!--    
  	<div class="form-group">
    	<label class="col-sm-4">โดยมีรายละเอียดดังนี้</label>
 	</div>
 	<div class="form-group" >
    	<label for="hazardname" class="col-sm-4">๑. ชื่อวัตถุอันตราย</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="hazardname" name="hazardname" placeholder="ชื่อวัตถุอันตราย" value="<?php //echo Input::post('hazardname'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="hazardformulation" class="col-sm-4" >๒. สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="hazardformulation" name="hazardformulation" placeholder="สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ" value="<?php //echo Input::post('hazardformulation'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="businessname" class="col-sm-4" >๓. ชื่อทางการค้าหรือหมายเลขรหัส</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="businessname" name="businessname" placeholder="ชื่อทางการค้าหรือหมายเลขรหัส" value="<?php //echo Input::post('businessname'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="producer" class="col-sm-4" >๔. ชื่อผู้ผลิตและแหล่งผลิต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="producer" name="producer" placeholder="ชื่อผู้ผลิตและแหล่งผลิต" value="<?php //echo Input::post('producer'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="importer" class="col-sm-4" >๕. ชื่อผู้นำเข้า</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="importer" name="importer" placeholder="ชื่อผู้นำเข้า" value="<?php //echo Input::post('importer'); ?>">
    	</div>
  	</div> -->
  	<div class="form-group" >
    	<label for="quantity" class="col-sm-4" > ปริมาณ</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="quantity" name="quantity" placeholder="ปริมาณ" value="<?php echo Input::post('quantity'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label class="col-sm-6" > เอกสารและตัวอย่างที่ต้องส่งประกอบการขออนุญาต</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-8 col-sm-offset-1">
    		- แผนการทดลองประสิทธิภาพและพิษตกค้าง
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-8 col-sm-offset-1">
    		- เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย
  		</label>
  	</div>
  	<div class="form-group">
  		<label class="col-sm-8 col-sm-offset-1">
    		- อื่นๆ (ระบุ)
  		</label>
  	</div>
    <div class="row">
    	<label class="col-sm-3 col-sm-offset-1 control-label">แนบไฟล์เอกสารที่เกี่ยวข้อง</label>
    	<?php include(resolveHeader('includes/upload_block.php')); ?>
    </div>
    <div class="row">
  	<div class="form-group">
    	<div class="col-sm-offset-4 col-sm-10">
      		<button type="submit" <?php printDisableWhenEmpty($certs); ?>  class="btn btn-success">ส่งคำร้อง</button>
    	</div>
  	</div>
    </div>
</form>
</div>
</div>

<script type='text/javascript'>
$(document).bind('keydown', 'alt+f1', function assets() {
  $("#storename").val("บริษัท เมอร์ค จำกัด");
  $("#storehouse").val("2170");
  $("#storevillage").val("3");
  $("#storedrive").val("-");
  $("#storeroad").val("เพชรบุรีตัดใหม่");
  $("#storesubdistrict").val("บางกะปิ");
  $("#storedistrict").val("ห้วยขวาง");
  $("#storeprovince").val("กรุงเทพ");
  $("#storepostalcode").val("10320");
  $("#storephone").val("(662) 308 - 0218");
  $("#storefax").val("-");
  $("#storeemail").val("hazard_studio@thai.com");
  //$("#certidref").val("");
  $("#quantity").val("200 แกลลอน");
});
</script>
<?php
 	include(resolveHeader('includes/footer.php'));
?>
