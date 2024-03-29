<?php

$route_file = 'empty.php';
$route_progress = doc('progress');
set_doc('approve_button','ผ่าน');
set_doc('reject_button','ไม่ผ่าน');

if($user->is_group('client'))
{
	switch ($route_progress) {
		case PRG_WAIT_PAY:
			$route_file = 'user_paying.php';
			break;
	}
}
else if($user->is_group('hazcontrol'))
{
	switch ($route_progress) {
		/*case PRG_CHK_DOC:
			if( doc('type') == VO_GS_GVG_1 )
				set_doc('next_progress',PRG_SURVEY);
			else
				set_doc('next_progress',PRG_CONSIDER);
			$route_file = 'normal_approve.php';
			break;*/
		case PRG_SURVEY:
			set_doc('next_progress',PRG_CONSIDER);
			set_doc('approve_button','ผลการทดสอบผ่าน');
			set_doc('reject_button','ผลการทดสอบไม่ผ่าน');
			$route_file = 'normal_approve.php';
			break;
		case PRG_CONSIDER:
			//set_doc('next_progress',PRG_WAIT_PAY);
			$route_file = 'haz_consider.php';
			break;
		case PRG_PRINTING:
		case PRG_COMPLETE:
				if(doc('type') != VO_GS_GVG_3)
					$route_file = 'haz_printing.php';
			break;
		case PRG_REJECT:
			$route_file = 'empty.php';
			break;
		case PRG_NEXT_EXPIRE:
			$route_file = 'haz_next_expire.php';
			break;
	}
}
else if($user->is_group('cashier'))
{
	switch ($route_progress) {
		case PRG_ACCEPT_PAY:
			$route_file = 'cashier_accept_pay.php';
			break;
	}
}
else if($user->is_group('plantprotection'))
{
	switch ($route_progress) {
		case PRG_SURVEY:
			$route_file = 'normal_lab.php';
			break;
	}
}
else if($user->is_group('agriproduction'))
{
	switch ($route_progress) {
		case PRG_SURVEY:
			$route_file = 'normal_lab.php';
			break;
	}
}
else if($user->is_group('documentchecker'))
{
	switch ($route_progress) {
		case PRG_CHK_DOC:
			set_doc('goto_reqlist','yes');
			if( doc('type') == VO_GS_GVG_1 || doc('type') == VO_1 || doc('type') == VO_3 || doc('type') == VO_5 || doc('type') == VO_7 )
				set_doc('next_progress',PRG_SURVEY);
			else
				set_doc('next_progress',PRG_CONSIDER);
			$route_file = 'normal_approve.php';
			break;
	}
}
else if($user->is_group('explorer'))
{
	switch ($route_progress) {
		case PRG_SURVEY:
			$route_file = 'normal_survey.php';
			break;
	}
}

include(resolveHeader(Config::get('template/process').$route_file));

?>