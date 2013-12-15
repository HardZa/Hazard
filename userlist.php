<?php
require_once('core/init.php');
include(resolveHeader('includes/header.php'));

if(!Permission::userListAllowed())
   Redirect::to(403);
?>
<div class="container">
<div class="data-box">
<div class="head-box page-header">
    <h1>รายการผู้ใช้</h1>
</div>

<table class="table table-hover">
	<tr class="warning">
		<th>เลขที่ผู้ใช้<span class="glyphicon" style="margin-left:5px;"></span></th>
		<th>ชื่อผู้ใช้<span class="glyphicon glyphicon-user" style="margin-left:5px;"></span></th>
		<th>ประเภทผู้ใช้<span class="glyphicon glyphicon-list" style="margin-left:5px;"></span></th>
		<th>แก้ไข<span class="glyphicon glyphicon-edit" style="margin-left:5px; color:#7f8c8d;"></span></th>
	</tr>

<?php
$alluser = DB::get_db()->select('users',null);

for($i=0;$i<count($alluser);$i++)
{

	$user = $alluser[$i];
	$id = $user['userid'];
	$name = $user['username'];
	$type = User::group_to_string(User::get_group_by_id($user['userid']));
	
	?>
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $type; ?></td>
		<td><a class='btn btn-warning btn-sm' href='<?php echo resolveURIHeader("user/".$id) ?>'>แก้ไข</a></td>
	</tr>
<?php

}

?>

</table>
</div>
</div>
<?php


include(resolveHeader('includes/footer.php'));
?>
