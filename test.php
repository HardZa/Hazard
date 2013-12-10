   <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 $information = array("name"=>"aasda aa","lastname"=>"ruanp ech");
?>

<a class="btnPrint" href='<?php echo resolvePrinterURI("vk1", $information );?>'>print</a>

<br>

 	<?php echo resolvePrinterURI("vk1", $information); ?>


 <?php
 include(resolveHeader('includes/footer.php'));
 ?>