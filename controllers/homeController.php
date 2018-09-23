<?php
class homeController extends Controller {
	
	public function index() {

		$usuarios = new Usuarios();
		//$dados["usuarios"] = $usuarios->getUsuarios();
		$dados["usuarios"] = $usuarios->getUsuarios();

		//$this->loadView("home", $dados);
		$this->loadTemplate("home", $dados);
	}

	public function sobre() {
		
		$dados = array();
		//$this->loadView("sobre", $dados);
		$this->loadTemplate("sobre", $dados);
	}
}