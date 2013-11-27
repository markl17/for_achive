

<?php
class Color extends CI_Controller
{
    
	public function __construct ()
	{
		parent::__construct();
                $this->load->model('color_m');
                $this->load->model('view_m');
                
	}

	public function index   ()
	{
		// Fetch all users
		$this->data['color'] = $this->color_m->get();
		$this->data['votes'] = $this->view_m->get();
		
		// Load view
                
		$this->data['subview'] = 'index1';
		$this->load->view('_layout_main', $this->data);
	}


}