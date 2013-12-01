<?php

class Config
{
	private static $config = array(
		'mysql' => array(
			'host'=>'127.0.0.1',
			'username'=>'root',
			'password'=>'',
			'db'=>'hazarddb'
		)
	
	); 

	public static function get($path=null)
	{
		$ans = Config::$config;
		
		if($path)
		{
			$path= explode('/',$path);
			
			foreach($path as  $bit)
			{
				if(isset($ans[$bit]))
				{
					$ans=$ans[$bit];
				}
			}
		}
		
		return $ans;
	}
}


?>