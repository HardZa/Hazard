<?php

class User{
	private static $all_group_name = array('agriproduction','cashier','client','hazcontrol','plantprotection','registrar');
	private static $user_fields = array('userid','username','userrealname','userallowed','userpasssha1');
	private $user_db;
	public static $user_field_allow_edit = array('userrealname');

	public function __construct($user_db)
	{
		$this->user_db = $user_db;
	}

	public function get($key)
	{
		return $this->user_db[$key];
	}

	public function get_groupname()
	{
		if($this->is_group('agriproduction'))
			return 'agriproduction';
		else if($this->is_group('cashier'))
			return 'cashier';
		else if($this->is_group('client'))
			return 'client';
		else if($this->is_group('hazcontrol'))
			return 'hazcontrol';
		else if($this->is_group('plantprotection'))
			return 'plantprotection';
		else if($this->is_group('registrar'))
			return 'registrar';
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

	public static function is_session_exist()
	{
		return (User::get_user()!=null);
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

	public static function create_user($type,$username,$password,$name)
	{
		$groupname = 'usergroup_'.$type;
		$passwordSha1 = sha1($password);
		if(!DB::get_db()->insert('users',array('username','userpasssha1','userallowed','userrealname'),array($username,$passwordSha1,1,$name)))
		{
			throw new Exception("There was a problem creating new user");
		}
		if(!DB::get_db()->insert( $groupname , array('userid') , array(DB::get_db()->getLastInsertID() ) ) )
		{
			throw new Exception("There was a problem add new user to group ".$groupname);
		}
	}

	public static function create_client(
		$username,$password,$name,$userbirthdate,$usernationality,$usertaxid
		,$useraddrhouse,$useraddrvillage,$userdrive,$useraddrroad,$usersubdistrict
		,$userprovince,$userpostalcode,$userphone,$userfax
	)
	{
		$passwordSha1 = sha1($password);
		if(!DB::get_db()->insert('users'
			,array('username','userpasssha1','userallowed','userrealname')
			,array($username,$passwordSha1,1,$name)))
		{
			throw new Exception("There was a problem creating new user");
		}

		$newbirthdate = substr($userbirthdate,6,4).'-'.substr($userbirthdate,3,2).'-'.substr($userbirthdate,0,2);

		if(!DB::get_db()->insert('usergroup_client',
			array('userid','userbirthdate','usernationality','usertaxid','useraddrhouse'
				,'useraddrvillage','useraddrdrive','useraddrroad','useraddrsubdistrict'
				,'useraddrprovince','userpostalcode','userphone','userfax'),
			array(DB::get_db()->getLastInsertID(),$newbirthdate,$usernationality,$usertaxid,$useraddrhouse
				,$useraddrvillage,$userdrive,$useraddrroad,$usersubdistrict,$userprovince
				,$userpostalcode,$userphone,$userfax)))
		{
			throw new Exception("There was a problem add new user to group usergroup_client");
		}
	
	}

	public static function get_rand_password($length = 10) 
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
}

?>