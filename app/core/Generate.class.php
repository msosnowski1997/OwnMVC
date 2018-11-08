<?php // SILNIK MVC - Mariusz Sosnowski
Class generate
{
	public static function randomCode($length = 8, $level = 3)
	{
		$validchars[1] = "0123456789";
		$validchars[2] = "abcdfghjkmnpqrstvwxyz";
		$validchars[3] = "0123456789abcdfghjkmnpqrstvwxyz";
		$validchars[4] = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$validchars[5] = "0123456789_!@#$%&*()-=+/abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#$%&*()-=+/";

		$code  = "";
		for($i = 0; $i < $length; $i++)
		{
			$code .= $validchars[$level][rand(0,strlen($validchars[$level])-1)];
		}
		return $code;
	}

	public static function unixDateFromString($string, $format = "dd/mm/yyyy")
	{
		// CheckDateFormat and returns unix timestamp.
	}

	public static function themeColorsArray($intense = true)
	{
		$colors = "red,pink,purple,deep-purple,indigo,blue,light-blue,cyan,teal,green,light-green,lime,yellow,amber,orange,deep-orange,brown,grey,blue-grey";
		$colors = explode(',', $colors);
		$intensivy = array (300,400,500,600,700,800);
		if($intense)
		{
			for ($i = 0; $i < count($colors); $i++) {
				for ($j = 0; $j < count($intensivy); $j++) {
					$colors[$i][$j] = $intensivy[$j];
				}
			}
		}
		return $colors;
	}
}