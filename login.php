 <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

 DB::get_db()->update( 'users' , array('name'=>'art') , "name='mini'" );
 print_r( DB::get_db()->select( 'users' ) );

 if(Session::exists("food"))
 {
	echo "<br>".Session::get("food");
 }
 
 include(resolveHeader('includes/footer.php'));
 ?>