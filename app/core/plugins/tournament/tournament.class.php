<?php

class Tournament extends DB
{
    private $id;

    private $settings = array ();

    private $data = array ();

    public function __construct($id, $settings, $data)
    {
    	$this->id = $id;

    	$this->settings = $settings;

    	$this->data = $data;

    }

    public static function autoloader($classname)
    {
        $classes = array ();

        $filepath = CORE_PATH . "plugins/tournament/" . $classes[$classname] . '.class.php';

        if(include_once($filepath))
        {
            return true;
        }
        return false;

    }

    public static function getFullTournamentData($id, $url = null)
    {

    }
    

}