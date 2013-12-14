<?php
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 echo "<br><br><br>";
 $test = '12-1-1';
 $test = date('Y-m-d');
 var_dump(date_create($test)->diff( date_create($test) ));
 echo date_format(date_create($test),'d');//json_encode($test);

 include(resolveHeader('includes/footer.php'));

?>