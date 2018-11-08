<?php // Router - Mariusz Sosnowski

class Route
{
	private $pattern;

	private $advancedpattern;

	private $destinyClass;

	private $destinymethod;

	private $requestType;

	private $userlevelrequired;

	function __construct($pattern, $class, $method = null, $requestTypes = null, $userlevel = null, $advancedpattern = null)
	{
		$this->pattern = $pattern;

		$this->destinyClass = $class;

		$this->destinymethod = $method;

		if($method == null) $this->destinymethod = "run"; else	$this->destinymethod = $method;

		if($requestTypes == null)
		{
			$this->requestType = "#(GET|POST|PUT)#";
		}
		else $this->requestType = "#(". strtoupper(preg_replace("#,#", "|", $requestTypes)) .")#";

		if($advancedpattern == null)
			$this->patternAdvance = $this->convertPattern($this->pattern);
		else
			$this->advancedpattern = $advancedpattern;

		if($userlevel == null)
			$this->userlevelrequired = 0;
		else 
			$this->userlevelrequired = $userlevel;
	}

	private function convertPattern($pattern)
	{
		// Szukam prostych parametrów...
		preg_match("#\{@[0-9A-Za-z_]+\}#", $pattern, $matches);

		// Tworzę zaawansowany pattern
		$this->advancedpattern = "#^" . preg_replace("#\{@[0-9A-Za-z_\-]+\}#", "[0-9A-Za-z\-_]+", $pattern) . "/{0,1}$#";

		// Tworzę tablicę $paramkeys...
	}

	public function getController()
	{
		return $this->destinyClass."Controller";
	}

	public function getAction()
	{
		return $this->destinymethod;
	}

	public function getRequestType()
	{
		return $this->requestType;
	}

	public function getParamKeys()
	{
		return $this->paramKeys;
	}

	public function getPattern()
	{
		return $this->advancedpattern;
	}

	public function getRequiredPermissions()
	{
		return $this->userlevelrequired;
	}

	public function getData($path)
	{
		$uri = explode("/", $path);
		$pat = explode("/", $this->pattern);
		$data = array();
		for ($i=0; $i < count($pat); $i++) { 
			if($pat[$i] == $uri[$i]) continue;
			$data[str_replace(array("{@", "}"),array("",""),$pat[$i])] = $uri[$i];
		}
		return $data;
	}
}