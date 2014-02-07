<?php

include( resolveHeader('includes/upload_head.php') );

if( Input::post('isclick') != '' )
{
	foreach ($picarr as $value) {
		doc('request')->add_pic( PIC_BILL , $value );
	}
	DB::get_db()->insert('receipt_running_no',array('id'),array(null));
	$lastid = DB::get_db()->getLastInsertID();
	doc('request')->progress( PRG_ACCEPT_PAY );
	doc('request')->set_data( 'receipt_bookno' , padding( floor( $lastid/100 ) + 1 , 5 ) );
	doc('request')->set_data( 'receipt_no' , padding( $lastid%100 + 1 , 3 ) );
	doc('request')->set_data( 'receipt_referenceno' , generateRandomNumber(2).'-'.generateRandomString(5).'-'.generateRandomNumber(2).'-'.generateRandomNumber(5) );	
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
			<label class="col-sm-4 control-label" style="margin:11px 0 0 20px;">กรุณาอัพโหลดใบเสร็จสำหรับการชำระเงิน</label>
			<?php include( resolveHeader('includes/upload_block.php') ); ?>
			<div class="col-sm-4">
				<div class="banking-icon">

				</div>
			</div>
		</div>
		<div class="row">
			<button type="submit" class="btn btn-warning" style="margin-left:75px;">จ่ายเงิน<span class="glyphicon glyphicon-usd"></span></button>
		</div>
	</div>
</form>
<?php
}
?>