<?php

class RequestInfo
{
	private static $config = array(
		'1' => array(
				'name' => 'regis' ,
				'status' => array(
						'0' => 'checking document' ,
						'1' => 'approving document' ,
						'3' => 'making bill',
						'7' => 'pay' ,
						'15' => 'accept_pay'
					) ,
				'graph' => array(1,1,1),
				'when_complete' => 31 ,
				'node' => array(
					array(
							'user' => 'hazcontrol' ,
							'require' => 0 ,
							'file' => 'hazctl/doccument_check.php'
						) ,
					array(
							'user' => 'hazcontrol' ,
							'require' => 1 ,
							'file' => 'hazctl/regis_approval.php'
						) ,
					array(
							'user' => 'cashier' ,
							'require' => 3 ,
							'file' => 'cashier/payment.php'
						) ,
					array(
							'user' => 'client' ,
							'require' => 7 ,
							'file' => 'user/pay.php'
						),
					array(
							'user' => 'cashier',
							'require' => 15 ,
							'file' => 'cashier/accept_pay.php'
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