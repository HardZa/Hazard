<?php 
//var_dump($request);

	$user_info = User::get_client_by_id($request->get('userid'));
	$me_info = User::get_user();
	$cert = $request->get_certificate();
	$datecert = date_create( $cert->get_data('create_date') );
	$print_info=array(
		'no' => $cert->certno,
		"day" => date_format($datecert,'d'),
		"month" => get_month( date_format($datecert,'m') ),
		"year" => date_format($datecert,'Y') + 543,//$request->get_year(),
		'name' => $user_info['userrealname'],
		'nationality' => $user_info['usernationality'],
		'taxno' => $user_info['usertaxid'],
		'addrhouse' => $user_info['useraddrhouse'],
		'addrvillage' => $user_info['useraddrvillage'],
		'addrdrive' => $user_info['useraddrdrive'],
		'addrroad' => $user_info['useraddrroad'],
		'addrsubdistrict' => $user_info['useraddrsubdistrict'],
		'addrdistrict' => $user_info['useraddrdistrict'],
		'addrprovince' => $user_info['useraddrprovince'],
		'addrpostalcode' => $user_info['userpostalcode'],
		'addrphone' => $user_info['userphone'],
		'addrfax' => $user_info['userfax'],
		'group' => $request->get_data('group'),
		'purposefirst' => $request->get_data('purposefirst'),
		'hazardname' => $request->get_data('hazardname'),
		'hazardformulation' => $request->get_data('hazardformulation'),
		'businessname' => $request->get_data('businessname'),
		'producer' => $request->get_data('producer'),
		'importer' => $request->get_data('importer'),
		'saleman' => $request->get_data('saleman'),
		'purpose' => $request->get_data('purpose'),
		'container' => $request->get_data('container'),
		'other'=>'',
		'expday'=>$cert->get_exp_day(),
		'expmonth'=>get_month($cert->get_exp_month()),
		'expyear'=>$cert->get_exp_year() + 543,
		'officername' => $me_info->get('userrealname')
	);
	
?>
