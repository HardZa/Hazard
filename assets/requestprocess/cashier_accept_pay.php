
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
	<div class="col-md-6">
		<h3 style="margin-left:15px;">จากการพิจารณาแล้วข้าพเจ้าเห็นสมควรว่า</h3>
 	</div>
	<div class="col-md-6" style="margin:12px 0 0 0px;">
		<input type="button" value="ผ่าน" class="btn btn-success" style="margin:0 10px 0 120px" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=1");
		?>'">
		<input type="button" value="ไม่ผ่าน" class="btn btn-danger" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=0");
		?>'">
	</div>
</div>
</div>

<?php
}
?>