<?php

/**
* 
*/
class Mailer extends PHPMailer
{
	
	function __construct($exceptions = null)
	{	
		parent::__construct($exceptions);
	}
}