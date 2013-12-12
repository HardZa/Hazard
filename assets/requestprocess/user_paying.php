<?php
if( Input::post('code') != '' )
{
	doc('request')->set_data('code_pay',Input::post('code'));
	doc('request')->progress( PRG_ACCEPT_PAY );
	doc('request')->save();
	echo "จ่ายตังแย้ว";
}
else
{

?>

<form class="form-horizontal" method="post" action="" role="form" >

	<div class="form-group">
    	<label class="col-sm-3 control-label">โค้ด true money 12 หลัก : </label>
    	<div class="col-sm-6">
	      	<input type="text" class="form-control" name="code" placeholder="code" >
	    </div>
 	</div>
	<button type="submit" class="btn btn-primary col-sm-offset-3">จ่ายเงิน</button>
</form>

<?php
}
?>