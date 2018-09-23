<?php
class Core {
	
	public function run() {
		// guarda em $url apenas o que vier após index.php
		$url = explode("index.php", $_SERVER["PHP_SELF"]);
		$url = end($url);
		
		$url = explode("/", $url);
		array_shift($url);

		if (!empty($url[0])) {
			// pega o controller
			$currentController = $url[0]."Controller";
			array_shift($url);

			// pega a action
			if (isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);

			} else {
				$currentAction = "index";
			}

			// pega os parâmetros
			if (count($url) > 0) {
				
				$params = $url;
			} else {
				
				$params = array();
			}

		} else {
			// controller, action e parâmetros padrões
			$currentController = "homeController";
			$currentAction = "index";
			$params = array();
		}

		require "core/Controller.php";
		
		$c = new $currentController();
		//$c->$currentAction();
		call_user_func_array(array($c, $currentAction), $params);
	}
}
?>