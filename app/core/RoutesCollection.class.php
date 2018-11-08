<?php

class RoutesCollection
{
	
	private static $cachefile = CACHE_PATH."system/route.tmp";

	private $collection = array();
	
	public function __construct()
	{
		if($this->checkCollection())
		{
			$this->collection = cache::fileRead("routing","collection");
		}
		else
		{
			$this->createCollection();

			cache::fileSave("routing","collection",$this->collection);
		}
	}

	private function createCollection()
	{
		////////////////////=> Strona Główna <=////////////////////
		$this->addItem(new Route("/", "main", "run", "GET"));

		////////////////////=> Aktualności <=////////////////////

		$this->addItem(new Route("/aktualnosci", "news", "showGlobalNews", "GET"));

		////////////////////=> Ścieżki logowania i rejestracji <=////////////////////
		$this->addItem(new Route("/logowanie", "login", "run", "GET"));
		$this->addItem(new Route("/logowanie", "login", "check", "POST"));
		$this->addItem(new Route("/wyloguj", "login", "logout", "GET"));
		$this->addItem(new Route("/rejestracja", "register", "run", "GET"));
		$this->addItem(new Route("/rejestracja", "register", "check", "POST"));
		$this->addItem(new Route("/rejestracja/aktywuj", "register", "activate", "GET"));
		$this->addItem(new Route("/rejestracja/aktywuj", "register", "activateTrigger", "POST"));
		$this->addItem(new Route("/rejestracja/aktywuj/{@token}", "register", "activateUser"));

		////////////////////=> Ścieżki profilu <=////////////////////
		$this->addItem(new Route("/profil/edytuj", "profile", "showEditProfile", "GET"));
		$this->addItem(new Route("/profil/edytuj", "profile", "updateProfile", "POST"));
		$this->addItem(new Route("/profil/{@identify}", "profile", "showProfile", "GET"));

		////////////////////=> Ścieżki panelu administratora <=////////////////////
		$this->addItem(new Route("/admin", "admin", "showHome", "GET"));
		$this->addItem(new Route("/admin/wyglad", "admin", "showThemeSettings", "GET"));
		$this->addItem(new Route("/admin/wyglad", "admin", "setThemeSettings", "POST"));
		$this->addItem(new Route("/admin/uzytkownicy", "admin", "showUsersPage", "GET"));
		$this->addItem(new Route("/admin/ustawienia-menu", "admin", "showMenuSettings", "GET"));

		////////////////////=> Panel Użytkownika <=////////////////////

		$this->addItem(new Route("/panel-uzytkownika", "userPanel", "showHomePage", "GET", 1));
		$this->addItem(new Route("/panel-uzytkownika/stworz-turniej", "userPanel", "showNewTournamentForm", "GET"));
		$this->addItem(new Route("/panel-uzytkownika/stworz-turniej", "userPanel", "createNewTournament", "POST"));

		$this->addItem(new Route("/panel-uzytkownika/moje-turnieje", "userPanel", "showMyTournaments", "GET"));
		$this->addItem(new Route("/panel-uzytkownika/moje-mecze", "userPanel", "showMyMatches", "GET"));
		$this->addItem(new Route("/panel-uzytkownika/stworz-mecz", "userPanel", "createSimpleMatch", "GET"));

		////////////////////=> Strony turniejowe <=////////////////////
		
		$this->addItem(new Route("/turniej/{@url}", "tournament", "showTournamentPage", "GET"));



		////////////////////=> Testy <=////////////////////
		$this->addItem(new Route("/test", "test", "test"));

	}

	private function addItem(Route $routing)
	{
		$this->collection[] = $routing;
	}

	public function getCollection()
	{
		return $this->collection;
	}

	private function checkCollection()
	{
		if(cache::fileExist("routing", "collection"))
		{
			if(cache::fileCreatedTime("routing","collection") > filemtime(__FILE__))
			{
				return true;
			}
		}
		return false;
	}
}