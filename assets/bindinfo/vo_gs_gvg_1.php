<?php
$userinfo=User::get_client_by_id($request->get('userid'));
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
					'addremail'=>$userinfo["useremail"],
					'group'=>$request->get_data('group'),
					'purposefirst'=>$request->get_data('purposefirst'),
					'hazardname'=>$request->get_data("hazardname"),
					'hazardformulation'=>$request->get_data('hazardformulation'),
					'businessname'=>$request->get_data('businessname'),
					'producer'=>$request->get_data('producer'),
					'productname'=>$request->get_data('productname'),
					'importer'=>$request->get_data('importer'),
					'saleman'=>$request->get_data('saleman'),
					'container'=>$request->get_data('container'),
					'purpose'=>$request->get_data('purpose')
				);
				
?>