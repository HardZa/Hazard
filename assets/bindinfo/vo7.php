<?php
$userinfo=User::get_client_by_id($request->get('userid'));
$cert = $request->get_certificate_ref();
$docData = array( 
					"day" => $request->get_day(),
					"month" => get_month( $request->get_month() ),
					"year" => $request->get_year(),
					"name"=>$userinfo['userrealname'], 
					"age" => $userinfo['userage'],
					'nationality'=>$userinfo["usernationality"],
					'taxno'=>$userinfo["usertaxid"],
					'addrhouse'=>$userinfo["useraddrhouse"],
					'addrvillage'=>$userinfo["useraddrvillage"],
					'addrdrive'=>$userinfo["useraddrdrive"],
					'addrroad'=>$userinfo["useraddrroad"],
					'addrsubdistrict'=>$userinfo["useraddrsubdistrict"],
					'addrdistrict'=>$userinfo["useraddrdistrict"],
					'addrprovince'=>$userinfo["useraddrprovince"],
					'addrpostalcode'=>$userinfo["userpostalcode"],
					'addrphone'=>$userinfo["userphone"],
					'addrfax'=>$userinfo["userfax"],
					'storename'=>$request->get_data('storename'),
					'storehouse'=>$request->get_data('storehouse'),
					'storevillage'=>$request->get_data('storevillage'),
					'storedrive'=>$request->get_data('storedrive'),
					'storeroad'=>$request->get_data('storeroad'),
					'storesubdistrict'=>$request->get_data('storesubdistrict'),
					'storedistrict'=>$request->get_data('storedistrict'),
					'storeprovince'=>$request->get_data('storeprovince'),
					'storepostalcode'=>$request->get_data('storepostalcode'),
					'storephone'=>$request->get_data('storephone'),
					'storefax'=>$request->get_data('storefax'),
					'storespecialist'=>$request->get_data('storespecialist'),
					'purpose'=>$request->get_data('purpose'),
					'purpose_other'=>$request->get_data('purpose_other'),
					'hazardno'=>$request->get_data('certidref'),
					'hazardname'=>$cert->get_data('hazardname'),//$get_hname_by_certi_id('certidref'),
					'businessname'=>$cert->get_data('businessname'),//$get_bname_by_certi_id('certidref'),
					
					
					'quantity'=>$request->get_data('quantity'),
					'area'=>$request->get_data('area')
					
				);
				
?>