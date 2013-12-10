   <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 $information = array("name"=>"aasda aa","lastname"=>"ruanp ech");
?>

<a class="btnPrint" href='<?php echo resolvePrinterURI("vk1", $information );?>'>print</a>

<br>
 	<?php echo resolvePrinterURI("vk1", $information); ?>


 <?php
 $da = '12-31-2556';

var_dump(checkdate("AA", substr($da,3,2), substr($da,6,4)-543));

 include(resolveHeader('includes/footer.php'));
 ?>