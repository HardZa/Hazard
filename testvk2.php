   <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 $information = array(
 	"certificate_no"=>"certificate_no",
 	"department"=>"department",
 	"ministry"=>"ministry",
 	"day"=>"day",
 	"month"=>"month",
 	"year"=>"year",

 	"cerNum"=>"cerNum",
 	"name"=>"name",
 	"lastname"=>"lastname",
 	"nation"=>"nation",
 	"idenNum"=>"idenNum",

 	"houseNum"=>"houseNum",
 	"group"=>"group",
 	"soi"=>"soi",
 	"road"=>"road",
 	"district"=>"district",
 	"area"=>"area",
 	"city"=>"city",
 	"postcode"=>"postcode",
 	"phoneNum"=>"phoneNum",
 	"fax"=>"fax",

 	"namePlace"=>"namePlace",
 	"houseNumPlace"=>"houseNumPlace",
 	"groupPlace"=>"groupPlace",
 	"soiPlace"=>"soiPlace",
 	"roadPlace"=>"roadPlace",
 	"districtPlace"=>"districtPlace",
 	"areaPlace"=>"areaPlace",
 	"cityPlace"=>"cityPlace",
 	"postcodePlace"=>"postcodePlace",
 	"phoneNumPlace"=>"phoneNumPlace",
 	"faxPlace"=>"faxPlace",

 	"objectName"=>"objectName",
 	"type"=>"type",
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

 	"nameresp"=>"nameresp",
 	"signature2"=>"signature2"
 	);
?>

<a class="btnPrint" href='<?php echo resolvePrinterURI("vk2", $information );?>'>print</a>

<br>

 	<?php echo resolvePrinterURI("vk2", $information); ?>


 <?php
 include(resolveHeader('includes/footer.php'));
 ?>