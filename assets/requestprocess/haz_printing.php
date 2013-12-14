<?php

$ctype = Request::get_print_type(doc('type'));
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