
<?php

if(Input::get('approve') == '1')
{
	echo "อนุญาติ";
	doc('request')->progress( PRG_PRINTING );
	doc('request')->save();
}
else if(Input::get('approve') == '0')
{
	echo "ไม่อณุญาติ";
	doc('request')->reject();
	doc('request')->save();
}
else
{
?>

<div class="row">
	<div class="row">
	<div class="col-md-6">
    	<label class="col-sm-3 control-label">CODE : </label>
    	<div class="col-sm-6">
	      	<input type="text"  disabled class="form-control" name="code" placeholder="code" value="<?php echo doc('request')->get_data('code_pay'); ?>" >
	    </div>
 	</div>
 </div><br>
 		<div class="row">
	<div class="col-md-2">
		<input type="button" value="ผ่าน" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=1");
		?>'">
	</div>
	<div class="col-md-2">
		<input type="button" value="ไม่ผ่าน" class="btn btn-success" onclick="parent.location='<?php 
			echo resolveURIHeader(doc('main_file').'?id='.doc('request')->get('requestid')."&approve=0");
		?>'">
	</div>
</div>
</div>

<?php
}
?>