<?php

if(Input::get('approve') == '1')
{
	doc('request')->set_data('officername',$user->get('userrealname'));
	doc('request')->progress( PRG_WAIT_PAY );
	doc('request')->save();
	doc('request')->redirect();
}
else if(Input::get('approve') == '0')
{
	doc('request')->reject();
	doc('request')->save();
	doc('request')->redirect();
}
else
{
?>

<div class="row">
	<div class="col-md-2">
		<input type="button" value="<?php echo doc('approve_button'); ?>" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=1");
		?>'">
	</div>
	<div class="col-md-2">
		<input type="button" value="<?php echo doc('reject_button'); ?>" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=0");
		?>'">
	</div>
</div>

<?php
}
?>