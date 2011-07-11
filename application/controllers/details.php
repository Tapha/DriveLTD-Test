<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {

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
		
		//Grab Data
		$mobile = $_POST['mobile'];
		$full_name = $_POST['fullname'];
		$drivers_licence = $_POST['licence_number'];
		$email = $_POST['email_add'];
		$theory = $_POST['theory'];
		$application_reference = $_POST['application_reference'];
		
		//Store in the database
		
		$data = array(
		   'mobile' => $mobile,
		   'full_name' => $full_name,
		   'drivers_licence_number' => $drivers_licence,
		   'email' => $email,
		   'theory_pass' => $theory,
		   'application_ref' => $application_reference
		);

		$this->db->update('user_info', $data, 'user_id = 1'); 
		/*last two. date, etc*/
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		$this->load->view('main', $data);
		//}
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
