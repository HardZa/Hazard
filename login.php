 <?php
 
 include('includes/header.php');
 require_once('core/init.php');
 
 echo Config::get("mysql/host");
 echo Config::get("mysql/username");
 echo Config::get("mysql/password");
 echo "Hello";
 
 include('includes/footer.php');
 ?>