<?php
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 echo "<br><br><br>";
 $test = array('tmp' => 'อิอิ');
 echo json_encode($test);
 var_dump( json_decode( json_encode($test) ) );
 include(resolveHeader('includes/footer.php'));

?>