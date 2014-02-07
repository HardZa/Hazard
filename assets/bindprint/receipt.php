<?php

	$user_info = User::get_client_by_id($request->get('userid'));
	$me_info = User::get_user();
	$reff_ = ( Request::type_to_amount($request->get('requesttype')) );
	$print_info=array(
		'bookno'=>$request->get_data('receipt_bookno'),
		'no'=>$request->get_data('receipt_no'),
		'office'=>'กระทรวงเกษตรและสหกรณ์',
		'referenceno'=> $request->get_data('receipt_referenceno'),	
		'day'=>date_format( date_create( ) , 'd' ),
		'month'=>get_month( date_format( date_create( ) , 'm' ) ),
		'year'=>date_format( date_create( ) , 'Y' ) + 543 ,
		'name'=>$user_info['userrealname'],
		'description'=>'ค่าธรรมเนียม'.Request::type_to_string2( $request->get('requesttype') ),
		'amount'=> $reff_[0],
		'amounttext'=> $reff_[1],
		'payment'=>'เงินสด',
		'officername'=>$me_info->get('userrealname'),
		'officeposition'=>'การเงิน'
	);
?>