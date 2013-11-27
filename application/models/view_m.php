<?php


class View_m extends CI_Model{
protected $_table_name = 'votes';
	
        public function get(){
		$method = 'result';
		return $this->db->get($this->_table_name)->$method();
		}
       
  } 