<?php

if(Input::get('approve') == '1')
{
	doc('request')->progress( doc('next_progress') );
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
	<div class="col-md-6">
		<h3 style="margin-left:15px;">จากการพิจารณาแล้วข้าเจ้าเห็นสมควรว่า</h3>
	</div>
	<div class="col-md-6" style="margin-top:12px;">
		<input type="button" value="<?php echo doc('approve_button'); ?>" class="btn btn-success" style="margin-right:10px;" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=1");
		?>'">
		<input type="button" value="<?php echo doc('reject_button'); ?>" class="btn btn-danger" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=0");
		?>'">
	</div>
</div>

<?php
}
?>