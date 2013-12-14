<?php
if(Input::get('approve') == '1')
{
	doc('request')->get_certificate_ref()->next_expire();
	doc('request')->progress( PRG_COMPLETE );
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
		<input type="button" value="ต่ออายุ" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=1");
		?>'">
	</div>
	<div class="col-md-2">
		<input type="button" value="ไม่ผ่าน" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=0");
		?>'">
	</div>
</div>

<?php
}
?>