 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php

 $user = User::get_user();
 if( $user == null )
 {
 	Redirect::to( 403 );
 }

 if( Input::exists('get') && isset( $_GET['type'] ) )
 {

 	$request = Request::create( $user->get('userid') , Input::get('type') );
 	Redirect::to( 'requests/'.$request->getId() );
 }
 else
 { ?>

 <input class="btn btn-lg btn-primary btn-block" type="button" value="ลงทะเบียน" onClick="location.href='<?php echo resolveURIHeader('requests/new/1'); ?>'">  

<?php } ?>

 <?php
 include(resolveHeader('includes/footer.php'));
 ?>