<?php

class Request
{

	private $_id , $_type , $_userid , $_information , $_state;

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

	private function __construct($id,$type,$userid,$information,$state)
	{
		$this->_id = $id;
		$this->_type = $type;
		$this->_userid = $userid;
		$this->_information = $information;
		$this->_state = $state;
	}

	public function can_access($user)
	{
		if( RequestInfo::get( $this->_type ) == null )
		{
			return false;
		}
		return true;
	}

	public function get_idx_current($user)
	{
		$nodes = RequestInfo::get($this->_type."/node");
		for($i=0;$i<count($nodes);$i++)
		{
			$node = $nodes[$i];
			if( $user->is_group( $node['user'] ) && !getBit( $this->_state ,$i ) )
				return $i;
		}
		return -1;
	}

	public function get_file($nodeid)
	{
		$file = RequestInfo::get($this->_type.'/node/'.$nodeid.'/file');
		return "node/".$file;
	}

	public static function create($userid,$type)
	{
		DB::get_db()->insert( 'request' , array('type','userid','information','state') , array( $type , $userid , '' , 0 ) );
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
		return new Request($row['id'],$row['type'],$row['userid'],$row['information'],$row['state']);
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

}

?>