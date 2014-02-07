<?php

class Request
{
	private $_data;

	public static function get_print_type($type)
	{
		$ctype = -1;
		switch (doc('type')) {
			case VO_GS_GVG_1:
				$ctype = VO_GS_GVG_2;
				break;
			case VO_GS_GVG_12:
				if( doc('request')->get_data('purposefirst') == 'import' )
					$ctype = VO_GS_GVG_14;
				else
					$ctype = VO_GS_GVG_13;
				break;
			case VO_1:
				$ctype = VO_2;
				break;
			case VO_3:
				$ctype = VO_4;
				break;
			case VO_5:
				$ctype = VO_6;
				break;
			case VO_7:
				$ctype = VO_8;
				break;
		}
		return $ctype;
	}

	public static function type_to_amount($type)
	{
		switch ($type) {
			case VO_GS_GVG_1:
				return array( '10,000' , 'หนึ่งหมื่นบาทถ้วน' );
			case VO_GS_GVG_3:
				return array( '20,000' , 'สองหมื่นบาทถ้วน' );
			case VO_GS_GVG_12:
				return array( '30,000' , 'สามหมื่นบาทถ้วน' );
			case VO_1:
				return array( '40,000' , 'สี่หมื่นบาทถ้วน' );
			case VO_3:
				return array( '50,000' , 'ห้าหมื่นบาทถ้วน' );
			case VO_5:
				return array( '60,000' , 'หกหมื่นบาทถ้วน' );
			case VO_7:
				return array( '70,000' , 'เจ็ดหมื่นบาทถ้วน' );
			default:
				return array( '1,000,000,000' , 'หนึ่งพันล้านบาทถ้วน' );
		}
	}

	public static function type_to_string($type)
	{
		switch ($type) {
			case VO_GS_GVG_1:
				return 'วอ./กษ./กวก.1';
			case VO_GS_GVG_3:
				return 'วอ./กษ./กวก.3';
			case VO_GS_GVG_12:
				return 'วอ./กษ./กวก.12';
			case VO_1:
				return 'วอ.1';
			case VO_3:
				return 'วอ.3';
			case VO_5:
				return 'วอ.5';
			case VO_7:
				return 'วอ.7';
			default:
				return 'unknow';
		}
	}

	public static function type_to_string2($type)
	{
		switch ($type) {
			case VO_GS_GVG_1:
				return 'ขอขึ้นทะเบียนวัตถุอันตราย';
			case VO_GS_GVG_3:
				return 'ขอต่ออายุใบสำคัญขึ้นทะเบียนวัตถุอันตราย';
			case VO_GS_GVG_12:
				return 'ขออนุญาตผลิต/นำเข้าวัตถุอันตราย';
			case VO_1:
				return 'ขออนุญาตผลิตวัตถุอันตราย';
			case VO_3:
				return 'ขออนุญาตนำเข้าวัตถุอันตราย';
			case VO_5:
				return 'ขออนุญาตส่งออกวัตถุอันตราย';
			case VO_7:
				return 'ขออนุญาตมีไว้ครอบครองซึ่งวัตถุอันตราย';
			default:
				return 'unknow';
		}
	}

	public static function progress_to_string($progress)
	{
		switch ($progress) {
			case PRG_CHK_DOC:
				return 'กำลังตรวจเอกสาร';
			case PRG_SURVEY:
				return 'กำลังทดสอบ/สำรวจ';
			case PRG_CONSIDER:
				return 'กำลังพิจารณา';
			case PRG_WAIT_PAY:
				return 'รอชำระค่าธรรมเนียม';
			case PRG_PRINTING:
				return 'กำลังออกเอกสาร';
			case PRG_REJECT:
				return 'ปฏิเสธ';
			case PRG_COMPLETE:
				return 'เสร็จสมบูรณ์';
			case PRG_ACCEPT_PAY:
				return 'รอบิล';
			case PRG_NEXT_EXPIRE:
				return 'รอผลการต่ออายุ';
		}
		return 'unknow progress ('.$progress.')';
	}

	public static function create_request($userid,$type,$jsondata,$certref = 0)
	{
		DB::get_db()->insert('request',array('userid','requesttype','jsondata','progress','certidref','date'),array($userid,$type,mysql_real_escape_string(json_encode($jsondata)),PRG_CHK_DOC,$certref,date('Y-m-d')));
		return Request::load( DB::get_db()->getLastInsertID() );
	}

	public static function load($id)
	{
		$row = ( DB::get_db()->select('request',null,"requestid='$id'") );
		if( count($row) == 0 )
			return null;
		$row = $row[0];
		return new Request( $row );
	}

	public static function get_requests_by_userid($userid)
	{
		$rows = DB::get_db()->select('request',null,"userid='$userid'");
		$ret = array();
		foreach ($rows as $value) {
			$ret[] = new Request($value);
		}
		return $ret;
	}

	public static function get_requests()
	{
		$rows = DB::get_db()->select('request');
		$ret = array();
		foreach ($rows as $value) {
			$ret[] = new Request($value);
		}
		return $ret;
	}

	public static function get_requests_by_progress($progress)
	{
		if( is_array($progress) == false )
		{
			$progress = array($progress);
		}
		$fillWhere = '';
		$isfirst = true;
		foreach ($progress as $value) {
			if($isfirst == false)
				$fillWhere .= ' or ';
			$isfirst = false;
			$fillWhere .= "progress='$value'";
		}
		$rows = DB::get_db()->select('request',null,$fillWhere);
		$ret = array();
		foreach ($rows as $value) {
			$ret[] = new Request($value);
		}
		return $ret;
	}

	public function get_day()
	{
		return date_format( date_create( $this->get('date') ) , 'd' );
	}
	
	public function get_month()
	{
		return date_format( date_create( $this->get('date') ) , 'm' );	
	}

	public function get_year()
	{
		return date_format( date_create( $this->get('date') ) , 'Y' );
	}

	public function get_img_uri()
	{
		$tmp = Config::get('progress_maping/'.$this->get('requesttype').'/'.$this->get('progress') );
		if( is_array($tmp) )
			return 'image/progress/unknow.jpg';
		return 'image/progress/'.Config::get('progress_maping/'.$this->get('requesttype').'/'.$this->get('progress'));
	}

	public function get($s)
	{
		return $this->_data[$s];
	}

	public function get_data($s)
	{
		$tmp = $this->_data['jsondata'];
		if(!isset($tmp[$s]))
			return "not have";
		else return $tmp[$s];
	}

	public function set($s,$v)
	{
		$this->_data[$s] = $v;
	}

	public function set_data($s,$v)
	{
		$tmp = $this->_data['jsondata'];
		$tmp[$s] = $v;
		$this->_data['jsondata'] = $tmp;
	}

	public function get_status()
	{
		return Request::progress_to_string( $this->get('progress') );
	}

	public function get_type()
	{
		return Request::type_to_string( $this->get('requesttype'));
	}

	public function save()
	{
		$this->_data['jsondata'] = json_encode($this->_data['jsondata']);
		DB::get_db()->update('request',$this->_data,"requestid='".$this->get('requestid')."'");
		$this->_data['jsondata'] = (array)json_decode($this->_data['jsondata']);
	}

	public function add_pic($type,$file)
	{
		return Picture::create($this->get('requestid'),$type,$file);
	}

	public function get_pics_by_type($type)
	{
		return Picture::get_pics_by_requestid_and_type($this->get('requestid'),$type);
	}

	public function reject()
	{
		$this->_data['progress'] = PRG_REJECT;
	}

	public function __construct($data)
	{
		$new_data = array();
		foreach ($data as $key => $value) {
			if( is_numeric($key) )
				continue;
			$new_data[$key] = $value;
		}
		$this->_data = $new_data;
		$this->_data['jsondata'] = (array)json_decode($this->_data['jsondata']);
	}

	public function progress($prog)
	{
		$this->set('progress',$prog);
	}

	public function redirect()
	{
		Redirect::to( 'request/'.( $this->get('requestid') ) );
	}

	public function get_certificate()
	{
		if( $this->get('certid') == 0 ) 
			return null;
		return Certificate::load( $this->get('certid') );
	}

	public function get_certificate_ref()
	{
		if( $this->get('certidref') == 0 ) 
			return null;
		return Certificate::load( $this->get('certidref') );
	}

	public function add_commend($userid,$msg)
	{
		return Commend::create($userid,$this->get('requestid'),$msg);
	}

	public function get_commend()
	{
		return Commend::get_commend_by_requestid( $this->get('requestid') );
	}

}


?>