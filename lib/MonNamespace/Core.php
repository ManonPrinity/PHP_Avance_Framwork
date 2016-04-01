<?php
namespace MonNamespace;
use app\models;

use MonNamespace\exceptions\NotFoundException;

class Core {
	public static function registerAutoload($className)
	{
		$className = ltrim($className, '\\');
		$fileName  = '';
		$namespace = '';
		if ($lastNsPos = strrpos($className, '\\')) {
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		}
		$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
/*		var_dump($namespace);
*/		if (preg_match("/app/", $namespace)) {
			$fileName = '..\\'.$fileName;
			echo 'ddd';
		} else {
			$fileName = $className .'.php';
			echo 'dfvtthn';
		} // if classexist but bug

		require_once $fileName;
	}

	public static function run()
	{
		spl_autoload_register(array(__CLASS__,'registerAutoload'));
		
		$param = explode('/',$_GET['page']);
		var_dump($param);
		$controller = "app\\controllers\\".ucfirst($param[0])."Controller";
		var_dump($controller);
		require_once("../app/controllers/IndexController.php");
		$class = new $controller;
		$method = $param[1]."Action";
		$class->$method();
		var_dump($class);
	}
}
?>