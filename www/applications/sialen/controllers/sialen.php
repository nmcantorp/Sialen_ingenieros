<?php
/**
 * Access from index.php:
 */


class Sialen_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("sialen");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();
		$this->title("Prueba");
		#$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index() {	
		$this->Templates->CSS('default', 'default', TRUE);
		$vars["message"] = __(__("Hello World"));
		$vars["view"]	 = $this->view("show", TRUE);
		
		//$this->render("content", $vars);
		$this->view("show", $vars);
	}

	public function test($param1 = "Hola", $param2 = "Adios") {
		print "New dispatcher it's works fine: $param1, $param2";
	}
/*
	public function show($message) {
		$vars["message"] = $message;
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);
		#$this->view("show", $vars);
	}
*/
}
