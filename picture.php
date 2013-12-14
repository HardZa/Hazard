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
	<div align="center" style="padding:60px"><img src="<?php echo resolveURIHeader('image/404_cutout.png'); ?>"></div>
<?php
	}

 	include(resolveHeader('includes/footer.php'));
?>
