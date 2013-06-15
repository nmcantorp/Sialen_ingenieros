<?php
/**
 * Access from index.php:
 */


class Login_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("sialen");
		$this->helper("sessions");
		$this->helper('alerts');
		$this->Templates = $this->core("Templates");
		$this->Templates->theme();
		$this->title("Prueba");
		$this->Login_Model = $this->model("Login_Model");
		//$this->CSS('master', 'sialen', TRUE);
	}
	
	public function index() {	

	}

	public function Val_Session() {
		$_SESSION['Practica'] = 'pRUEBA';
		echo $_SESSION['Practica'];die();
		print $this->Login_Model->consulta_sesion();
		//$this->user = $_SESSION['user'];
		//$this->createSession('user', 'valor'); 
		
		/*if(isset($this->SESSION('user'))){
			print '<a href="#">Close Sesion</a>';
		}else{
			print '<a href="#">loguear</a>';
		}*/
		echo "New dispatcher it's works fine";
	}
}


