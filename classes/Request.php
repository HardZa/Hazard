<?php

class Request
{
	private static $fields = array('id','type','userid','information','state','status');
	private $_id , $_type , $_userid , $_information , $_state;
	private $_db;

	public function getStatus()
	{
		return $this->_db['status'];
	}

	public function setStatus($s)
	{
		$this->_db['status'] = $s;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function getType()
	{
		return $this->_type;
	}

	public function getState()
	{
		return $this->_state;
	}

	public function getInfo()
	{
		return $this->_information;
	}

	public function setState($s)
	{
		$this->_db['state'] = $s;
		$this->_state = $s;
	}

	public function setInfo($info)
	{
		$this->_information = $info;
		$this->_db["information"] = json_encode($info);
	}

	public function save()
	{
		DB::get_db()->update('request',$this->_db,"id='" . $this->_id . "'");
	}

	public function can_access($user)
	{
		return $this->get_node($user) != -1 && $this->getStatus() == 'processing';
	}

	public function approve($node,$info = array())
	{
		$tmp = $this->getInfo();
		foreach ($info as $key => $value) {
			$tmp[$key] = $value;
		}
		$this->setInfo($tmp);
		$state = $this->getState();
		$state = $state | ( 1 << $node );
		$this->setState($state);
		$when_complete = RequestInfo::get($this->_type.'/when_complete');
		if( ($state&$when_complete) == $when_complete )
			$this->setStatus('complete');
		$this->save();
	}

	public function reject($node)
	{
		$this->setStatus('reject');
		$this->save();
	}

	private function __construct($id,$type,$userid,$information,$state,$db)
	{
		$this->_id = $id;
		$this->_type = $type;
		$this->_userid = $userid;
		$this->_information = (array)json_decode($information);
		$this->_state = $state;
		$this->_db = $db;
	}

	public function get_node($user)
	{
		$nodes = RequestInfo::get($this->_type."/node");
		for($i=0;$i<count($nodes);$i++)
		{
			$node = $nodes[$i];
			if( $user->is_group( $node['user'] ) && !getBit( $this->_state ,$i ) && ( $node['require'] & $this->_state ) == $node['require'] )
				return $i;
		}
		return -1;
	}

	public function get_file($nodeid)
	{
		$file = RequestInfo::get($this->_type.'/node/'.$nodeid.'/file');
		return "request/".$file;
	}

	public function get_status()
	{
		if( $this->getStatus() != 'processing' )
			return $this->getStatus();
		return RequestInfo::get($this->_type.'/status/'.$this->getState());
	}

	public static function create($userid,$type)
	{
		DB::get_db()->insert( 'request' , array('type','userid','information','state','status') , array( $type , $userid , '' , 0 ,'processing' ) );
		return Request::load( DB::get_db()->getLastInsertID() );
	}

	public static function load($id)
	{
		$rows = DB::get_db()->select('request',null,"id='$id'",1);
		if( count( $rows ) != 1 )
		{
			return null;
		}
		return Request::parse_from_db( $rows[0] );
	}

	public static function parse_from_db($row)
	{
		$db = array();
		for( $i = 0 ; $i < count( Request::$fields ) ; $i++ )
		{
			$key = Request::$fields[$i];
			$db[$key] = $row[$key];
		}
		return new Request($row['id'],$row['type'],$row['userid'],$row['information'],$row['state'],$db);
	}

	public static function get_requests_by_userid($userid)
	{
		$res = array();
		$rows = DB::get_db()->select('request',null,"userid='$userid'");
		for($i=0;$i < count($rows) ; $i++)
		{
			$res[] = Request::parse_from_db($rows[$i]);
		}
		return $res;
	}

	public static function get_requests()
	{
		$res = array();
		$rows = DB::get_db()->select('request');
		for($i=0;$i < count($rows) ; $i++)
		{
			$res[] = Request::parse_from_db($rows[$i]);
		}
		return $res;
	}

}

?>