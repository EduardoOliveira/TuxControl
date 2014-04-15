<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hardware_Reading extends CI_Model {

	function save()
	{
		$this -> db -> insert('hardware_reading', array('id' => null));
		return $this -> db -> insert_id();
	}

}