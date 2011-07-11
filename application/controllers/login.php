<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		/*$false = $this->session->userdata('loggedin');

		if ((isset($false)) && ($false == TRUE))

		{
			//show dashboard

		}

		else

		{*/
		
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		$this->load->view('login', $data);
		//}
	}
	
	public function check()
	{
		/*$false = $this->session->userdata('loggedin');

		if ((isset($false)) && ($false == TRUE))

		{
			//show dashboard

		}

		else

		{*/
		
		//check user data from db, start session, put their data in session, log them in, etc.
		
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		$this->load->view('main', $data);
		//}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */