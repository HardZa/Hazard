<?php

include( resolveHeader('includes/upload_head.php') );

if( Input::post('isclick') != '' )
{
	foreach ($picarr as $value) {
		doc('request')->add_pic( PIC_BILL , $value );
	}
	doc('request')->progress( PRG_ACCEPT_PAY );
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
			<label class="col-sm-4 control-label" style="margin-top:11px;">กรุณาอัพโหลดใบเสร็จสำหรับการชำระเงิน</label>
			<?php include( resolveHeader('includes/upload_block.php') ); ?>
			<div class="col-sm-4">
				<div class="banking-icon">
					
				</div>
			</div>
		</div>
		<div class="row">
			<button type="submit" class="btn btn-warning"style="margin-left:75px;">จ่ายเงิน<span class="glyphicon glyphicon-usd"></span></button>
		</div>
	</div>
</form>
<?php
}
?>