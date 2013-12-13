<?php

class Request
{
	private $_data;

	public static function type_to_string($type)
	{
		switch ($type) {
			case VO_GS_GVG_1:
				return 'วอ./กส./กวก.';
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
		}
		return 'unknow progress ('.$progress.')';
	}

	public static function create_request($userid,$type,$jsondata)
	{
		DB::get_db()->insert('request',array('userid','requesttype','jsondata','progress'),array($userid,$type,json_encode($jsondata),0));
		return Request::load( DB::get_db()->getLastInsertID() );
	}

	public static function load($id)
	{
		$row = ( DB::get_db()->select('request',null,"requestid='$id'") );
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
		return $tmp[$s];
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
		Redirect::to( 'request_info.php?id='.( $this->get('requestid') ) );
	}

}


?>