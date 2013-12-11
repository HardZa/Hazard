<?php

class Permission
{
	public static function requestSubmissionAllowed()
	{
		if(!User::is_session_exist())return false;
		return false;
	} 
	public static function userDataEditAllowed()
	{
		if(!User::is_session_exist())return false;
		return false;
	} 
	public static function userAddAllowed()
	{
		if(!User::is_session_exist())return false;
		return  User::get_user()->is_group('registrar');
	} 
	public static function printingAllowed()
	{	
		if(!User::is_session_exist())return false;
		return false;
	} 
}


?>