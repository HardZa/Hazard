<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));

	$docData = array(
		'day'=>'12',
		'month'=>'มกราคม',
		'year'=>'2556',
		'name'=>'นายสุเทพ เทือกสุบรรณ',
		'age'=>'17',
		'nationality'=>'ไทย',
		'taxno'=>'5410500199',
		'addrhouse'=>'52',
		'addrvillage'=>'1',
		'addrdrive'=>'2',
		'addrroad'=>'เทพกระษัตรี',
		'addrsubdistrict'=>'เทพกระษัตรี',
		'addrdistrict'=>'ถลาง',
		'addrprovince'=>'ภูเก็ต',
		'addrpostalcode'=>'83110',
		'addrphone'=>'076311650',
		'addrfax'=>'076313535',
		'producthouse'=>'52',
		'productvillage'=>'1',
		'productdrive'=>'2',
		'productroad'=>'เทพกระษัตรี',
		'productsubdistrict'=>'เทพกระษัตรี',
		'productdistrict'=>'ถลาง',
		'productprovince'=>'ภูเก็ต',
		'productpostalcode'=>'83110',
		'productphone'=>'076311650',
		'productfax'=>'076313535',
		'storehouse'=>'52',
		'storevillage'=>'1',
		'storedrive'=>'2',
		'storeroad'=>'เทพกระษัตรี',
		'storesubdistrict'=>'เทพกระษัตรี',
		'storedistrict'=>'ถลาง',
		'storeprovince'=>'ภูเก็ต',
		'storepostalcode'=>'83110',
		'storephone'=>'076311650',
		'storefax'=>'076313535',
		'storespecialist'=>'ดร. ภุชงค์ ชงไมโล',
		'hazardname'=>'น้ำจากเทือกเขา',
		'hazardformulation'=>'H20',
		'businessname'=>'น้ำเปล่า',
		'quantity'=>'5 ถัง กบัอีก 3 ขวด',
		'note'=>'มันลืนคอเหมือนดื่มอากาศ',
		'producerspecialist'=>'ดร. ภุชงค์ ชงไมโล',
		'producerCountry'=>'ดูไบ',
		'producer'=>'ทักษิณ ชินวัตร'
	);

	function doc($field)
	{
		global $docData ;
		return getifset($docData,$field);
	}
?>

<div class="page-header">
    <h1>ทดสอบหน้าแสดงคำร้อง</h1>
</div>

<div style="background-color:#CEF6EC;">
<?php
	if(Input::exists('get'))
		include(resolveHeader(Config::get('template/request').Input::get('page').'.php'));
?>
</div>

<div>
	<a href="<?php echo resolveURIHeader("testrequest.php?page=vk1");?>">วอ.1</a>
</div>
<div>
	<a href="<?php echo resolveURIHeader("testrequest.php?page=vk3");?>">วอ.3</a>
</div>
<div>
	<a href="<?php echo resolveURIHeader("testrequest.php?page=vk5");?>">วอ.5</a>
</div>
<div>
	<a href="<?php echo resolveURIHeader("testrequest.php?page=vk7");?>">วอ.7</a>
</div>
<div>
	<a href="<?php echo resolveURIHeader("testrequest.php?page=vk_ks_kvk1");?>">วอ./กษ./กวก.1</a>
</div>
<div>
	<a href="<?php echo resolveURIHeader("testrequest.php?page=vk_ks_kvk3");?>">วอ./กษ./กวก.3</a>
</div>
<div>
	<a href="<?php echo resolveURIHeader("testrequest.php?page=vk_ks_kvk13");?>">วอ./กษ./กวก.13</a>
</div>

<?php
 	include(resolveHeader('includes/footer.php'));
?>