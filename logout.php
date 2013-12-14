 <?php
 
 require_once('core/init.php');
 User::clear_user();
 include(resolveHeader('includes/header.php'));
 
 ?>
 
 <?php
 	Redirect::to('/');
 ?>
 
  <?php
 include(resolveHeader('includes/footer.php'));
 ?>