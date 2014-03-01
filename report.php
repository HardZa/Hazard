<?php
 	require_once('core/init.php');
	include(resolveHeader('includes/header.php'));

	if(!Permission::canReport())
   		Redirect::to(403);
	
?>
<br>
<div class="report-page container">
	<div style="border-bottom:1px solid #CCC5A8;" class="page-header">
	    <h1>รายงานข้อมูลทางสถิติ</h1>
	</div>
	<div class="shadow-box user-report">
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php echo resolveURIHeader("./image/chart.png") ?>">	
				<h3 style="margin-top:15px;">จำนวนผู้ใช้ต่อวัน</h3>
			</div>
			<table class="table-mod table col-sm-offset">
				<tr>
					<td>วันที่</td>
					<td>จำนวนครั้ง</td>
				</tr>
				<?php for($i=0;$i<5;$i++) { ?>
				<tr>
					<td><?php echo get_date($i); ?></td>
					<td><?php echo Log::get($i); ?></td>
				</tr>
				<?php } ?>
			</table>
			<p class="pull-right">MAX : <?php echo (Log::get_max()); ?></p>
			<p class="pull-right">MIN : <?php echo (Log::get_min()); ?></p>
		</div>
	</div>
	<div class="shadow-box doc-report">
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php echo resolveURIHeader("./image/chart2.png") ?>">	
				<h3 style="margin-top:15px;">คำขอเอกสาร</h3>
			</div>
			<table class="table-mod table">
				<tr>
					<td>ชนิดคำร้อง</td>
					<td>กำลังดำเนินการ</td>
					<td>ผ่าน</td>
					<td>ไม่ผ่าน</td>
				</tr>
			<?php 
				$all_reqtype = array(VO_GS_GVG_1,VO_GS_GVG_3,VO_1,VO_3,VO_5,VO_7,VO_GS_GVG_12);

				for($i=0;$i<count($all_reqtype);$i++)
				{
					$reqt = $all_reqtype[$i];
					$c_working = Log::count_request($reqt);
					$c_complete = Log::count_request($reqt,PRG_COMPLETE);
					$c_reject = Log::count_request($reqt,PRG_REJECT);
			?>
				<tr>
					<td><?php echo Request::type_to_string2($reqt); ?></td>
					<td><?php echo $c_working; ?></td>
					<td><?php echo $c_complete; ?></td>
					<td><?php echo $c_reject; ?></td>
				</tr>

			<?php } ?>
			</table>
		</div>
	</div>
	<div class="shadow-box age-report">
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php echo resolveURIHeader("./image/chart3.png") ?>">	
				<h3 style="margin-top:15px;">ช่วงอายุของผู้ใช้</h3>
			</div>
			<table class="table-mod table">
				<tr>
					<td>ช่วงอายุ</td>
					<td>จำนวน</td>
				</tr>
				<tr>
					<td>10-20</td>
					<td><?php echo Log::get_user_range_age(10,20); ?></td>
				</tr>
				<tr>
					<td>21-30</td>
					<td><?php echo Log::get_user_range_age(21,30); ?></td>
				</tr>
				<tr>
					<td>31-40</td>
					<td><?php echo Log::get_user_range_age(31,40); ?></td>
				</tr>
				<tr>
					<td>41-50</td>
					<td><?php echo Log::get_user_range_age(41,50); ?></td>
				</tr>
				<tr>
					<td>51-60</td>
					<td><?php echo Log::get_user_range_age(51,60); ?></td>
				</tr>
				<tr>
					<td>อื่นๆ</td>
					<td><?php echo Log::get_user_range_age(61,999999); ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php
 	include(resolveHeader('includes/footer.php'));
?>