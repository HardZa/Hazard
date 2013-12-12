<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));

	$pic = Input::get('pic');
	$picurl = resolveURIHeader(Config::get('path/upload').$pic);
	$piclocation = resolveHeader(Config::get('path/upload').$pic);

	if(file_exists($piclocation))
	{
?>

	<div class="page-header">
	    <h1> </h1>
	</div>

	<div align="center">
		<img src="<?php echo $picurl; ?>" style="width: 80%;" class="img-thumbnail">
	</div>

<?php
	}else{
?>
	<div class="page-header">
    <h1>ไม่พบรูปที่ต้องการ</h1>
	</div>
<?php
	}

 	include(resolveHeader('includes/footer.php'));
?>
