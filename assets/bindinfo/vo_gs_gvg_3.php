<?php
$userinfo=User::get_client_by_id($request->get('userid'));
$docData = array( 
					"day" => $request->get_data('day'),
					"month" => $request->get_data('month'),
					"year" => $request->get_data('year'),
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
					'hazardid'=>$request->get_data('hazardno')
					
				);
				
?>