<?php
$userinfo=User::get_client_by_id($request->get('userid'));
$docData = array( 
					"day" => $request->get_data('field'),
					"month" => $request->get_data('field'),
					"year" => $request->get_data('field'),
					"name"=>$userinfo['userrealname'], 
					"age" => 20,//$userinfo['userage'],
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
					'hazardno'=>$request->get_data('certidref'),
					
					'hazardname'=>33,//$get_hname_by_certi_id('certidref'),
					'hazardformulation'=>44,//$get_hf_by_certi_id('certidref'),
					'businessname'=>55,//$get_bn_by_certi_id('certidref'),
					'producer'=>66,//$get_pd_by_certi_id('certidref'),
					'producerCountry'=>77,//$get_pc_by_certi_id('certidref'),
					
					'quantity'=>$request->get_data('quantity'),
					'note'=>$request->get_data('note'),
					'producerspecialist'=>$request->get_data('producerspecialist')
				);
				
?>