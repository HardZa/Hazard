<?php
class Document
{
	private $_data;
	private $_docId;

	public function getData()
	{
		return $this->_data;
	}

	public function setData($data)
	{
		$this->_data = $data;
	}

	public function getDocID()
	{
		return $this->_docId;
	}

	public function __construct($docId)
	{
		$this->_docId = $docId;
		$this->_data = $this->load($docId);
	}

	private function load($docId)
	{
		$query = DB::get_db()->select("documents",array("docjson"),"docid=".$docId,1);
		if(count($query)==0)
			return "";
		return (array)json_decode($query[0][0]);
	}

	public function save()
	{
		$jsonData = json_encode($this->_data);
		DB::get_db()->update("documents",array('docjson'=>$jsonData),'docid='.$this->_docId,1);
	}

	public static function create()
	{
		DB::get_db()->insert("documents",array('docjson'),array(''));
		return new Document(DB::get_db()->getLastInsertID());
	}

	private static function isHaveInDB($docId)
	{
		if(count(DB::get_db()->select("documents",null,'docid='.$docId)))
		{
			return true;
		}
		return false;
	}
}

?>