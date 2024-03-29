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
										  'certidref'=> array('required'=>true)
  									 )
						);
		$user = User::get_user();
        if($validate->passed())
        {
            $r = Request::create_request($user->get('userid'),VO_GS_GVG_3,$_POST,$_POST['certidref']);
			$j;
			for($j=0;$j<count($picarr);$j++)
			{
				$r->add_pic(PIC_DOC_ATTACH,$picarr[$j]);
			}
			$r->redirect();
        }
		
    }
    $certs = Certificate::get_user_certs( $user->get('userid') , VO_GS_GVG_2 );
    if(count($certs) == 0) Redirect::to(704);
?>
<div class="container">
<div class="data-box">
<div class="head-box page-header">
    <div class="row">
      <div class="col-md-6" style="width: 600px;"> 
        <h2>คำขอต่ออายุใบสำคัญขึ้นทะเบียนวัตถุอันตราย</h2> 
      </div>
      <div class="col-md-3"> 
        <div class="doc-type-lable">
          <h3>วอ./กษ./กวก.๓</h3>  
        </div>
      </div>
    </div>
  </div>
<form class="form-horizontal" role="form" method="post" action="">
<?php  fastRender('utils/printCerts.php',array( 'cert' => $certs , 'print_label' => 'มีความประสงค์จะขอต่ออายุใบสำคัญการขึ้นทะเบียนวัตถุอันตรายเลขที่' , 'no_cert' => 'คุณยังไม่มีใบที่สามารถต่ออายุได้' )); ?>
	<div class="form-group">
    	<label class="col-sm-6">พร้อมนี้ข้าพเจ้าได้แนบเอกสารเพื่อประกอบการพิจราณา ดังนี้</label>
 	</div>
 	<div class="form-group">
  	<label class="col-sm-8 col-sm-offset-1">
    	- รายการข้อมูลเพื่อการขึ้นทะเบียนวัตถุอันตราย ตามที่กรมวิชาการเกษตรประกาศกำหนด
  	</label>
  	</div>
  <div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    		- แผนการทดลองประสิทธิภาพและพิษตกค้าง(ถ้ามี)
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    	- ตัวอย่างเอกสารหรือภาพถ่ายแสดงลักษณะหีบห่อหรือภาชนะบรรจุ
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    	- ตัวอย่างฉลากและใบแทรก
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-6 col-sm-offset-1">
    	- รายงานผลการวิเคราะห์ตัวอย่างวัตถุอันตราย
  	</label>
	</div>
	<div class="form-group">
  	<label class="col-sm-2 col-sm-offset-1">- อื่นๆ (ถ้ามี)</label>
	</div>
	<div class="row">
    	<label class="col-sm-3 col-sm-offset-1 control-label">แนบไฟล์เอกสารที่เกี่ยวข้อง</label>
    	<?php include(resolveHeader('includes/upload_block.php')); ?>
    </div>
    <div class="row">
    <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" <?php printDisableWhenEmpty($certs); ?> class="btn btn-default">ส่งคำร้อง</button>
    </div>
  	</div>
    </div>
</form>
</div>
</div>

<?php
 	include(resolveHeader('includes/footer.php'));
?>