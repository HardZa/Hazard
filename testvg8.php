   <?php
 
 require_once('core/init.php');
 include(resolveHeader('includes/header.php'));
 $information = array("certificate_no"=>"1542","department"=>"กรมตำรวจแห่งชาติ","ministry"=>"กระทรวงคมนาคม",
 	"day"=>"31","month"=>"พฤษจิกายน","year"=>"2555","name"=>"นาย ชานน จิตพรหม","nationality"=>"ไทย",
 	"tax_no"=>"1886576468","house_no"=>"54/78","mhoo"=>"1","soi"=>"-","road"=>"-","district"=>"หนองอ้อ",
 	"district1"=>"บ้านโป่ง","province"=>"ราชบุรี","zip_code"=>"70110","tel"=>"0895487125","fax"=>"5573145",
 	"hazard_store"=>"โรงงานนรก","hazard_store_no"=>"58/78","hazard_mhoo"=>"5","hazard_soi"=>"9","hazard_road"=>"งามวงศ์วาน",
 	"hazard_district"=>"เมือง","hazard_district1"=>"เมือง","hazard_province"=>"กรุงเทพ","hazard_zip_code"=>"11000",
 	"hazard_tel"=>"0843651485","hazard_fax"=>"56215362","professor"=>"anun","quantity"=>"1750ตัน","quantity_map"=>"1500",
 	"hazard_purpose"=>"จำหน่ายจ่ายแจก","hazard_name"=>"สารพิษจากเชื้อรา","hazard_trade_name"=>"alphatoxin","hazard_no"=>"24557","hazard_condition"=>"ห้ามใช้ทางการเกษตร",
 	"certificate_day"=>"21","certificate_month"=>"มกราคม","certificate_year"=>"2560","signature"=>"สุเทพ เทือกสุบรรณ",
 	"signature1"=>"เทพ เทือกทุย","certificate_no1"=>"3456564656","hazard_name1"=>"สารพิษจากเชื้อรา","hazard_trade_name1"
 	=>"alphatoxin","hazard_no1"=>"24557","signature_again"=>"สุเทพ เทือกสุบรรณ","signature_again1"=>"เทพ เทือกทุย");

 ?>


<a class="btnPrint" href='<?php echo resolvePrinterURI("vk8", $information );?>'>print</a>

<br>
<?php echo resolvePrinterURI("vk8", $information); ?>


 <?php
 include(resolveHeader('includes/footer.php'));
 ?>3