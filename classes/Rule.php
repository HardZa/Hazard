<?php

class Rule
{

	public static function isStringMinimum( $value , $min )
	{
		return strlen( $value ) >= $min;
	}
	
	public static function isStringMaximum( $value , $max )
	{
		return strlen( $value ) <= $max;
	}
	
	public static function requireValue( $value , $need )
	{
		return !$need || $value !='';
	}

	public static function numericValue( $value , $need )
	{
		return !$need || is_numeric( $value );
	}

	public static function dateStringValue($value , $need )
	{
		if(!$need)
			return true;
		if(strlen($value)!=10)
			return false;
		if($value[2]!='-' || $value[5]!='-' )
			return false;
		$day = substr($value,0,2);
		$month = substr($value,3,2);	
		$year = substr($value,6,4);
		if(!is_numeric($day) || !is_numeric($month) || !is_numeric($year))	
			return false;
		return checkdate($month,$day,$year-543);
	}
	
	
	public static function errorMessage( $item , $method , $value , $params )
	{
		switch( $method )
		{
			case 'min':
				return "$item สั้นเกินไป";
			case 'max':
				return "$item ยาวเกินไป";
			case 'required':
				return "กรุณากรอก $item";
			case 'numeric':
				return "$item จะต้องเป็นตัวเลข";
			case 'date':
				return "$item จะต้องอยู่ในรูปแบบ DD-MM-YYYY";
		}
		return "";
	}

	public static function check( $item , $method , $value , $params )
	{
		if( !is_array( $params ) )
		{
			$params = array( $params );
		}
		$valid = false;
		switch( $method )
		{
			case 'min':
				$valid = Rule::isStringMinimum( $value , $params[0] );
				break;
			case 'max':
				$valid = Rule::isStringMaximum( $value , $params[0] );
				break;
			case 'required':
				$valid = Rule::requireValue( $value , $params[0] );
				break;
			case 'numeric':
				$valid = Rule::numericValue( $value , $params[0]);
				break;
			case 'date':
				$valid = Rule::dateStringValue($value , $params[0]);
				break;
		}
		if( !$valid )
		{
			return Rule::errorMessage( $item , $method , $value , $params );
		}
		return null;
	}
	
}

?>
