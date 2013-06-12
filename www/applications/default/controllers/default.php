<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Default_Model = $this->model("Default_Model");
		$this->Templates->CSS('master', 'default');
		$this->Templates->title('Sialen Ingenieros');
	}
	
	public function index() {	
		$vars["message"] = __(__("Hello World"));
		$vars["view"]	 = $this->view("landing_page", TRUE);
		
		$this->render("content", $vars);
		
		//$this->view("landing_page", $vars);
	}

}
