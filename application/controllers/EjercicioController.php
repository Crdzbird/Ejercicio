<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EjercicioController extends CI_Controller {

  function __construct()
  {
  	parent::__construct();
  	$this->load->model('EjercicioModel');
  }

  function index(){
		$data['sinonimo'] = $this->EjercicioModel->getSinonimos();
    $data['palabra'] = $this->EjercicioModel->getPalabras();
		$data['frase'] = $this->EjercicioModel->getPalabrasAnidadas();
		$data['imagen'] = $this->EjercicioModel->getImagen();
		$this->load->view('EjercicioView',$data);
  }

	function debug_to_console($data) {
    $output = $data;
    if (is_array( $output ))
      $output = implode( ',', $output);
      echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
  }

	function saveAnswers(){
		$save1 = array('palabra'=>$this->input->post("p1r1"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("p1r1")));
		if($this->EjercicioModel->guardar_1($save1)!=0){
				$save2 = array('palabra'=>$this->input->post("p1r2"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("p1r2")));
			if ($this->EjercicioModel->guardar_1($save2)) {
					$save3 = array('palabra'=>$this->input->post("p1r3"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("p1r3")));
				if ($this->EjercicioModel->guardar_1($save3)) {
						$save4 = array('palabra'=>$this->input->post("p1r4"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("p1r4")));
					if ($this->EjercicioModel->guardar_1($save4)) {


						$save1 = array('escritura'=>$this->input->post("input1"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("input1")));
						if($this->EjercicioModel->guardar_3($save1)!=0){
								$save2 = array('escritura'=>$this->input->post("input2"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("input2")));
							if ($this->EjercicioModel->guardar_3($save2)) {
									$save3 = array('escritura'=>$this->input->post("input3"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("input3")));
								if ($this->EjercicioModel->guardar_3($save3)) {
										$save4 = array('escritura'=>$this->input->post("input4"),'correcto'=>$this->EjercicioModel->isPalabraRight( $this->input->post("input4")));
									if ($this->EjercicioModel->guardar_3($save4)) {
										echo '<script>alert("Se han registrado todos los datos")</script>';
						        redirect('EjercicioController/index');
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
?>
