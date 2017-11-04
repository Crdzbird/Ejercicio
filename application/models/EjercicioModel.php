<?php
/**
 *
 */
class EjercicioModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

	function getSinonimos(){
		$this->db->select('idSinonimo,sinonimo');
		$this->db->from('sinonimos');
		$this->db->where('idSinonimo !=5');
 	 $query = $this->db->get();
	 if ($query->num_rows() > 0) {
     $data = array();
      if($query->num_rows() > 0){
        foreach ($query ->result_array() as $row) {
          $data[] = $row;
        }
      }
    }
    $query->free_result();
    return $data;
	}

	function getPalabras(){
		$this->db->select('distinct (palabra) as palabra');
		$this->db->from('palabras');
 	 $query = $this->db->get();
	 if ($query->num_rows() > 0) {
     $data = array();
      if($query->num_rows() > 0){
        foreach ($query ->result_array() as $row) {
          $data[] = $row;
        }
      }
    }
    $query->free_result();
    return $data;
	}

	function getPalabrasAnidadas(){
		$this->db->select('sinonimos.sinonimo,palabras.palabra,palabraAnidada.frase,concat(sinonimos.sinonimo, palabras.palabra, palabraAnidada.frase)');
		$this->db->from('sinonimos');
		$this->db->join('palabras as palabras','palabras.idSinonimo = sinonimos.idSinonimo');
		$this->db->join('palabraAnidada as palabraAnidada','palabraAnidada.idPalabra = palabras.idPalabra');
 	 $query = $this->db->get();
	 if ($query->num_rows() > 0) {
     $data = array();
      if($query->num_rows() > 0){
        foreach ($query ->result_array() as $row) {
          $data[] = $row;
        }
      }
    }
    $query->free_result();
    return $data;
	}

	function getImagen(){
		$this->db->select('imagen');
		$this->db->from('imagen');
		$query = $this->db->get();
 	 if ($query->num_rows() > 0) {
      $data = array();
       if($query->num_rows() > 0){
         foreach ($query ->result_array() as $row) {
           $data[] = $row;
         }
       }
     }
     $query->free_result();
     return $data;
	}

	function isPalabraRight($palabra){
		$this->db->select('sinonimos.sinonimo,palabras.palabra,palabraAnidada.frase,concat(sinonimos.sinonimo, palabras.palabra, palabraAnidada.frase)');
	$this->db->from('sinonimos');
	$this->db->join('palabras as palabras','palabras.idSinonimo = sinonimos.idSinonimo');
	$this->db->join('palabraAnidada as palabraAnidada','palabraAnidada.idPalabra = palabras.idPalabra');
	$this->db->where('palabras.palabra',$palabra);
	$query = $this->db->get();
		if ($query->num_rows() > 0) {
      return true;
    } else {
      return false;
    }
	}

  function guardar_1($new) {
    $query = $this->db->insert('seleccion_palabra', $new);
    return $this->db->insert_id();
  }

	function guardar_2($new) {
    $query = $this->db->insert('seleccion_imagen', $new);
    return $this->db->insert_id();
  }

	function guardar_3($new) {
    $query = $this->db->insert('seleccion_escritura', $new);
    return $this->db->insert_id();
  }

}

 ?>
