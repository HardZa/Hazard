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
			header('Location: '.$location);
			exit();
		}
	}
 }
 
 ?>