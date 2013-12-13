<script>
var pichead = new Array();
var picup = new Array();
function _(el)
{
	return document.getElementById(el);
}
function updatepic()
{
	var arr=_("picarr");
	arr.value=JSON.stringify(picup);
	//alert(JSON.stringify(picup));
}
function delRow(picname)
{
	var row = _(picname);
    row.parentNode.removeChild(row);
	picup.splice(picup.indexOf(picname),1);
	updatepic();
	//ยังไม่ได้ลบไฟล์ทิ้งจริงๆใช้ unlink
}
function uploadFile()
{
	var file=_("file1").files[0];
	if(file.size>8388608)
	{
		_("status").innerHTML="ไฟล์มีขนาดใหญ่เกินไป";
		return;
	}
	var formdata = new FormData();
	formdata.append("file1",file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress",progressHandler,false);
	ajax.addEventListener("load",completeHandler,false);
	ajax.addEventListener("error",errorHandler,false);
	ajax.addEventListener("abort",abortHandler,false);
	ajax.open("POST","includes/upload.php");
	ajax.send(formdata);
	_("progressBar").hidden=0;
}
function progressHandler(event)
{
	var percent=(event.loaded/event.total)*100;
	_("status").innerHTML="กำลังอัพโหลด "+Math.round(percent)+"%";
	_("progressBar").value=Math.round(percent);
}
function gentable(picnameja)
{
	//add pic to arr
	picup[picup.length]=picnameja;
	//update picarr
	updatepic();
	//new row
	var table = _("uptab");
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	row.id=picnameja;
	row.name=picnameja;
	//new cell
	var cell1 = row.insertCell(0);
	//new row bootstrap
	var rowb=document.createElement("div");
	rowb.className="row";
	//new cell picname bootstrap
	var cellb1=document.createElement("div");
	cellb1.className="col-md-8";
	cellb1.innerHTML='<a target="_blank" href="'+"<?php echo resolvePictureURI('"+picnameja+"'); ?>"+'">'+picnameja+'</a>';
	rowb.appendChild(cellb1);
	//new cell btn bootstrap
	var cellb2=document.createElement("div");
	cellb2.className="col-md-1 col-md-offset-1";
	var element2 = document.createElement("button");
	element2.type="button";
	element2.className="btn btn-danger";
	element2.innerHTML="ลบทิ้ง";
	element2.onclick=function(){delRow(picnameja)};
	cellb2.appendChild(element2);	
	rowb.appendChild(cellb2);
	cell1.appendChild(rowb);

}
function completeHandler(event)
{	
	_("progressBar").value=100;
	_("progressBar").hidden=1;
	if(event.target.responseText=="-1")
	{
		_("status").innerHTML="อัพโหลดผิดพลาด";
		return;
	}
	else _("status").innerHTML="";//"อัพโหลดไฟล์ "+event.target.responseText+" สมบูรณ์";
	gentable(event.target.responseText);
	
	_("file1").value="";
}
function errorHandler(event)
{
	_("status").innerHTML="Upload Failed";
}
function abortHandler(event)
{
	_("status").innerHTML="Upload Abort";
}
function initial()
{
	var i;
	for(i=0;i<pichead.length;i++)
	{
		//alert(pichead.length+" "+pichead[i]);
		gentable(pichead[i]);
	}
}
</script>

<?php
	if(Input::exists('post'))
    {
    	$picarr=json_decode(Input::post('picarr'));
		$i;
		for($i=0;$i<count($picarr);$i++)
		{
			echo "<script> pichead[".$i."]='".$picarr[$i]."'; </script>";
		}
	}
?>