<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
	include(resolveHeader('includes/upload_head.php')); 
  
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
            $r = Request::create_request($user->get('userid'),VO_5,$_POST);
			$j;
			for($j=0;$j<count($picarr);$j++)
			{
				$r->add_pic(PIC_DOC_ATTACH,$picarr[$j]);
			}
			$r->redirect();
        }
		
    }
?>
<div class="container">
<div class="data-box">
<div class="page-header">
    <h1>คำขออนุญาตส่งออกวัตถุอันตราย</h1>
</div>

<form class="form-horizontal" role="form" method="post" action="">
  <div class="form-group">
  			<label class="col-sm-offset-1">
    			สถานที่เก็บรักษาวัตถุอันตราย
  			</label>
  </div>
  <div class="form-group" >
    <label for="storename" class="col-sm-4 control-label">ชื่อ</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storename" name="storename" placeholder="ชื่อ" value="<?php echo Input::post('storename'); ?>">
    </div>
  </div>
  <div class="form-group" >
    <label for="storehouse" class="col-sm-4 control-label">ตั้งอยู่เลขที่</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="storehouse" name="storehouse" placeholder="ตั้งอยู่เลขที่" value="<?php echo Input::post('storehouse'); ?>">
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
    <label for="storerroad" class="col-sm-4 control-label">ถนน</label>
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
      <input type="text" class="form-control" id="storeprovince" name="storeprovince" placeholder="จังหวัด" value="<?php echo Input::post('storeprovince'); ?>" >
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
    <label for="storespecialist" class="col-sm-4 control-label">ชื่อผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา(ในกรณีที่มีประกาศฯ ออกตามความในมาตรา ๒๐(๒)แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ กำหนดให้ต้องมีผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบฯ)</label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control" rows="5" id="storespecialist" name="storespecialist" placeholder="" ><?php echo Input::post('storespecialist'); ?></textarea>

    </div>
  </div>
  
  <div class="form-group" >
    	<label for="certidref" class="col-sm-4 control-label">ทะเบียนเลขที่</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="certidref" name="certidref" placeholder="ทะเบียนเลขที่" value="<?php echo Input::post('certidref'); ?>">
    	</div>
  	</div>
  
  <div class="form-group" >
    <label for="orderCountry" class="col-sm-4 control-label">ประเทศปลายทาง</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="orderCountry" name="orderCountry" placeholder="ประเทศปลายทาง" value="<?php echo Input::post('orderCountry'); ?>">
    </div>
  </div>

<div class="form-group" >
    <label for="quantity" class="col-sm-4 control-label">ปริมาณ</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="quantity" name="quantity" placeholder="ปริมาณ" value="<?php echo Input::post('quantity'); ?>">
    </div>
  </div>

<div class="form-group" >
    <label for="note" class="col-sm-4 control-label">หมายเหตุ</label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control" rows="3" id="note" name="note" placeholder="หมายเหตุ" ><?php echo Input::post('note'); ?></textarea>
    </div>
  </div>

  <div class="form-group">
  			<label class="col-sm-10">
    			พร้อมกันนี้ข้าพเจ้าได้ส่งมอบเอกสารประกอบคำอนุญาต ดังต่อไปนี้
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- สำเนาผลการวิเคราะห์วัตถุอันตราย
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- แผนที่สังเขปแสดงสถานที่เก็บรักษาวัตถุอันตรายและบริเวณใกล้เคียง
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- แผนผังภายในของอาคารที่ใช้เป็นสถานที่เก็บรักษาวัตถุอันตราย(ในกรณีที่ประกาศฯออกตามความในมาตรา ๒๐(๑)แห่งพระราชบัญญัติวัตถุอันตราย พ.ศ.๒๕๓๕ ให้สถานที่เก็บรักษาวัตถุอันตรายต้องเป็นไปตามหลักเกณฑ์ที่กำหนด)
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- เอกสารแสดงความรู้ความชำนาญของผู้เชี่ยวชาญหรือบุคลากรเฉพาะรับผิดชอบสำหรับการเก็บรักษา
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- เอกสารแสดงลักษณะภาชนะบรรจุที่จะใช้และการหุ้มห่อหรือผูกมัดภาชนะบรรจุวัตถุอันตราย
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- เอกสารแสดงข้อมูลความปลอดภัยของวัตถุอันตราย เช่น Masterials Safety Data Sheet
  			</label>
  </div>
  <div class="form-group">
  			<label class="col-sm-10 col-sm-offset-1">
    			- อื่นๆ (ระบุ)
  			</label>

  </div>
    <div class="form-group">
  			<label class="col-sm-10">
    			มาเพื่อประกอบการพิจารณาด้วย
  			</label>
    </div>
    <div class="row">
    	<label class="col-sm-3 col-sm-offset-1 control-label">แนบไฟล์เอกสารที่เกี่ยวข้อง</label>
    	<?php include(resolveHeader('includes/upload_block.php')); ?>
    </div>
    <div class="row">
  <div class="form-group">
      <div class="button-regis pull-right">
          <button type="submit" class="btn btn-success">ส่งคำร้อง</button>
      </div>
    </div>
    </div>
</form>
</div>
</div>
<?php
 	include(resolveHeader('includes/footer.php'));
?>