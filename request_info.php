 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php
 $request = Request::load( Input::get('id') );
 
 if( $request == null || $user == null )
 	Redirect::to(403);
 
 if(!Permission::requestInfoAllowed($request))
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
 	if( $cert->is_expired() )
 		return 'ใบอนุญาตหมดอายุ';
 	return 'ใบอนุญาตหมดอายุ วันที่ '.$cert->get_exp_day() . ' ' . get_month($cert->get_exp_month()) . ' พ.ศ.' . ( $cert->get_exp_year() + 543 );
 }
 
 function printPic($type)
 {
 	global $request;
 	$pics = $request->get_pics_by_type($type);
 	if( count($pics) != 0 )
 	{
 		echo '<div class="row" style="margin:20px 10px 30px;">';
 		echo '<div class="row"><label class="col-sm-3 control-label label label-default">'.Picture::type_to_string($type).'</label></div>';
 		echo '<div class="row">';
 		foreach ($pics as $pic) {
 			echo '<div class="col-sm-3">';
 				echo '<a target="_blank" href="' . resolveURIHeader('pic/'.$pic->file) .'">';
	 			echo '<img src="';
	 			echo resolveURIHeader( $pic->get_uri() );
	 			echo '" width="200" height="200" class="img-thumbnail"></img>';
	 			echo '</a>';
 			echo '</div>';
 		}
 		echo '</div>';
 		echo '</div>';
 	}
 }

 $cexp = get_exp_cert();

 ?>
<section class="top-sec">
	<div class="container" style="width:1000px;">
		<div class="request-flow">
			<div class="dot1">		
			</div>
			<!--<div class="arrow_box">
				<h4>
					<span class="glyphicon glyphicon-search"></span>
					(<?php echo $request->get_status();?>)
				</h4>
			</div>-->
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
<section class="bottom-sec">
	<div class="container">
		<?php
			printPic(PIC_DOC_ATTACH);
			printPic(PIC_TEST_ATTACH);
			printPic(PIC_BILL);
		?>
	</div>

	<?php
		if( Input::post('commend_msg') != '' )
		{
			$commend_msg = str_replace( "\n", "<br>" , Input::post('commend_msg') );
			Commend::create($user->get('userid'),$request->get('requestid'),$commend_msg);
		}
	?>

	<div class="container">
		<div class="well">
			<?php
				$commends = Commend::get_commend_by_requestid($request->get('requestid'));
				foreach ($commends as $commend) {
					$ucommend = User::load($commend->userid);
					?>

					<div class="row">
						<div class="col-sm-3"><?php echo $ucommend->get('userrealname'); ?> : </div>
						<div class="col-sm-3"><?php echo $commend->message; ?></div>
					</div>

					<?php
				}
			?>

			<?php if( $user->is_group('client') == false ) { ?>

			<form class="form-horizontal" role="form" method="post" action="">
				<br>
				<div class="row">
					<div class="col-sm-3">ความคิดเห็น</div>
					<div class="col-sm-3">
						<textarea class="form-control" rows="5" id="commend_msg" name="commend_msg" placeholder="ความคิดเห็น" ></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-3"><button type="submit" class="btn btn-success">แสดงความคิดเห็น</button></div>
				</div>
			    	
			    	

			</form>

			<?php } ?>

		</div>
	</div>

	<div class="container">
		<div class="well">
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
			<div class="row">
				<div class="col-md-offset-1 text-danger"><h3 style="margin-left:20px;">
	<?php echo $cexp;?></h3>
				</div>
			</div>
		</div>
	</div>
</section>
 <?php
 include(resolveHeader('includes/footer.php'));
 ?>