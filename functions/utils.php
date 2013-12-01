 <?php
 
 function resolveHeader($location)
 {
	return str_replace('\\','/',__dir__).'/../'.$location;
 }
 
 ?>