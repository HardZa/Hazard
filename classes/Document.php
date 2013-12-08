<?php
class Document
{
	private $_data;
	private $_docId;
	private $_docType;

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

	public function getDocType()
	{
		return $this->_docType;
	}

	public function __construct($docId,$docType)
	{
		$this->_docId = $docId;
		$this->_docType = $docType;
		$this->_data = $this->load($docId,$docType);
	}

	private function load($docId,$docType)
	{
		$query = DB::get_db()->select("documents",array("docjson"),"docid=".$docId." and doctype=".$docType,1);
		if(count($query)==0)
		{
			throw new Exception("can't load Document");
		}
		return (array)json_decode($query[0][0]);
	}

	public function save()
	{
		$jsonData = json_encode($this->_data);
		DB::get_db()->update("documents",array('docjson'=>$jsonData),'docid='.$this->_docId,1);
	}

	public function getFormURL()
	{
		$query = DB::get_db()->select("document_type",array("formpage"),"doctype=".$this->_docType,1);
		if(count($query)==0)
		{
			return '';
		}
		return $query[0][0];
	}

	public static function create($docType)
	{
		DB::get_db()->insert("documents",array('docType','docjson'),array($docType,''));
		return new Document(DB::get_db()->getLastInsertID(),$docType);
	}

	private static function isHaveInDB($docId,$docType)
	{
		if(count(DB::get_db()->select("documents",null,'docid='.$docId." and doctype=".$docType)))
		{
			return true;
		}
		return false;
	}
}

?>