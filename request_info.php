 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php
 $request = Request::load( Input::get('id') );
 
 if(!Permission::requestInfoAllowed($request))
   Redirect::to(403);
 
 if( $request == null || $user == null )
 	Redirect::to(403);
 //$docData = array();

 function get_exp_cert()
 {
 	global $request;
 	$cert = $request->get_certificate();
 	if( $cert == null )
 	{
 		return '';
 	}
 	return $cert->get_exp_day() . '-' . $cert->get_exp_month() . '-' . $cert->get_exp_year();
 }
 
 function printPic($type)
 {
 	global $request;
 	$pics = $request->get_pics_by_type($type);
 	if( count($pics) != 0 )
 	{
 		echo '<div class="row">';
 		echo '<div class="row"><label class="col-sm-3 control-label">'.Picture::type_to_string($type).'</label></div>';
 		echo '<div class="row">';
 		foreach ($pics as $pic) {
 			echo '<div class="col-sm-3">';
 			echo '<img src="';
 			echo resolveURIHeader( $pic->get_uri() );
 			echo '" width="200" height="200"></img>';
 			echo '</div>';
 		}
 		echo '</div>';
 		echo '</div>';
 	}
 }

 $cexp = get_exp_cert();

 ?>
<div class="container">
<div class="page-header">
    <h1>
    		<?php echo $request->get_type(); ?>
    		(<?php echo $request->get_status(); ?>)
    		<?php echo $cexp; ?>
    </h1>
</div>
 <div class="row">
    	<div class="col-sm-6">
    		<img src="<?php echo resolveURIHeader( $request->get_img_uri() ); ?>"></img>
	    </div>
 </div>

 <div class="row">
 <?php
 $docData = array('progress' => $request->get('progress'),
 				  'main_file' => 'request_info.php',
 				  'request' => $request ,
 				  'type' => $request->get('requesttype') ,
 				  'user' => $user);
 include( resolveHeader('route_info.php') );
 ?>
 </div>

 <?php
 	printPic(PIC_DOC_ATTACH);
 	printPic(PIC_TEST_ATTACH);
 	printPic(PIC_BILL);
 ?>

 <div class="row">
 <?php
 $docData = array('progress' => $request->get('progress'),
 				  'main_file' => 'request_info.php',
 				  'request' => $request ,
 				  'type' => $request->get('requesttype') ,
 				  'user' => $user);
 include( resolveHeader('route_show_request.php') );
 ?>
 </div>
</div>


 <?php
 include(resolveHeader('includes/footer.php'));
 ?>