<?php // SILNIK MVC - Mariusz Sosnowski 
Class Request
{
	private $urlParameters;

	private $requestType;

	public static $instance;

	public static function instance()
	{
		if(empty(self::$instance))
		{
			self::$instance = new Request($_SERVER);
		}
		return self::$instance;
	} 

	public function __construct($SERVER)
	{
		$this->urlParameters = parse_url($SERVER['REQUEST_URI']);

		$this->urlParameters['path'] = substr($this->urlParameters['path'], strlen(SUBDIR));




		$this->requestType = $SERVER['REQUEST_METHOD'];

	}

	public function getPath()
	{
		return $this->urlParameters['path'];
	}

	public function getRequestType()
	{
		return $this->requestType;
	}

}