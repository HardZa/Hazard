<?php

class Commend
{

	public $id;
	public $message;
	public $userid;
	public $requestid;

	public function __construct($data)
	{
		$this->id = $data['id'];
		$this->message = $data['message'];
		$this->userid = $data['userid'];
		$this->requestid = $data['requestid'];
	}

	public static function get_commend_by_requestid($requestid)
	{
		$rows = DB::get_db()->select('commend',null,"requestid='$requestid'");
		$ret = array();
		foreach ($rows as $value) {
			$ret[] = new Commend( $value );
		}
		return $ret;
	}

	public static function load($id)
	{
		$row = ( DB::get_db()->select('commend',null,"id='$id'") );
		if( count($row) == 0 )
			return null;
		$row = $row[0];
		return new Commend( $row );
	}

	public static function create($userid,$requestid,$message)
	{
		DB::get_db()->insert('commend',array('userid','requestid','message'),array($userid,$requestid,$message));
		return Commend::load( DB::get_db()->getLastInsertID() );
	}
}

?>