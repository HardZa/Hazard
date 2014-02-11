<?php

class Picture
{

	private $_requestid,$_id;
	public $type,$file;

	public static function type_to_string($type)
	{
		switch ($type) {
			case PIC_DOC_ATTACH:
				return 'เอกสารแนบ';
			case PIC_TEST_ATTACH:
				return 'ผลการทดสอบ/สำรวจ';
			case PIC_BILL:
				return 'ใบจ่ายเงิน';
		}
		return 'unknow';
	}

	public static function create($reqid,$type,$file)
	{
		DB::get_db()->insert('picture',array('requestid','pictype','picname'),array($reqid,$type,$file));
		return Picture::load( DB::get_db()->getLastInsertID() );
	}

	public static function load($id)
	{
		$rows = DB::get_db()->select('picture',null,"picid='$id'");
		return Picture::parse_db( $rows[0] );
	}

	public static function parse_db($row)
	{
		return new Picture( $row['picid'] , $row['requestid'] , $row['pictype'] , $row['picname'] );
	}

	public function delete()
	{
		DB::get_db()->delete('picture',"picid='".$this->_id."'");
	}

	public function __construct($picid,$requestid,$type,$file)
	{
		$this->_id = $picid;
		$this->type = $type;
		$this->file = $file;
		$this->_requestid = $requestid;
	}


	public static function get_pics_by_requestid_and_type($requestid,$type)
	{
		$rows = DB::get_db()->select('picture',null,"requestid='$requestid' and pictype='$type'");
		$ret = array();
		foreach ($rows as $value) {
			$ret[] = Picture::parse_db($value);
		}
		return $ret;
	}

	public function get_uri()
	{
		return 'upload/'.$this->file;
	}

}

?>