<?php

function get_month($id)
{
	switch ($id) {
		case 1:	return 'มกราคม';
		case 2: return 'กุมภาพันธ์';
		case 3: return 'มีนาคม';
		case 4: return 'เมษายน';
		case 5: return 'พฤษภาคม';
		case 6: return 'มิถุนายน';
		case 7: return 'กรกฎาคม';
		case 8: return 'สิงหาคม';
		case 9: return 'กันยายน';
		case 10: return 'ตุลาคม';
		case 11: return 'พฤศจิกายน';
		case 12: return 'ธันวาคม';
	}
	return 'unknow month';
}

function printDisableWhenEmpty($e)
{
	if( count($e) == 0 ) echo 'disabled';
}


function fastRender( $file , $arr )
{
	global $docData;
	$docData = array_merge($docData,$arr);
	include( resolveHeader('assets/').$file );
}

function resolveHeader($location)
{
	return str_replace('\\','/',__dir__).'/../'.$location;
}

function resolveURIHeader($uri)
{
	return 'http://'.$_SERVER['HTTP_HOST'].'/'.Config::get('path/main').$uri;
}

function getBit($a,$b)
{
	return ( $a >> ($b) ) & 1;
}

function resolvePrinterURI($doc_name,$information)
{
	$printerURI = Config::get('template/print').$doc_name.'.php?';
	foreach($information as $field=>$data)
	{
		$printerURI= $printerURI.$field.'='.urlencode($data).'&';
	}
	$printerURI = substr($printerURI,0,-1);
	return resolveURIHeader($printerURI);
}

function resolvePictureURI($pic_name)
{
	$pictureURI = 'pic/'.$pic_name;
	return resolveURIHeader($pictureURI);
}

function getifset($array,$data)
{
	if(isset($array[$data]))
		return $array[$data];
	return '';
}

$docData = array();

function doc($field)
{
	global $docData ;
	return getifset($docData,$field);
}

function set_doc($field,$v)
{
	global $docData ;
	$docData[$field] = $v;
}

function DMY_to_YMD($date)
{
	return substr($date,6,4).'-'.substr($date,3,2).'-'.substr($date,0,2);
}

function YMD_to_DMY($date)
{
	return substr($date,8,2).'-'.substr($date,5,2).'-'.substr($date,0,4);
}


function fastClientNewLink($e,$printA,$printB)
{
	if( count($e) == 0 ) echo resolveURIHeader($printB);
	else echo resolveURIHeader($printA);
}

function alert($msg)
{
	echo "<script>alert('".$msg."');</script>";
}

?>