<?php

class Certificate
{
	private $certid;
	public $certno;
	public $userid;
	public $expdate;
	public $certtype;
	public $jsondata;

	public static function certtype_to_string($certtype)
	{
		switch ($certtype) {
			case 1:
				return 'วอ.2';
			case 2:
				return 'วอ.4';
			case 3:
				return 'วอ.6';
			case 4:
				return 'วอ.8';
			case 5:
				return 'วอ./กษ./กวก.2';
			case 6:
				return 'วอ./กษ./กวก.13';
			case 7:
				return 'วอ./กษ./กวก.14';
		}
		return 'กระดาษเน่าๆ';
	}

	public function set_certid($certid)
	{
		$this->certid = $certid;
	}

	public function get_exp_day()
	{
		return (string)(int)date_format(date_create($this->expdate), 'd');
	}

	public function get_exp_month()
	{
		return (string)(int)date_format(date_create($this->expdate), 'm');
	}
	public function get_exp_year()
	{
		return (string)(int)date_format(date_create($this->expdate), 'Y');
	}

	public static function create($userid,$certtype,$jsondata)
	{
		$certno = Certificate::gen_exp_certno($certtype);
		$expdate = Certificate::gen_exp_date();
		DB::get_db()->insert('certificate',array('certno','userid','expdate','certtype','jsondata'),array($certno,$userid,$expdate,$certtype,json_encode($jsondata)));
		return Certificate::load( DB::get_db()->getLastInsertID() );
	}

	public function set_exp_date($day,$month,$year) // DD-MM-YYYY
	{
		$this->expdate = date_format(date_create($year.'-'.$month.'-'.$day), 'Y-m-d');
		DB::get_db()->update('certificate',array('expdate'=>$this->expdate),'certid='.$this->certid);
	}

	public static function load($id)
	{
		$certdb = DB::get_db()->select('certificate',null,'certid='.$id);
		if(count($certdb)==0)
		{
			throw new Exception("Certificate not found");
		}

		$cert = new Certificate();
		$cert->userid = $certdb[0]['userid'];
		$cert->expdate = $certdb[0]['expdate'];
		$cert->certtype = $certdb[0]['certtype'];
		$cert->jsondata = $certdb[0]['jsondata'];
		$cert->certno = $certdb[0]['certno'];
		$cert->set_certid( $certdb[0]['certid']);
		return $cert;
	}

	public static function get_user_certs($userid)
	{
		$allcert=[];
		$allid = DB::get_db()->select('certificate',array('certid'),'userid='.$userid);
		for($i =0 ; $i<count($allid);$i++)
		{
			$allcert[] = Certificate::load($allid[$i][0]);
		}
		return $allcert;
	}

	private static function gen_exp_date()
	{
		$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
		$nextyeartext = date('Y-m-d',$nextyear);
		return $nextyeartext;
	}

	private static function gen_exp_certno($certtype)
	{
		$numbers = DB::get_db()->select('certificate_running_no',array('no'),'certtype='.$certtype);
		if(count($numbers)==0)
		{
			throw new Exception("Certtype not found");
		}
		$number = $numbers[0][0];
		$number = $number+1;
		DB::get_db()->update('certificate_running_no',array('no'=>$number),'certtype='.$certtype);

		$number_string = (string)$number;
		while(strlen($number_string)<4)
		{
			$number_string = '0'.$number_string;
		}
		return Certificate::certtype_to_string($certtype).' '.$number_string.'/'.(date('Y')+543);
	}

}

?>