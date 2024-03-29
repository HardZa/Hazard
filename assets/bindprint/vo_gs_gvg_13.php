<?php 
   
	$user_info = User::get_client_by_id($request->get('userid'));
	$me_info = User::get_user();
	$cert = $request->get_certificate();
	$datecert = date_create( $cert->get_data('create_date') );
	$hazard = $request->get_certificate_ref();
	$print_info=array(
		//'no'=> $cert->certno,	
		"day" => date_format($datecert,'d'),
		"month" => get_month( date_format($datecert,'m') ),
		"year" => date_format($datecert,'Y') + 543,
		'certid'=> $cert->certno,		
		'name'=>$user_info['userrealname'],
		'nationality'=> $user_info['usernationality'],
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
		'storename'=> $request->get_data('storename'),
		'storehouse'=> $request->get_data('storehouse'),
		'storevillage'=> $request->get_data('storevillage'),
		'storedrive'=> $request->get_data('storedrive'),
		'storeroad'=> $request->get_data('storeroad'),
		'storesubdistrict'=> $request->get_data('storesubdistrict'),
		'storedistrict'=> $request->get_data('storedistrict'),
		'storeprovince'=> $request->get_data('storeprovince'),
		'storepostalcode'=> $request->get_data('storepostalcode'),
		'storephone'=> $request->get_data('storephone'),
		'storefax'=> $request->get_data('storefax'),
		'hazardname' => $hazard->get_data('hazardname'),
		'hazardformulation' => $hazard->get_data('hazardformulation') ,
		'businessname' => $hazard->get_data('businessname'),
		'producer' => $hazard->get_data('producer'),
		'importer' => $hazard->get_data('importer'),
		'quantity'=> $cert->get_data('quantity'),
		'other'=>'-',
		'expday'=>$cert->get_exp_day(),
		'expmonth'=>get_month($cert->get_exp_month()),
		'expyear'=>$cert->get_exp_year() + 543,	
		'officername'=> $cert->get_data('officername')
	);

?>
