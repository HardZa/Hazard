<?php

class RequestInfo
{
	private static $config = array(
		'1' => array(
				'name' => 'regis' ,
				'graph' => array(1,1,1),
				'node' => array(
					array(
							'user' => 'client' ,
							'require' => 0 ,
							'file' => 'regis_start.php'
						) ,
					array(
							'user' => 'hazcontrol' ,
							'require' => 1 ,
							'file' => 'regis_approval.php'
						) ,
					array(
							'user' => 'cashier' ,
							'require' => 3 ,
							'file' => 'payment.php'
						)
				)
			)
	);

	public static function get($path=null)
	{
		$ans = RequestInfo::$config;
		
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