<?php

class Log
{

	public static $users_range = null;

	public static function hit()
	{
		$td = get_date();
		$rows = DB::get_db()->select('log',null,"logdate='$td'",1);
		if( count($rows) == 0 )
		{
			DB::get_db()->insert('log',array('logdate','time'),array($td,1));
		}
		else
		{
			DB::get_db()->update('log',array('time'=>($rows[0]['time']+1)),"logdate='$td'");
		}
	}

	public static function get($shift = 0)
	{
		$td = get_date($shift);
		$rows = DB::get_db()->select('log',null,"logdate='$td'",1);
		if( count($rows) == 0 )
		{
			return 0;
		}
		return $rows[0]['time'];
	}

	public static function get_max()
	{
		$ans = DB::get_db()->query("select max(time) as max from log");
		$ans = mysql_fetch_array($ans);
		return $ans["max"];
	}

	public static function get_min()
	{
		$ans = DB::get_db()->query("select min(time) as min from log");
		$ans = mysql_fetch_array($ans);
		return $ans["min"];
	}

	public static function count_request($type,$progress=PRG_WORKING)
	{
		if($progress == PRG_WORKING)
		{
			$ans = DB::get_db()->query("select count(*) as count from request where requesttype='$type' and progress!='".PRG_REJECT."' and progress!='".PRG_COMPLETE."'");
		}
		else
		{
			$ans = DB::get_db()->query("select count(*) as count from request where requesttype='$type' and progress='$progress'");
		}
		$ans = mysql_fetch_array($ans);
		return $ans["count"];
	}

	public static function get_users_age()
	{
		$rows = DB::get_db()->select('users',null);
		$users = array();
		for($i=0;$i<count($rows);$i++)
		{
			$id = $rows[$i]['userid'];
			$user = User::load( $id );
			if($user->is_group('client'))
			{
				$v = User::get_client_by_id($id);
				$users[] = $v['userage'];
			}
		}
		return $users;
	}

	public static function get_user_range_age($min,$max)
	{
		if( Log::$users_range == null )
		{
			Log::$users_range = Log::get_users_age();
		}
		$ret = 0;
		for($i=0;$i<count(Log::$users_range);$i++)
		{
			$age = Log::$users_range[$i];
			if( $age >= $min && $age <= $max )
				$ret++;
		}
		return $ret;
	}

}

?>