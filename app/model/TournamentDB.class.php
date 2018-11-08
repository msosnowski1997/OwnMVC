<?php 

class TournamentDB extends DB
{
	static public function checkNewURL($url)
	{
		if(!Validate::length($url,3,20)) return array ("ERROR" => "Długość URL musi mieć od 3 do 20 znaków");
		if(!Validate::chars($url)) return array ("ERROR" => "W URL mogą być tylko cyfry i litery");

		// sprawdzanie czy zajęty

		return TRUE;
	}

	static public function createNewTournament($data)
	{
		
	}


}