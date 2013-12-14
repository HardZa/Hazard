<?php
require_once('core/init.php');
include(resolveHeader('includes/header.php'));

?>
<div class="container">
<div class="data-box">
<div class="head-box page-header">
    <h1>รายการผู้ใช้</h1>
</div>

<table class="table">
<tr>
<th>ชื่อ-สกุล</th>
<th>ประเภทผู้ใช้</th>
<th>แก้ไข</th>
</tr>



<?php
for($i=1;(DB::get_db()->select('users',null,'userid='.$i,1))!=null;$i++)
{

	$row = DB::get_db()->select('users',null,'userid='.$i,1);
	$user = $row[0];
	$name = $user['username'];
	$type = User::group_to_string(User::get_group_by_id($user['userid']));
	$url = "parent.location='edituser.php?user=";

	echo "<tr>
<td>$name</td>
<td>$type</td>
<td><button type='button' class='btn btn-warning btn-sm' onclick=$url".$i."' >แก้ไข</button></td>
</tr>";
}

?>

</table>
</div>
</div>
<?php


include(resolveHeader('includes/footer.php'));
?>