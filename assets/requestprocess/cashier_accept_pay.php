
<?php

$ctype = Request::get_print_type(doc('type'));

if(Input::get('approve') == '1')
{
	if( doc('type') != VO_GS_GVG_3 )
		doc('request')->progress( PRG_PRINTING );
	else
		doc('request')->progress( PRG_NEXT_EXPIRE );
	if( $ctype != -1 )
	{
		$cert = Certificate::create(doc('request')->get('userid'), $ctype ,doc('request')->get('jsondata'));
		$cert->set_data('create_date',date('Y-m-d'));
		doc('request')->set('certid',$cert->certid );
	}
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
	<br>
 		<div class="row">
	<div class="col-md-2">
		<input type="button" value="ผ่าน" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=1");
		?>'">
	</div>
	<div class="col-md-2">
		<input type="button" value="ไม่ผ่าน" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=0");
		?>'">
	</div>
</div>
</div>

<?php
}
?>