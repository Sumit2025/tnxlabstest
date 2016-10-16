<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends CI_Controller {

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
		if($this->session->userdata('user_login') !=1 ){
			redirect('login');
		}

		$array = array();

		$order_by = 'added_on';
		$order_type = 'desc';
		if($this->input->post('property_sale'))
		{
			$array['property_sale']= $this->input->post('property_sale');
		}
		if($this->input->post('property_type'))
		{
			$array['property_type']= $this->input->post('property_type');
		}
		if($this->input->post('order_by'))
		{
			switch ($this->input->post('order_by')) {
				case 'newest':
					$order_by = 'added_on';
					$order_type = 'desc';
					break;
				case 'oldest':
					$order_by = 'added_on';
					$order_type = 'asc';
					break;
				case 'most_expensive':
					$order_by = 'price';
					$order_type = 'desc';
					break;
				case 'least_expensive':
					$order_by = 'price';
					$order_type = 'asc';
					break;
				case 'smallest':
					$order_by = 'area';
					$order_type = 'asc';
					break;
				case 'largest':
					$order_by = 'area';
					$order_type = 'desc';
					break;
				default:
					$order_by = 'added_on';
					$order_type = 'desc';
					break;
			}
		}
		$this->db->order_by($order_by,$order_type);
		$data['properties'] = $this->db->get_where('properties',$array)->result_array();
		$this->load->view('listing',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */