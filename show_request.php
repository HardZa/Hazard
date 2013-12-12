 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php
 $request = Request::load( Input::get('id') );
 if( $request == null || $user == null )
 	Redirect::to(403);
 $docData = array('progress' => $request->get('progress'),
 				  'main_file' => 'show_request.php',
 				  'request' => $request ,
 				  'type' => $request->get('requesttype') ,
 				  'user' => $user);
 ?>

<div class="page-header">
    <h1>Request</h1>
</div>
 <div class="row">
	<div class="form-group">
    	<label class="col-sm-3 control-label">สถานะคำร้้อง : </label>
    	<div class="col-sm-6">
	      	<input type="text" class="form-control" disabled value="<?php echo $request->get_status(); ?>" >
	    </div>
 	</div>
 </div>
 <br><br>
 <div class="row">
 <?php
 include( resolveHeader('route_show_request.php') );

 ?>
</div>

 <?php
 include(resolveHeader('includes/footer.php'));
 ?>