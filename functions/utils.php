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
 	$printerURI = Config::get('path/document_template').$doc_name.'.php?';
 	foreach($information as $field=>$data)
 	{
 		$printerURI= $printerURI.$field.'='.$data.'&';
 	}
 	$printerURI = substr($printerURI,0,-1);
 	return resolveURIHeader($printerURI);
 }

 
 ?>