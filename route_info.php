<?php

$route_file = 'empty.php';
$_chktype = doc('type');
if($_chktype == VO_GS_GVG_1)
{
	$route_file = 'vo_gs_gvg_1.php';
}
else if($_chktype == VO_GS_GVG_3 )
{
	$route_file = 'vo_gs_gvg_3.php';
}
else if($_chktype == VO_1 )
{
	$route_file = 'vo1.php';
}
else if($_chktype == VO_3 )
{
	$route_file = 'vo3.php';
}
else if($_chktype == VO_5 )
{
	$route_file = 'vo5.php';
}
else if($_chktype == VO_7 )
{
	$route_file = 'vo7.php';
}
else if($_chktype == VO_GS_GVG_12 )
{
	$route_file = 'vo_gs_gvg_12.php';
}
include(resolveHeader(Config::get('template/bindinfo').$route_file));
include(resolveHeader(Config::get('template/request_info').$route_file));

?>