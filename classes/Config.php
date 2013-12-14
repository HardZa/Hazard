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
				array(PRG_CHK_DOC => 'flow5step/flow_1_5.png',
					  PRG_SURVEY => 'flow5step/flow_2_5.png',
					  PRG_CONSIDER => 'flow5step/flow_3_5.png',
					  PRG_WAIT_PAY => 'flow5step/flow_4_5.png',
					  PRG_ACCEPT_PAY => 'flow5step/flow_4_5.png',
					  PRG_PRINTING => 'flow5step/flow_5_5.png',
					  PRG_COMPLETE => 'flow5step/flow_5_5.png',
					  PRG_REJECT => 'flow5step/flow_r_5.png'),
			VO_1 =>
				array(
					  PRG_CHK_DOC => 'flow4step/flow_1_4.png',
					  PRG_CONSIDER => 'flow4step/flow_2_4.png',
					  PRG_WAIT_PAY => 'flow4step/flow_3_4.png',
					  PRG_ACCEPT_PAY => 'flow4step/flow_3_4.png',
					  PRG_PRINTING => 'flow4step/flow_4_4.png',
					  PRG_COMPLETE => 'flow4step/flow_c_4.png',
					  PRG_REJECT => 'flow4step/flow_r_4.png'),
			VO_3 =>
				array(
					  PRG_CHK_DOC => 'flow4step/flow_1_4.png',
					  PRG_CONSIDER => 'flow4step/flow_2_4.png',
					  PRG_WAIT_PAY => 'flow4step/flow_3_4.png',
					  PRG_ACCEPT_PAY => 'flow4step/flow_3_4.png',
					  PRG_PRINTING => 'flow4step/flow_4_4.png',
					  PRG_COMPLETE => 'flow4step/flow_c_4.png',
					  PRG_REJECT => 'flow4step/flow_r_4.png'),
			VO_5 =>
				array(
					  PRG_CHK_DOC => 'flow4step/flow_1_4.png',
					  PRG_CONSIDER => 'flow4step/flow_2_4.png',
					  PRG_WAIT_PAY => 'flow4step/flow_3_4.png',
					  PRG_ACCEPT_PAY => 'flow4step/flow_3_4.png',
					  PRG_PRINTING => 'flow4step/flow_4_4.png',
					  PRG_COMPLETE => 'flow4step/flow_c_4.png',
					  PRG_REJECT => 'flow4step/flow_r_4.png'),
			VO_7 =>
				array(
					  PRG_CHK_DOC => 'flow4step/flow_1_4.png',
					  PRG_CONSIDER => 'flow4step/flow_2_4.png',
					  PRG_WAIT_PAY => 'flow4step/flow_3_4.png',
					  PRG_ACCEPT_PAY => 'flow4step/flow_3_4.png',
					  PRG_PRINTING => 'flow4step/flow_4_4.png',
					  PRG_COMPLETE => 'flow4step/flow_c_4.png',
					  PRG_REJECT => 'flow4step/flow_r_4.png'),
			VO_GS_GVG_3 =>
				array(
					  PRG_CHK_DOC => 'flow4step/flow_1_4.png',
					  PRG_CONSIDER => 'flow4step/flow_2_4.png',
					  PRG_WAIT_PAY => 'flow4step/flow_3_4.png',
					  PRG_ACCEPT_PAY => 'flow4step/flow_3_4.png',
					  PRG_NEXT_EXPIRE => 'flow4step/flow_4_4.png',
					  PRG_COMPLETE => 'flow4step/flow_c_4.png',
					  PRG_REJECT => 'flow4step/flow_r_4.png'),
			VO_GS_GVG_12 =>
				array(
					  PRG_CHK_DOC => 'flow4step/flow_1_4.png',
					  PRG_CONSIDER => 'flow4step/flow_2_4.png',
					  PRG_WAIT_PAY => 'flow4step/flow_3_4.png',
					  PRG_ACCEPT_PAY => 'flow4step/flow_3_4.png',
					  PRG_PRINTING => 'flow4step/flow_4_4.png',
					  PRG_COMPLETE => 'flow4step/flow_c_4.png',
					  PRG_REJECT => 'flow4step/flow_r_4.png')
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
