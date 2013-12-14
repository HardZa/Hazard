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
			<label class="col-sm-3 control-label" style="margin-top: 12px;">ข้อมูลการทดลอง </label>
			<?php include( resolveHeader('includes/upload_block.php') ); ?>
			<div class="col-sm-4">
				<div class="lab-icon">
				</div>
			</div>
		</div>
		<div class="row">
			<button type="submit" class="btn btn-warning" style="margin-left:136px;">ส่งผลการทดลอง</button>
		</div>
	</div>
</form>

<?php
}
?>