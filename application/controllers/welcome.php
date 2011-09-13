<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// it might be better to autoload this
		$this->load->library('layout');

		// these are overridable view values, check the _prepare method
		// in the layout library to add more.
		$data['page_title'] = 'My Codeigniter Project';
		$data['meta_desc'] = 'Description for my Codeigniter project.';
		$data['meta_author'] = 'Tom Jones';

		// add any extra data to the array as you normally would
		$this->layout->show('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */