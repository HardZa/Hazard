   <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 $information = array("certificate_no"=>"1542","department"=>"กรมตำรวจแห่งชาติ","ministry"=>"กระทรวงคมนาคม","day"=>"31","month"=>"พฤษจิกายน","year"=>"2555");

 ?>


<a class="btnPrint" href='<?php echo resolvePrinterURI("vk8", $information );?>'>print</a>

<br>
<?php echo resolvePrinterURI("vk8", $information); ?>


 <?php
 include(resolveHeader('includes/footer.php'));
 ?>3