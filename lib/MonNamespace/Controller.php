<?php
namespace MonNamespace;

abstract class Controller {
	public function render($view) {
		$param = explode(':', $view);
		$path = "../app/views/".$param[0]."/".$param[1].".html";
		var_dump($path);
		$homepage = file_get_contents($path);
		echo $homepage;
	}
}