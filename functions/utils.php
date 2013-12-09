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

 
 ?>