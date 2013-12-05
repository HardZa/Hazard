<?php

class User{

	private static $user_fields = array('userid','username','userrealname','userallowed');
	private $user_db;
	public static $user_field_allow_edit = array('userrealname');

	public function __construct($user_db)
	{
		$this->user_db = $user_db;
	}
	
	public function create($username,$password,$realname)
	{
		$passwordSha1 = sha1($password);
		if(!DB::get_db()->insert('users',array('username','userpasssha1','userallowed','userrealname'),array($username,$passwordSha1,1,$realname)))
		{
			throw new Exception("There was a problem creating new user");
		}
	}
	
	public function get($key)
	{
		return $this->user_db[$key];
	}
	
	public function set($key,$value)
	{
		$this->user_db[$key] = $value;
	}
	
	public function save()
	{
		DB::get_db()->update('users',$this->user_db,"username='" . $this->user_db['username'] . "'");
	}
	
	public static function auth($username,$password)
	{
		$passwordSha1 = sha1($password);
		$rows = DB::get_db()->select('users',null,"username='$username'",1);
		if( count($rows) != 1 )
		{
			throw new Exception("Username not found");
		}
		$user_db = $rows[0];
		if( $user_db['userpasssha1'] != $passwordSha1 )
		{
			throw new Exception("Password are incorrect");
		}
		
		for( $i = 0 ; $i < count( User::$user_fields ) ; $i++ )
		{
			$key = User::$user_fields[$i];
			Session::put( $key , $user_db[ $key ] );
		}
		
		return new User( $user_db );
	}
	
	public static function get_user()
	{
		$user_db = array();
		for( $i = 0 ; $i < count( User::$user_fields ) ; $i++ )
		{
			$key = User::$user_fields[$i];
			if( Session::exists( $key ) )
			{
				$user_db[$key] = Session::get( $key );
			}
			else
			{
				return null;
			}
		}
		return new User( $user_db );
	}
	
	public static function clear_user()
	{
		for( $i = 0 ; $i < count( User::$user_fields ) ; $i++ )
		{
			$key = User::$user_fields[$i];
			Session::delete( $key );
		}
	}
	
	public function is_group($group)
	{
		$userid = $this->user_db['userid'];
		$table = 'usergroup_'.$group;
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		if( count($rows) != 1 )
		{
			return false;
		}
		return true;
	}
	
}

?>