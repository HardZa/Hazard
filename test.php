  <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));

echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// $user = User::get_user();
// var_dump($user->is_group('client'));

 
 include(resolveHeader('includes/footer.php'));
 ?>