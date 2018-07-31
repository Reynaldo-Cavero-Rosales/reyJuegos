<?php 
class View{
	private $controller;
	public $framework;
	private $clave;

	public function __construct(Request $r){
		$this->controller=$r->getController();
	}

	public function render($view){
		$pathView=ROOT.'views'.DS.$this->controller.DS.$view.'.php';
		if (is_readable($pathView)) {
			if ($this->controller=='persona') {
			require_once ROOT.'views'.DS.'layout'.DS.'header.php';
			require_once $pathView;
			require_once ROOT.'views'.DS.'layout'.DS.'footer.php';
			}
		}else{
			echo 'Error en la vista';
		}
	}
}