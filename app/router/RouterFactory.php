<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{
	use Nette\StaticClass;

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;

		$router[] = new Route('common/<presenter>/<action>/<id>', [
			'module' => 'Common',
			'presenter' => 'List',
			'action' => 'all',
			'id' => NULL,
		]);

		$router[] = new Route('admin/<presenter>/<action>/<id>', [
			'module' => 'Admin',
			'presenter' => 'UserManagement',
			'action' => 'default',
			'id' => NULL,
		]);

		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');

		$router[] = new Route('<presenter>/<action>/<id>', [
			'module' => 'Front',
			'presenter' => 'Login',
			'action' => 'default',
			'id' => NULL,
		]);

		return $router;
	}

}
