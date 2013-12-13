<?php

$route_file = 'empty.php';
$route_progress = doc('progress');

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
		case PRG_CHK_DOC:
			set_doc('next_progress',PRG_SURVEY);
			$route_file = 'normal_approve.php';
			break;
		case PRG_SURVEY:
			set_doc('next_progress',PRG_CONSIDER);
			$route_file = 'normal_approve.php';
			break;
		case PRG_CONSIDER:
			set_doc('next_progress',PRG_WAIT_PAY);
			$route_file = 'normal_approve.php';
			break;
		case PRG_PRINTING:
			$route_file = 'haz_printing.php';
			break;
		case PRG_COMPLETE:
			$route_file = 'haz_printing.php';
			break;
		case PRG_REJECT:
			$route_file = 'empty.php';
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

include(resolveHeader(Config::get('template/process').$route_file));

?>