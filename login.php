 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

 DB::get_db()->update( 'users' , array('name'=>'art') , "name='mini'" );
 print_r( DB::get_db()->select( 'users' ) );

 
 include(resolveHeader('includes/footer.php'));
 ?>