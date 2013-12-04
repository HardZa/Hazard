<?php

class User{
	public function __construct($user=null)
	{
	}
	
	public function create($username,$password,$realname)
	{
		$passwordSha1 = sha1($password);
		if(!DB::get_db()->insert('users',array('username','userpasssha1','userallowed','userrealname'),array($username,$passwordSha1,1,$realname)))
		{
			throw new Exception("There was a problem creating new user");
		}
	}
}

?>