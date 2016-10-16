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
		$this->form_validation->set_rules('username', 'username ', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password ', 'trim|required|xss_clean');
		if ($this->form_validation->run()==false){
			$this->load->view('loginform');
		}
		else{
			$row = $this->db->get_where('users',array('username' => $this->input->post('username'),'password' => md5($this->input->post('password'))))->row_array();
			if(!empty($row)){
				$row['user_login'] =1;
				$this->session->set_userdata($row);
				redirect('listing');
			}
			else{
				$this->session->set_flashdata('error','Username/Password is wrong');
				redirect('login');
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */