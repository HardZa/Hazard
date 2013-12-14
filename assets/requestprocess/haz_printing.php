<?php

$ctype = -1;
switch (doc('type')) {
	case VO_GS_GVG_1:
		$ctype = VO_GS_GVG_2;
		break;
	case VO_GS_GVG_12:
		if( doc('request')->get_data('purposefirst') == 'import' )
			$ctype = VO_GS_GVG_14;
		else
			$ctype = VO_GS_GVG_13;
		break;
	case VO_1:
		$ctype = VO_2;
		break;
	case VO_3:
		$ctype = VO_4;
		break;
	case VO_5:
		$ctype = VO_6;
		break;
	case VO_7:
		$ctype = VO_8;
		break;
}
if( doc('request')->get('progress') != PRG_COMPLETE )
{
	if(Input::get('approve') != '')
	{
		$cert = Certificate::create(doc('request')->get('userid'), $ctype ,doc('request')->get('jsondata'));
		doc('request')->set('certid',$cert->certid );
		doc('request')->progress( PRG_COMPLETE );
		doc('request')->save();
		doc('request')->redirect();
	}

}
?>

<div class="row">
	<div class="col-md-2">
		<a class="btnPrint" href='<?php
		$file = 'empty.php';
		switch ( $ctype ) {
			case VO_GS_GVG_2:
				$file = 'vo_gs_gvg_2';
				break;
			case VO_GS_GVG_13:
				$file = 'vo_gs_gvg_13';
				break;
			case VO_GS_GVG_14:
				$file = 'vo_gs_gvg_14';
				break;
			case VO_2:
				$file = 'vo2';
				break;
			case VO_4:
				$file = 'vo4';
				break;
			case VO_6:
				$file = 'vo6';
				break;
			case VO_8:
				$file = 'vo8';
				break;
		}
		$print_info = array();
		include( resolveHeader( Config::get('template/bindprint').$file.'.php' ) );
		echo resolvePrinterURI($file,$print_info);
		?>
		'>
		พิมพ์ใบรับรอง</a>
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