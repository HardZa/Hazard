<?php

require_once('core/init.php');
include(resolveHeader('includes/header.php'));

function translateProgress($progress){
	return Request::progress_to_string($progress);
}
function translateRequestType($requesttype){
	return Request::type_to_string($requesttype);
}

$user = User::get_user();
$db = DB::get_db();
$condition = '1=1';
if( $user->get_groupname() == "client" ){
	$condition = $condition." and userid='".$user->get('userid')."'";
}
if( $user->get_groupname() == "cashier" )
	$condition = $condition." and progress='".PRG_WAIT_PAY."'";
if( $user->get_groupname() == "plantprotection"
 ||  $user->get_groupname() == "agriproduction" )
	$condition = $condition." and progress='".PRG_SURVEY."'";

$data = $db->select('request',array('userid','requesttype','progress'),$condition);
//var_dump($data);

echo "<div class='container'>
		  <div class='page-header'>
			<h1>รายการคำร้อง</h1>
	 	 </div>
		<table class='table'>
			<tr>
				<th>ชนิดคำร้อง</th>
				<th>ผู้ยื่นคำร้อง</th>
				<th>ความก้าวหน้า</th>
				<th>เปิดดู</th>
			</tr>";

foreach( $data as $item ){
	$data_user = $db->select('users',null,"userid='".$item['userid']."'");
	$data_user = $data_user[0]['userrealname'];
	//echo "<script>alert(".$item['userid'].");</script>";
	//echo "<script>alert(".$data_user.");</script>";
	$data_progress = $item['progress'];
	$data_progress = translateProgress($data_progress);
	$data_requesttype = $item['requesttype'];
	$data_requesttype = translateRequestType($data_requesttype);
	echo "<tr>
			<td>$data_requesttype</td>
			<td>$data_user</td>
			<td>$data_progress</td>
			<td><button type='button'>เปิดดู</button></td>
		  </tr>";
}
echo "</table></div>";


?> 
<?php
include(resolveHeader('includes/footer.php'));
?>
