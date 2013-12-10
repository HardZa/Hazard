 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 ?>

 <?php
 if(Input::get('not_process') == '')
 	include( resolveHeader('request/route.php') );
 else
 	include( resolveHeader('request/show.php') );
 ?>

  <?php
 include(resolveHeader('includes/footer.php'));
 ?>