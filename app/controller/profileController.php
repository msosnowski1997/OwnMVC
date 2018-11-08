<?php

/**
 * summary
 */
class profileController extends Controller
{
    /**
     * summary
     */
    public function showProfile($data)
    {
    	$userdata = UsersDB::getUserByAlias($data['identify']);
    	if(!$userdata)
    	{
    		// unkown user
            $notfound = new Error404Controller;
            $notfound->run();
    	}
    	self::$s->assign('userdata', $userdata);





		self::$s->assign('title', $userdata['user_name'].' '.$userdata['user_surname']);
		self::$s->assign('content','user-profile.tpl');
		self::$s->display('main.tpl');
    }

    public function showEditProfile($data = null)
    {



    }

    public function updateProfile()
    {
        
        
        
    }
}