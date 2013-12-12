<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));
?>
<div class="data-box">
  <div class="head-box page-header">
    <h1>คำขอขึ้นทะเบียนวัตถุอันตราย</h1>  
  </div>
  <form class="form-horizontal" role="form" method="get" action="">
  	<div class="form-group">
      	<label class="col-sm-4 control-label">ขอขึ้นทะเบียนวัตถุอันตราย :</label>
      	<div class="col-sm-2">
    			<label class="radio-inline">
    		   	<input type="radio" name="hazardtype" id="hazardtype" value="ชนิดที่ 2" checked>ชนิดที่ 2
    			</label>
        </div>
        <div class="col-sm-2">
    		  <label class="radio-inline">
    		    <input type="radio" name="hazardtype" id="hazardtype" value="ชนิดที่ 3">ชนิดที่ 3
    		  </label>
      	</div>
  	</div> 
  	<div class="form-group">
      	<label class="col-sm-4 control-label">โดยมีวัตถุประสงค์เพื่อ :</label>
      	<div class="col-sm-2">
    			<label class="radio-inline">
    		    	<input type="radio" name="hazardfor" id="hazardfor" value="นำเข้า" checked>นำเข้า
    			</label>
        </div>
        <div class="col-sm-2">
  		  	<label class="radio-inline">
  		    	<input type="radio" name="hazardfor" id="hazardfor" value="ส่งออก">ส่งออก
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
    	<label for="solchem" class="col-sm-4" >๒. สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="2" id="solchem" name="solchem" placeholder="สูตรอัตราส่วนผสมของสารสำคัญและลักษณะ" ></textarea>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="businessname" class="col-sm-4" >๓. ชื่อทางการค้าหรือหมายเลขรหัส</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="businessname" name="businessname" placeholder="ชื่อทางการค้าหรือหมายเลขรหัส" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="producername" class="col-sm-4" >๔. ชื่อผู้ผลิตและแหล่งผลิต</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="producername" name="producername" placeholder="ชื่อผู้ผลิตและแหล่งผลิต" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="importername" class="col-sm-4" >๕. ชื่อผู้นำเข้า</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="importername" name="importername" placeholder="ชื่อผู้นำเข้า" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="agentname" class="col-sm-4" >๖. ชื่อผู้จำหน่าย/ผู้จัดจำหน่าย</label>
    	<div class="col-sm-8">
      		<input type="text" class="form-control" id="agentname" name="agentname" placeholder="ชื่อผู้จำหน่าย/ผู้จัดจำหน่าย" >
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="detailpackage" class="col-sm-4" >๗. ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ พร้อมทั้งขนาดบรรจุ</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="5" id="detailpackage" name="detailpackage" placeholder="ชนิดและลักษณะหีบห่อหรือภาชนะบรรจุ พร้อมทั้งขนาดบรรจุ" ></textarea>
    	</div>
  	</div>
  	<div class="form-group" >
    	<label for="typeforuse" class="col-sm-4" >๘. ประเภทของการใช้</label>
    	<div class="col-sm-8">
      		<textarea class="form-control" rows="5" id="typeforuse" name="typeforuse" placeholder="ประเภทของการใช้" ></textarea>
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="button-regis pull-right">
      		<button type="submit" class="btn btn-success">ลงทะเบียน</button>
    	</div>
  	</div>
  </form>
</div> 

<?php
 	include(resolveHeader('includes/footer.php'));
?>