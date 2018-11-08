<?php 

class Router
{

	private $path;

	private $type;

	public function __construct()
	{
		$this->path = Request::instance()->getPath();

		$this->type = Request::instance()->getRequestType();

		$this->callController($this->getController());
	}

	private function getController()
	{
		$routeslist = new RoutesCollection;

		$badrequest = false;

		foreach ($routeslist->getCollection() as $route) {
			if($this->checkURI($route->getPattern(), $this->path))
			{
				if($this->checkRequestType($route->getRequestType(),$this->type))
				{
					if($route->getRequiredPermissions() <= SessionDB::getUserPermissions())
					{
					return $route;
					}
					else
					{
						return new Route("","Error401");
					}		
				}
				else
				{
					$badrequest = true;
				}
			}
		}

		if($badrequest)
		{
			return new Route("","Error405");
		}
		else
		{
			return new Route("","Error404");
		}
	
	}

	private function checkRequestType($avaliable, $sent)
	{
		if(preg_match($avaliable, $sent))
		{
			return true;
		}
		return false;
	}

	private function checkURI($pattern, $uri)
	{
		if(preg_match($pattern, $uri))
		{
			return true;
		}
		return false;
	}

	private function callController(Route $route)
	{
		$controller = $route->getController();

		$controller = new $controller;

		$action = $route->getAction();

		$data = $route->getData($this->path);

		if(is_null($data))
			$controller->$action();
		else
			$controller->$action($data);
	}

}