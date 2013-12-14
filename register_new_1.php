<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
    include(resolveHeader('includes/upload_head.php')); 

	if(!Permission::requestSubmissionAllowed())
   Redirect::to(403);
    if(Input::exists('post'))
    {    
		$validate = new Validate();
        $validate->check($_POST,array(
										  'hazardname'=> array('required'=>true)
  									 )
						);
		$user = User::get_user();
        if($validate->passed())
        {
            $r = Request::create_request($user->get('userid'),VO_GS_GVG_1,$_POST);
			$j;
			for($j=0;$j<count($picarr);$j++)
			{
				$r->add_pic(PIC_DOC_ATTACH,mysql_real_escape_string($picarr[$j]));
			}
			$r->redirect();
        }
		
    }
?>
<div class="container">
<div class="data-box">
  <div class="head-box page-header">
    <h1>คำขอขึ้นทะเบียนวัตถุอันตราย</h1>  
  </div>
  <form class="form-horizontal" role="form" method="post" action="">
  	<div class="form-group">
      	<label class="col-sm-4 control-label">ขอขึ้นทะเบียนวัตถุอันตราย :</label>
      	<div class="col-sm-2">
    			<label class="radio-inline">
    		   	<input type="radio" name="group" value="2" checked>ชนิดที่ 2
    			</label>
        </div>
        <div class="col-sm-2">
    		  <label class="radio-inline">
    		    <input type="radio" name="group" value="3">ชนิดที่ 3
    		  </label>
      	</div>
  	</div> 
  	<div class="form-group">
      	<label class="col-sm-4 control-label">โดยมีวัตถุประสงค์เพื่อ :</label>
      	<div class="col-sm-2">
    			<label class="radio-inline">
    		    	<input type="radio" name="purposefirst" value="นำเข้า" checked>นำเข้า
    			</label>
        </div>
        <div class="col-sm-2">
  		  	<label class="radio-inline">
  		    	<input type="radio" name="purposefirst" value="ส่งออก">ส่งออก
  		  	</label>
      	</div>
  	</div>
    <div class="form-group">        
    </div>
  	<div class="form-group">
      	<label class="col-sm-4"> และมีรายละเอียดดังนี้</label>
   	</div>
   	<div class="form-group" >
      	<label for="hazardname" class="col-sm-4">๑. ชื่อวัตถุอันตราย</label>
      	<div class="col-sm-8">
        		<input type="text" class="form-control" id="hazardname" name="hazardname" placeholder="ชื่อวัตถุอันตราย" value="<?php echo Input::post('hazardname'); ?>" >
      	</div>
    </div>
  	<div class="form-group" >
    	<label for="hazardformulation" class="col-sm-4" >๒. สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="2" id="hazardformulation" name="hazardformulation" placeholder="สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ" ><?php echo Input::post('hazardformulation'); ?></textarea>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="businessname" class="col-sm-4" >๓. ชื่อทางการค้าหรือหมายเลขรหัส</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="businessname" name="businessname" placeholder="ชื่อทางการค้าหรือหมายเลขรหัส" value="<?php echo Input::post('businessname'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="producer" class="col-sm-4" >๔. ชื่อผู้ผลิตและแหล่งผลิต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="producer" name="producer" placeholder="ชื่อผู้ผลิตและแหล่งผลิต" value="<?php echo Input::post('producer'); ?>">
    	</div>
        
  	</div>

    <div class="form-group" >
    	<label for="productname" class="col-sm-4" >จาก</label>
    <div class="col-sm-8">
      		<input type="text" class="form-control" id="productname" name="productname" placeholder="จาก" value="<?php echo Input::post('productname'); ?>">
    	</div>
    </div>
    
  	<div class="form-group" >
    	<label for="importer" class="col-sm-4" >๕. ชื่อผู้นำเข้า</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="importer" name="importer" placeholder="ชื่อผู้นำเข้า" value="<?php echo Input::post('importer'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="saleman" class="col-sm-4" >๖. ชื่อผู้จำหน่าย/ผู้จัดจำหน่าย</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="saleman" name="saleman" placeholder="ชื่อผู้จำหน่าย/ผู้จัดจำหน่าย" value="<?php echo Input::post('saleman'); ?>">
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="container" class="col-sm-4" >๗. ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ พร้อมทั้งขนาดบรรจุ</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="5" id="container" name="container" placeholder="ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ พร้อมทั้งขนาดบรรจุ" ><?php echo Input::post('container'); ?></textarea>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="purpose" class="col-sm-4" >๘. ประเภทของการใช้</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="5" id="purpose" name="purpose" placeholder="ประเภทของการใช้" ><?php echo Input::post('purpose'); ?></textarea>
    	</div>
  	</div>
    <div class="row">
    	<label class="col-sm-3 col-sm-offset-1 control-label">แนบไฟล์เอกสารที่เกี่ยวข้อง</label>
    	<?php include(resolveHeader('includes/upload_block.php')); ?>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="button-regis pull-right">
                <button type="submit" class="btn btn-success">ลงทะเบียน</button>
            </div>
        </div>
    </div>
  </form>



</div> 

</div>
<?php
 	include(resolveHeader('includes/footer.php'));
?>