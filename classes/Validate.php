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
				$error = Rule::check( $item , $rule , $value , $rule_value );
				if( $error != null )
				{
					$this->addError( $error );
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