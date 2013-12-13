<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
  include(resolveHeader('includes/upload_head.php')); 

  $user = User::get_user();

    if(Input::exists('post'))
    {
        $picarr=json_decode($_POST['picarr']);
        $i;
        for($i=0;$i<count($picarr);$i++)
        {
          echo "<script> pichead[".$i."]='".$picarr[$i]."'; </script>";
        }

        var_dump($picarr);

        $validate = new Validate();
        $validate->check($_POST,array(
          'hazardname'=> array(
            'required'=>true
          )
        ));
        if($validate->passed())
        {
            Request::create_request($user->get('userid'),1,$_POST);
            echo "PASS";
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
    		   	<input type="radio" name="hazardtype" value="2" checked>ชนิดที่ 2
    			</label>
        </div>
        <div class="col-sm-2">
    		  <label class="radio-inline">
    		    <input type="radio" name="hazardtype" value="3">ชนิดที่ 3
    		  </label>
      	</div>
  	</div> 
  	<div class="form-group">
      	<label class="col-sm-4 control-label">โดยมีวัตถุประสงค์เพื่อ :</label>
      	<div class="col-sm-2">
    			<label class="radio-inline">
    		    	<input type="radio" name="hazardfor" value="นำเข้า" checked>นำเข้า
    			</label>
        </div>
        <div class="col-sm-2">
  		  	<label class="radio-inline">
  		    	<input type="radio" name="hazardfor" value="ส่งออก">ส่งออก
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
        		<input type="text" class="form-control" id="hazardname" name="hazardname" placeholder="ชื่อวัตถุอันตราย" >
      	</div>
    </div>
  	<div class="form-group" >
    	<label for="hazardformulation" class="col-sm-4" >๒. สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="2" id="hazardformulation" name="hazardformulation" placeholder="สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ" ></textarea>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="businessname" class="col-sm-4" >๓. ชื่อทางการค้าหรือหมายเลขรหัส</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="businessname" name="businessname" placeholder="ชื่อทางการค้าหรือหมายเลขรหัส" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="producer" class="col-sm-4" >๔. ชื่อผู้ผลิตและแหล่งผลิต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="producer" name="producer" placeholder="ชื่อผู้ผลิตและแหล่งผลิต" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="importer" class="col-sm-4" >๕. ชื่อผู้นำเข้า</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="importer" name="importer" placeholder="ชื่อผู้นำเข้า" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="saleman" class="col-sm-4" >๖. ชื่อผู้จำหน่าย/ผู้จัดจำหน่าย</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="saleman" name="saleman" placeholder="ชื่อผู้จำหน่าย/ผู้จัดจำหน่าย" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="container" class="col-sm-4" >๗. ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ พร้อมทั้งขนาดบรรจุ</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="5" id="container" name="container" placeholder="ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ พร้อมทั้งขนาดบรรจุ" ></textarea>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="purpose" class="col-sm-4" >๘. ประเภทของการใช้</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="5" id="purpose" name="purpose" placeholder="ประเภทของการใช้" ></textarea>
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="button-regis pull-right">
      		<button type="submit" class="btn btn-success">ลงทะเบียน</button>
    	</div>
  	</div>
     <input type="hidden" id="picarr" name="picarr">
  </form>


<?php
include(resolveHeader('includes/upload_form.php'));
?>
</div> 

</div>
<?php
 	include(resolveHeader('includes/footer.php'));
?>