<?php

$route_file = 'empty.php';
$_chktype = doc('type');
if($_chktype == VO_GS_GVG_1)
{
	$route_file = 'vo_gs_gvg_1.php';
}

include(resolveHeader(Config::get('template/request_info').$route_file));

?>