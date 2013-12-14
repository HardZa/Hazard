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
				array(PRG_CHK_DOC => 'req1/flow_1.gif',
					  PRG_SURVEY => 'req1/flow_2.gif',
					  PRG_CONSIDER => 'req1/flow_3.gif',
					  PRG_WAIT_PAY => 'req1/flow_4.gif',
					  PRG_ACCEPT_PAY => 'req1/flow_5.gif',
					  PRG_PRINTING => 'req1/flow_6.gif',
					  PRG_COMPLETE => 'req1/flow_7.gif',
					  PRG_REJECT => 'req1/8.gif')
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
