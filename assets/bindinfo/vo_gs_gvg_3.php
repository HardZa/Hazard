<?php
$userinfo=User::get_client_by_id($request->get('userid'));
$cert = $request->get_certificate_ref();
$docData = array( 
					"day" => $request->get_day(),
					"month" => get_month( $request->get_month() ),
					"year" => $request->get_year() + 543,
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
					'addremail'=>$userinfo["useremail"],
					'hazardid'=>$cert->certno
				);
				
?>