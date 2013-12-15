<?php

class Permission
{
	//login
	public static function canShowList()
	{
		if(!User::is_session_exist())return false;
		return !User::get_user()->is_group('registrar');
	}
	//registrar
	public static function userAddAllowed()
	{
		if(!User::is_session_exist())return false;
		return  User::get_user()->is_group('registrar');
	} 
	public static function userListAllowed()
	{
		if(!User::is_session_exist())return false;
		return  User::get_user()->is_group('registrar');
	} 
	public static function userEditAllowed()
	{
		if(!User::is_session_exist())return false;
		return  User::get_user()->is_group('registrar');
	} 
	public static function registerSummary()
	{
		if(!User::is_session_exist())return false;
		return  User::get_user()->is_group('registrar');
	} 
	//client
	public static function requestSubmissionAllowed()
	{
		if(!User::is_session_exist())return false;
		return User::get_user()->is_group('client');
	}
	public static function requestInfoAllowed($request)
	{
		if(!User::is_session_exist())return false;
		switch(User::get_user()->get_groupname())
		{
			case 'registrar': return false;
			 	  break;
			case 'client': if(User::get_user()->get('userid')==$request->get('userid'))
							return true;
							else return false;
			 	  break;
			case 'hazcontrol': return true;
			 	  break;
			case 'plantprotection': if($request->get('progress')==PRG_SURVEY)
									return true;
									else return false;
			 	  break;
			case 'agriproduction': if($request->get('progress')==PRG_SURVEY)
									return true;
									else return false;
			 	  break;
			case 'cashier': if($request->get('progress')==PRG_ACCEPT_PAY)
							return true;
							else return false;
			 	  break;
		}
	}
	
	public static function userDataEditAllowed()
	{
		return User::is_session_exist();
	}
	
	/*public static function printingAllowed()
	{	
		if(!User::is_session_exist())return false;
		return false;
	}*/ 
}


?>