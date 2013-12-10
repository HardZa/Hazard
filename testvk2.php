   <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 $information = array("name"=>"name",
 	"lastname"=>"lastname",
 	"objectName"=>"objectName",
 	"type"=>"A",
 	"marketName"=>"matketName",
 	"volume"=>"volume",
 	"note"=>"note",
 	"namePro"=>"namePro",
 	"condition"=>"conditon",
 	"dayPermit"=>"dayPermit",
 	"monthPermit"=>"monthPermit",
 	"yearPermit"=>"yearPermit",
 	"signature"=>"signature",

 	"numPermit"=>"numPermit",
 	"placeObject"=>"placeObject",

 	"nameresp"=>"nameresp"
 	"signature2"=>"signature2"
 	);
?>

<a class="btnPrint" href='<?php echo resolvePrinterURI("vk2", $information );?>'>print</a>

<br>

 	<?php echo resolvePrinterURI("vk2", $information); ?>


 <?php
 include(resolveHeader('includes/footer.php'));
 ?>