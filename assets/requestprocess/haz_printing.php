<?php

if( doc('request')->get('progress') != PRG_COMPLETE )
{

	if(Input::get('approve') != '')
	{
		doc('request')->progress( PRG_COMPLETE );
		doc('request')->save();
		doc('request')->redirect();
	}

}
?>

<div class="row">
	<div class="col-md-2">
		<input type="button" value="พิมพ์ใบรับรอง" class="btn btn-success" onclick="parent.location='<?php
		$file = '';
		switch ( doc('type') ) {
			case VO_GS_GVG_1:
				$file = 'vo_gs_gvg_1.php';
				break;
		}
		//if( $file != '' )
		//	include( resolveHeader( Config::get('template/bindprint'). ) );
		?>'">
	</div>
	<?php if( doc('request')->get('progress') != PRG_COMPLETE ) { ?>
	<div class="col-md-2">
		<input type="button" value="เสร็จ" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=1");
		?>'">
	</div>
	<?php } ?>
</div>

<?php

?>