 <?php
 
 class Redirect
 {
	public static function to($location =null)
	{
		if($location)
		{
			if(is_numeric($location))
			{
				include resolveHeader('includes/errors/'.$location.'.php');
				include resolveHeader('includes/footer.php');
				exit();
			}
			header('Location: '.resolveURIHeader($location));
			exit();
		}
	}

	public static function postto($location=null,$data=null)
	{
		if($location)
		{
			$url = resolveURIHeader($location);
			/*$options = array(
    			'http' => array(
      				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        			'method'  => 'POST',
        			'content' => http_build_query($data)
        		)
			);
			echo "HELLO";
			$context  = stream_context_create($options);
			file_get_contents($url,false,$context);*/

			echo "<form action='".$url."' method='post' name='frm'>";
			foreach ($data as $a => $b) {
				echo "<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."'>";
			}
			echo "</form>";
			echo '<script language="JavaScript">';
			echo 'document.frm.submit();';
			echo "</script>";
		}
	}
 }
 
 ?>