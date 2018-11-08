<?php


class userPanelController extends Controller
{

    public function showHomePage()
    {
        self::$s->assign('title', "Panel Użytkownika");
		self::$s->assign('content','user-panel.tpl');
		self::$s->display('main.tpl');
    }

    public function showMyTournaments()
    {
    	self::$s->assign('title', "Moje turnieje");
		self::$s->assign('content','my-tournaments.tpl');

		self::$s->display('main.tpl');
    }

    public function showNewTournamentForm($data = null)
    {
    	self::$s->assign('title', "Kreator nowego turnieju");
		self::$s->assign('content','new-tournament.tpl');

		if(!is_null($data)) self::$s->assign('response', $data);

		self::$s->display('main.tpl');
    }

    public function showMyMatches()
    {

    }

    public function createSimpleMatch()
    {

    }
}