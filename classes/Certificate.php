<?php

class Certificate
{
	public static function create($userid,$expdate,$certtype,$jsondata)
	{
		DB::get_db()->insert('certificate',array('userid','expdate','certtype','jsondata'),array($userid,$expdate,$certtype,json_encode($jsondata)));
	}

	public static function load($id)
	{
		
	}
}

?>