<?php
namespace app\controllers;
use \app\models\UserTable;

use \MonNamespace\Controller;

class IndexController extends \MonNamespace\Controller {

	public function indexAction() {
		echo 'marre ....';
		$this->render('Index:index');

	}
	public function listAction() {
		echo 'php c pas bien';
	}
}
?>