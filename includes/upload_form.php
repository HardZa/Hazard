<input type="hidden" id="picarr" name="picarr">
<label class="col-sm-3 col-sm-offset-1 control-label">แนบเอกสารที่เกี่ยวข้อง</label>
<div class = "col-sm-4">

<table class = "table" name="uptab" id="uptab" style="width:100%"></table>

<input type="file" name="file1" id="file1" onchange="uploadFile()"><br> 
<!--
<button type="button" class="btn btn-default" onclick="uploadFile()">อัพโหลดไฟล์</button> 
-->

<progress hidden="1" id="progressBar" value="0" max="100" style="width:150px;"></progress>
<h id="status"></h>
<script>
if(pichead[0])
{
	initial();
}
</script>
</div>
