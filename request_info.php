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
 		echo '<div class="row" style="margin:20px 10px 30px;">';
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
<section class="top-sec">
	<div class="container" style="width:1024px;">
		<div class="request-flow">
			<div class="dot1">		
			</div>
			<div class="arrow_box">
				<h4>
					<span class="glyphicon glyphicon-search"></span>
					(<?php echo $request->get_status();?>)
					<?php echo $cexp;?>
				</h4>
			</div>
			<div class="flow-msg-head">
				<h4>สถานะคำร้อง <?php echo $request->get_type(); ?> </h4>
			</div>
			<img src="<?php echo resolveURIHeader( $request->get_img_uri() ); ?>"></img>
		</div>
	</div>	
</section>
<section class="doc-sec">
	<div class="container">
		<div class="shadow-box data-box">
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
		</div>
	</div>
</section>	
<section>
	<div class="container">
		<?php
			printPic(PIC_DOC_ATTACH);
			printPic(PIC_TEST_ATTACH);
			printPic(PIC_BILL);
		?>
	</div>
</section>
<section>
	<div class="container">
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
</section>
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>