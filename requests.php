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

 ?>

  <?php
 include(resolveHeader('includes/footer.php'));
 ?>