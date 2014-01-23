<?php
ob_start();
$folder='../upload/';
if($_FILES['file1']['error']>0)
{
	echo "-1";
}
else 
{
	$name = pathinfo($_FILES['file1']['name'], PATHINFO_FILENAME);
	$extension = pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
	
	if (!(($extension == "jpg" || $extension == "gif" || $extension == "png") && ($_FILES["file1"]["type"] == "image/jpeg" || $_FILES["file1"]["type"] == "image/gif" || $_FILES["file1"]["type"] == "image/png"))){
    echo "-2";
    die();
	}

	$increment = ''; //start with no suffix
	
	if( ereg("[ก-๙]", $name ) )
	{
		$name = 'image';
	}

	while(file_exists($folder.$name.$increment.'.'.$extension)) {
    	$increment++;
	}
	
	$basename = ($name.$increment.'.'.$extension);

	if(move_uploaded_file($_FILES['file1']['tmp_name'], $folder.$basename))
	{
		ob_end_clean();
		echo $basename;
	}
	else 
	{
		ob_end_clean();
		echo "-1";
	}
}
?>