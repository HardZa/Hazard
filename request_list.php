<?php
 require_once('core/init.php');
include(resolveHeader('includes/header.php'));


if(!Permission::canShowList())
   Redirect::to(403);
function translateProgress($progress){
	return Request::progress_to_string($progress);
}
function translateRequestType($requesttype){
	return Request::type_to_string($requesttype);
}
function for_print_icon($id)
{
	global $certs;
	if( count($certs) != 0 )
		echo resolveURIHeader("image/icon/icon_".$id."_1.png");
	else
		echo resolveURIHeader("image/icon/icon_".$id."_2.png");
}

$user = User::get_user();
$db = DB::get_db();
$condition = '1=1';
if( $user->get_groupname() == "client" ){
	$condition = $condition." and userid='".$user->get('userid')."'";
}
if( $user->get_groupname() == "cashier" )
	$condition = $condition." and progress='".PRG_ACCEPT_PAY."'";
if( $user->get_groupname() == "plantprotection"
 ||  $user->get_groupname() == "agriproduction" )
	$condition = $condition." and progress='".PRG_SURVEY."'";

if( isset($_GET['requesttype']) && $_GET['requesttype'] != ''){
	$condition = $condition." and requesttype='".$_GET['requesttype']."'";
}
if( isset($_GET['progress']) && $_GET['progress'] != ''){
	$condition = $condition." and progress='".$_GET['progress']."'";
}
if( isset($_GET['user']) && $_GET['user'] != ''){
	$condition = $condition." and userid='".$_GET['user']."'";
}
if( $user->get_groupname() == "documentchecker" ){
	$condition = $condition." and progress='".PRG_CHK_DOC."'";
}
if( $user->get_groupname() == "hazcontrol" ){
	$condition = $condition." and progress!='".PRG_CHK_DOC."'";
}


$certs = Certificate::get_user_certs( $user->get('userid') , VO_GS_GVG_2 );
$data = $db->select('request',array('userid','requesttype','progress','requestid'),$condition);
?>


<div class='container'>
	<div class="data-box">
	
	<?php
	if(User::get_user()->is_group('client')){
	?>
	<div class='page-header'>
		<h1>ส่งคำร้อง</h1>
		<div style="margin:20px 0px 10px 50px">
			แสดงรายละเอียดเพิ่มเติม <button type="button" class='btn btn-success btn-xs' onclick="showTabtab()" id="showbtn" name="showbtn">&nbsp;+&nbsp;</button>
		</div>
	</div>

	<div name="tabtab" id="tabtab">
	<script type="text/javascript">
	<!--
		function showTabtab()
		{
			var table=document.getElementById('tabtab');
			var textbtn=document.getElementById('showbtn');
			
			if(table.style.display == "block")
			{
				table.style.display = "none";
				textbtn.innerHTML="&nbsp;+&nbsp;";
			}
			else
			{
				table.style.display = "block";
				textbtn.innerHTML="&nbsp;-&nbsp;";
			}
		}
		document.getElementById('tabtab').style.display="none";
	-->
	</script>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="col-md-4">
	       <div class="block-option" >
	            <a href="<?php echo resolveURIHeader('request/new/1'); ?>" class="block-link" style="text-decoration:none;">
					<div class ="block-option-image">
						<img src="<?php echo resolveURIHeader("image/icon/icon_1_1.png");  ?>" class="img-circle">
					</div>
					<div class="block-option-text">
					<br>
						<h4>ขอขึ้นทะเบียนวัตถุอันตราย</h4>
					</div>
				</a>
	        </div>
		</div>
	    <div class="col-md-4">            
            <div class="block-option">
                <a href="<?php echo resolveURIHeader('request/new/2'); ?>" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php for_print_icon(2);  ?>" class="img-circle">
                    </div>
                    <div class="block-option-text">
                    	<br>
                      <h4>ขอต่ออายุทะเบียนวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
		</div>
	    <div class="col-md-4">
            <div class="block-option">
                <a href="<?php echo resolveURIHeader('request/new/3'); ?>" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php for_print_icon(3);  ?>" class="img-circle">
                    </div>
                    <div class="block-option-text">
                       <br>
                       <h4>ขออนุญาตผลิตหรือนำเข้าตัวอย่างวัตถุอันตราย</h4>
                       
                    </div>
                </a>
            </div>
		</div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-3">
            <div class="block-option">
                <a href="<?php echo resolveURIHeader('request/new/7'); ?>" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php for_print_icon(4);  ?>" class="img-circle">
                    </div>
                    <div class="block-option-text">
                       <br>
                       <h4>ขออนุญาตครอบครองวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
		</div>
	    <div class="col-md-3">
            <div class="block-option">
				<a href="<?php echo resolveURIHeader('request/new/4'); ?>" class="block-link" style="text-decoration:none;">
                    <div class="block-option-image">
                       <img src="<?php for_print_icon(5);  ?>" class="img-circle">  
                    </div>
                    <div class="block-option-text">
                       <br>
                       <h4>ขออนุญาตผลิตวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
		</div>
	    <div class="col-md-3">
            <div class="block-option">
                <a href="<?php echo resolveURIHeader('request/new/6'); ?>" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php for_print_icon(6);  ?>" class="img-circle">
                    </div>
                    <div class="block-option-text">
                       <br>
                       <h4>ขออนุญาตส่งออกวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
		</div>
	    <div class="col-md-3">
            <div class="block-option">
                <a href="<?php echo resolveURIHeader('request/new/5'); ?>" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php for_print_icon(7);  ?>" class="img-circle">
                    </div>
                    <div class="block-option-text">
                       <br>                    
                       <h4>ขออนุญาตนำเข้าวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
		</div>
	</div>
	</div>
<?php
}
?>
	<div class='page-header'>
		<h1>รายการคำร้อง</h1>
	</div>
	
	<form  method="get" action="" role="form" >
		<div class="form-group" >
			<div class="col-sm-3" >
				<select class="form-control" name="requesttype">
					<option value="" >--เลือกชนิดคำร้อง--</option>
					<option value="" >ชนิดใดก็ได้</option>
					<?php 
						$all_requesttype = array(0,1,2,3,4,5,6);
						foreach( $all_requesttype as $item ){
							echo "<option value='".$item."'>".Request::type_to_string($item)."</option>\n";
						}
					?>
				</select> 
	    	</div>
  		</div>
	 	<div class="form-group" >
		    <div class="col-sm-3">
				<select class="form-control" name="progress">
					<option value="">--เลือกความก้าวหน้า--</option>
					<option value="">ความก้าวหน้าใดก็ได้</option>
					<?php
						$all_progress = array(1,2,3,4,5,6,100,101);
						foreach( $all_progress as $item ){
							echo "<option value='".$item."'>".Request::progress_to_string($item)."</option>\n";
						}
					?>
			</select>
		</div>
	</div>
 	<div class="form-group" >
	    <div class="col-sm-3" >
			<select class="form-control" name="user">
				<option value="">--เลือกผู้ยื่นคำร้อง--</option>
				<option value="">ผู้ยื่นคำร้องใดก็ได้</option>
				<?php
					$db = DB::get_db();
					$data_user = $db->select('usergroup_client',array('userid'));
					foreach( $data_user as $user ){
						$data_name = $db->select('users',array('userrealname'),'userid='.$user['userid']);
						$name = $data_name[0]['userrealname'];
						echo "<option value='".$user['userid']."'>".$name."</option>\n";
					}
				?>
			</select>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">ค้นหา</button>
	</form>
<br><br>
<?php

echo "<table class='table table-hover'>
			<tr class='warning'>
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
			<td>
				<a href='request/".$item['requestid']."'><button type='submit' class='btn btn-info btn-xs' >เปิดดู</button></a>
			</td>
		  </tr>";
}
echo "</table></div></div>";


?> 
<?php
include(resolveHeader('includes/footer.php'));
?>
