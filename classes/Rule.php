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

	
	
	public static function errorMessage( $item , $method , $value , $params )
	{
		switch( $method )
		{
			case 'min':
				return "$item so short !!";
			case 'max':
				return "$item so long !!";
			case 'required':
				return "we need $item !!";
			case 'numeric':
				return "$item should be number!!";
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
		}
		if( !$valid )
		{
			return Rule::errorMessage( $item , $method , $value , $params );
		}
		return null;
	}
	
}

?>