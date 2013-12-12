<?php

$route_file = 'empty.php';
switch ($request->get('requesttype')) {
	case VO_GS_GVG_1:
		$route_file = 'vo_gs_gvg_1.php';
		break;
}

include(resolveHeader(Config::get('template/request_info').$route_file));

?>