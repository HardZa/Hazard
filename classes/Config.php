<?php

class Config
{ 
	private static $config = array(
		'mysql' => array(
			'host'=>'127.0.0.1',
			'username'=>'root',
			'password'=>'',
			'db'=>'hazarddb',
			'encode' => 'UTF8'
		),
		'path' =>array(
			'main'=>'Hazard/',
			'upload'=>'upload/'
		),
		'template'=>array(
			'print'=>'assets/printable/',
			'request'=>'assets/requestdoc/',
			'list'=>'assets/requestlist/',
			'process'=>'assets/requestprocess/',
			'request_info' => 'assets/requestdoc/',
			'bindprint' => 'assets/bindprint/' ,
			'bindinfo' => 'assets/bindinfo/' ,
		),
		'progress_maping' => array(
			VO_GS_GVG_1 => 
				array(PRG_CHK_DOC => 'req1/1.jpg',
					  PRG_SURVEY => 'req1/2.jpg',
					  PRG_CONSIDER => 'req1/3.jpg',
					  PRG_WAIT_PAY => 'req1/4.jpg',
					  PRG_ACCEPT_PAY => 'req1/5.jpg',
					  PRG_PRINTING => 'req1/6.jpg',
					  PRG_COMPLETE => 'req1/7.jpg',
					  PRG_REJECT => 'req1/8.jpg')
					  
		),
		'permission'=>true
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
