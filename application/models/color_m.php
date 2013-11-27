<?php
class Color_m extends MY_Model
{
	protected $_table_name = 'color';
	
	
        public function get(){
		$method = 'result';
		return $this->db->get($this->_table_name)->$method();
		}
       
}