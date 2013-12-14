<?php
$userinfo=User::get_client_by_id($request->get('userid'));
$docData = array( 
					"day" => $request->get_day(),
					"month" => $request->get_month(),
					"year" => $request->get_year(),
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
					'addremail'=>$userinfo["useremail"],
					'purposefirst'=>$request->get_data('purposefirst'),
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
					'storeemail'=>$request->get_data('storeemail'),
					'hazardno'=>$request->get_data('certidref'),
					
					'hazardname'=>33,//$get_hname_by_certi_id('certidref'),
					'hazardformulation'=>44,//$get_hf_by_certi_id('certidref'),
					'businessname'=>55,//$get_bn_by_certi_id('certidref'),
					'producer'=>66,//$get_pd_by_certi_id('certidref'),
					'productname'=>77,//$get_pn_by_certi_id('certidref'),
					'importer'=>88,//$get_im_by_certi_id('certidref'),
					
					'quantity'=>$request->get_data('quantity')
				);
				
?>