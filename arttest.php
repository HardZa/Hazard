<?php
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 echo "<br><br><br>";
 foreach (Picture::get_pics_by_requestid_and_type(1,3) as $key => $value) {
 	$value->delete();
 }
 //var_dump();
//Certificate::create(123,null,3,null);
//echo mysql_error();
 include(resolveHeader('includes/footer.php'));

?>