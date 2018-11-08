<?php

class tournamentController extends Controller
{

    public function showTournamentPage($data)
    {
        self::$s->assign('title', "Nazwa turnieju");
		self::$s->assign('content','tournament-view.tpl');

		self::$s->display('main.tpl');
    }
}