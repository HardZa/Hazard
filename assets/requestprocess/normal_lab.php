<?php

include( resolveHeader('includes/upload_head.php') );

if( Input::post('isclick') != '' )
{
	foreach ($picarr as $value) {
		doc('request')->add_pic( PIC_TEST_ATTACH , $value );
	}
	doc('request')->save();
	doc('request')->redirect();
}
else
{

?>

<form class="form-horizontal" method="post" action="" role="form" >

	<div class="form-group">
	<div class="row">
	<input type="hidden" name="isclick" value="1">
	<label class="col-sm-3 col-sm-offset-1 control-label">ข้อมูลการทดลอง </label>
	<?php include( resolveHeader('includes/upload_block.php') ); ?>
</div>
<div class="row">
	<button type="submit" class="btn btn-primary col-sm-offset-3">ส่งผลการทดลอง</button>
</div>
	</div>
</form>

<?php
}
?>