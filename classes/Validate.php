<?php

class Validate
{
	private $_passed = false,$_errors =array();
	
	public function check($source,$items=array())
	{
		foreach($items as $item=>$rules)
		{
			foreach($rules as $rule=> $rule_value)
			{
				$value = trim($source[$item]);
				//echo $item." ".strlen($);
				if($rule === 'required' && empty($value))
				{
					$this->addError($item." is required");
				}else {
				}
			}
		}
		
		if(empty($this->_errors))
		{
			$this->_passed = true;
		}

	}
	
	private function addError($error)
	{
		$this->_errors[] = $error;
	}
	
	public function errors()
	{
		return $this->_errors;
	}
	
	public function passed()
	{
		return $this->_passed;
	}
}

?>