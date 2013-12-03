

<?php
class Color extends CI_Controller
{
    
	public function __construct ()
	{
		parent::__construct();
                $this->load->model('color_m');
                $this->load->model('view_m');
				$this->data['color'] = $this->color_m->get();
				$this->data['votes'] = $this->view_m->get();
                
	}
	public function color1(){
	
	$obj = $this->input->post('color');
	$output = '';
		foreach( $this->data['votes'] as $array) {
							if($array->color === $obj)
							$output .= '<span >'. $array->votes . '</span>' . '<br>';

		}
	var_dump($output);
		return ($output);
	
	
	}
	public function index   ()
	{
		// Fetch all users
		$this->data['color'] = $this->color_m->get();
		$this->data['votes'] = $this->view_m->get();
		//print_r($this->data['votes']);
		// Load view
                
		$this->data['subview'] = 'index1';
		$this->load->view('_layout_main', $this->data);
	}


}