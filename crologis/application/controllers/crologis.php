<?php 

/**
* 
*/
class Crologis extends CI_Controller
{
	
	public function index()
	{
			/*cabezera*/
		$data = array('title' => 'Crologis | Inicio');
		$this->load->view("/vistas/header",$data);
		/*nav*/
		$this->load->view("/vistas/nav");
		/*contenido*/

		$this->load->view("/vistas/contenido");

		/*footer*/
		$this->load->view("/vistas/footer");

	}
public function documentos()
{
$data = array('title' => 'Crologis | Documentos');
		$this->load->view("/vistas/header",$data);
		/*nav*/
		$this->load->view("/vistas/nav");
		/*contenido*/


		$this->load->view("/vistas/documentos");
		/*footer*/
		$this->load->view("/vistas/footer");
}
public function contacto()
{
$data = array('title' => 'Crologis | Contacto');
		$this->load->view("/vistas/header",$data);
		/*nav*/
		$this->load->view("/vistas/nav");
		/*contenido*/


		$this->load->view("/vistas/contacto");
		/*footer*/
		$this->load->view("/vistas/footer");
}

public function curso()
{
$data = array('title' => 'Crologis | Curso');
		$this->load->view("/vistas/header",$data);
		/*nav*/
		$this->load->view("/vistas/nav");
		/*contenido*/


		$this->load->view("/vistas/curso");
		/*footer*/
		$this->load->view("/vistas/footer");
}

}



 ?>