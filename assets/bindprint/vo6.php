<?php 
//var_dump($request);

	$user_info = User::get_client_by_id($request->get('userid'));
	$me_info = User::get_user();
	$cert = $request->get_certificate();
	$certref = $request->get_certificate_ref();
	$print_info=array(
		'certid'=>$cert->certno,
		'department'=>'วิชาการเกษตร',
		'ministry'=>'เกษตรและสหกรณ์',
		'day'=>$request->get_day(),
		'month'=>get_month( $request->get_month() ),
		'year'=>$request->get_year() + 543,
		'certidref'=>$certref->certno,
		'name'=>$user_info['userrealname'],
		'nationality'=>$user_info['usernationality'],
		'taxno'=>$user_info['usertaxid'],
		'addrhouse'=>$user_info['useraddrhouse'],
		'addrvillage'=>$user_info['useraddrvillage'],
		'addrdrive'=>$user_info['useraddrdrive'],
		'addrroad'=>$user_info['useraddrroad'],
		'addrsubdistrict'=>$user_info['useraddrsubdistrict'],
		'addrdistrict'=>$user_info['useraddrdistrict'],
		'addrprovince'=>$user_info['useraddrprovince'],
		'addrpostalcode'=>$user_info['userpostalcode'],
		'addrphone'=>$user_info['userphone'],
		'addrfax'=>$user_info['userfax'],
		'hazardname'=>$certref->get_data('hazardname'),
		'hazardformulation'=>$certref->get_data('hazardformulation'),
		'businessname'=>$certref->get_data('businessname'),
		'orderCountry'=>$request->get_data('orderCountry'),
		'quantity'=>$request->get_data('quantity'),
		'note'=>$request->get_data('note'),
		'condition'=>'',
		'expday'=>$cert->get_exp_day(),
		'expmonth'=>$cert->get_exp_month(),
		'expyear'=>$cert->get_exp_year() + 543,
		'officername'=>$request->get_data('officername'),
		'certid1'=>'',
		'storename'=>$request->get_data('storename'),
		'storehouse'=>$request->get_data('storehouse'),
		'storevillage'=>$request->get_data('storevillage'),
		'storedrive'=>$request->get_data('storedrive'),
		'storeroad'=>$request->get_data('storeroad'),
		'storesubdistrict'=>$request->get_data('storedistrict'),
		'storedistrict'=>$request->get_data('storedistrict'),
		'storeprovince'=>$request->get_data('storeprovince'),
		'storepostalcode'=>$request->get_data('storepostalcode'),
		'storephone'=>$request->get_data('storephone'),
		'storefax'=>$request->get_data('storefax'),
		'storespecialist'=>$request->get_data('storespecialist')
	);
	
?>
