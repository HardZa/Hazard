<?php

class User{
	private static $user_fields = array('userid','username','userrealname','userallowed','userpasssha1');
	private $user_db;
	public static $user_field_allow_edit = array('userrealname');
	private static $registype = array('registrar'=>'เจ้าหน้าที่ทะเบียน','client'=>'เอกชน','hazcontrol'=>'เจ้าหน้าที่ควบคุมวัตถุอันตราย','plantprotection'=>'เจ้าหน้าที่สำนักอารักขาพืช','agriproduction'=>'เจ้าหน้าที่สำนักปัจจัยการผลิต','cashier'=>'เจ้าหน้าที่การเงิน'); 

	public static function group_to_string($group)
	{
		if(isset(User::$registype[$group]))return User::$registype[$group];
		return 'ผู้ใช้นิรนาม';
	}

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

		return 'others';
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
		,$useraddrhouse,$useraddrvillage,$userdrive,$useraddrroad,$usersubdistrict,$userdistrict
		,$userprovince,$userpostalcode,$userphone,$userfax,$useremail
	)
	{
		$passwordSha1 = sha1($password);
		if(!DB::get_db()->insert('users'
			,array('username','userpasssha1','userallowed','userrealname')
			,array($username,$passwordSha1,1,$name)))
		{
			throw new Exception("There was a problem creating new user");
		}

		$newbirthdate = DMY_to_YMD($userbirthdate);

		if(!DB::get_db()->insert('usergroup_client',
			array('userid','userbirthdate','usernationality','usertaxid','useraddrhouse'
				,'useraddrvillage','useraddrdrive','useraddrroad','useraddrsubdistrict','useraddrdistrict'
				,'useraddrprovince','userpostalcode','userphone','userfax','useremail'),
			array(DB::get_db()->getLastInsertID(),$newbirthdate,$usernationality,$usertaxid,$useraddrhouse
				,$useraddrvillage,$userdrive,$useraddrroad,$usersubdistrict,$userdistrict,$userprovince
				,$userpostalcode,$userphone,$userfax,$useremail)))
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


	public function get_requests()
	{
		if( $this->is_group('client') )
		{
			return Request::get_requests_by_userid($this->get('userid'));
		}
		else
		{

		}
	}


	public static function get_group_by_id($id)
	{
		$userid = $id;
		$table = 'usergroup_'.'agriproduction';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		if( count($rows) == 1 )
		{
			return 'agriproduction';
		}
		
		$table = 'usergroup_'.'cashier';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		if( count($rows) == 1 )
		{
			return 'cashier';
		}

		$table = 'usergroup_'.'client';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		if( count($rows) == 1 )
		{
			return 'client';
		}

		$table = 'usergroup_'.'hazcontrol';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		if( count($rows) == 1 )
		{
			return 'hazcontrol';
		}

		$table = 'usergroup_'.'plantprotection';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		if( count($rows) == 1 )
		{
			return 'plantprotection';
		}

		$table = 'usergroup_'.'registrar';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		if( count($rows) == 1 )
		{
			return 'registrar';
		}

		return 'others';


	}

	public static function get_client_by_id($id)
	{
		$userid = $id;
		$table = 'users';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		$user_db = $rows[0];

		$table = 'usergroup_client';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		$user_db_client = $rows[0];

		$ret = array_merge($user_db, $user_db_client);
		$diff = date_create( date('Y-m-d') )->diff( date_create( $ret['userbirthdate'] ) );
		$ret['userage'] = $diff->format('%y');
		return $ret;
	}

	public static function get_user_by_id($id)
	{
		$userid = $id;
		$table = 'users';
		$rows =DB::get_db()->select($table,null,'userid='.$userid,1);
		$user_db = $rows[0];

		return $user_db;
	}


}

?>