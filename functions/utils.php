 <?php
 
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

 
 ?>