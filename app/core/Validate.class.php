<?php

/**
* 
*/
class Validate
{
	public static function length(string $string, int $minimum, int $maximum = null)
	{
		if(strlen($string)<$minimum) return FALSE;
		if(!is_null($maximum))
		{
			if(strlen($string)>$maximum) return FALSE;
		}
		return TRUE;
	}

	public static function same($var1, $var2)
	{
		if($var1 == $var2) return TRUE;
		return FALSE;
	}

	public static function isEmail(string $mail)
	{
		if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
		{
			return TRUE;
		}
		return FALSE;
	}

	public static function notEmpty($params)
	{
		if(is_array($params))
		{
			foreach ($params as $param) {
				if($param == '') return FALSE;
			}
		}
		else
		{
			if($params == '') return FALSE;
		}
		return TRUE;
	}

	public static function chars($string, $typ = "numbers&letters")
	{
		switch ($typ) {
			case 'numbers&letters':
				$pattern = "#^[A-Za-z0-9]+$#";
				break;
			case 'password':
				$pattern = "#^[0-9A-Za-z@\#\-_$%^&+=&!]+$#";
				break;
			case 'letters':
				$pattern = "#^[A-Za-z]+$#";
				break;
			case 'polishletters':
				$pattern = "#^[A-Za-zęóąłżźćńśĘÓĄŁŻŹĆŃŚ]+$#";
				break;
			case 'numbers':
				$pattern = "#^[0-9]+$#";
				break;
			default:
				$pattern = "#fmf38ewfj4j3f9843j#";
				break;
		}

		if(!preg_match($pattern, $string)) return FALSE;
		return TRUE;
	}

	public static function date($string)
	{
		$arr = explode("/", $string);
		if(count($arr) != 3) return FALSE;
		if(!self::length($arr[0],4,4)) return FALSE;
		if(!self::length($arr[1],2,2)) return FALSE;
		if(!self::length($arr[2],2,2)) return FALSE;
		if(!self::chars($arr[0],'numbers')) return FALSE;
		if(!self::chars($arr[1],'numbers')) return FALSE;
		if(!self::chars($arr[2],'numbers')) return FALSE;
		return true;
	}

	
}