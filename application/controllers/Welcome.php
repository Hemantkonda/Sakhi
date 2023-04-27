<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

// website controller-start
	public function header()
	{
		$data['profile']=$this->Data->getprofile();
		$this->load->view('template/header', $data);
	}

	public function footer()
	{
		$data['profile']=$this->Data->getprofile();
		$this->load->view('template/footer', $data);
	}

	public function testi()
	{
		$this->load->view('testi');
	}

	public function index()
	{
		$this->header();
		$this->load->view('index');
		$this->footer();
	}

	public function about($id='id')
	{
		$data['team']=$this->Data->getteam($id);
		$this->header();
		$this->load->view('about', $data);
		$this->testi();
		$this->footer();
	}

	public function service($id='id')
	{
		$data['service']=$this->Data->getservice($id);
		$this->header();
		$this->load->view('service', $data);
		$this->testi();
		$this->footer();
	}

	public function single_service($id)
	{
		$this->load->model('Data'); // Load the Data model
		$data['service'] = $this->Data->get_single_service_data($id); // Fetch data from the model
		$data['faq'] = $this->Data->getfaq_data($id);
		$this->header();
		$this->load->view('single_service', $data);
		// $this->testi();
		$this->footer();
	}
	

	public function cart()
	{
		$this->header();
		$this->load->view('cart');
		$this->testi();
		$this->footer();
	}

	public function contact()
	{
		$this->header();
		$this->load->view('contact');
	}

	public function userlogin()
	{
		$this->header();
		$this->load->view('userlogin');
		$this->footer();
	}

	// website controller-End



	// Admin-Pannel Controller-Start

	public function adminheader()
	{
		$this->load->view('adminpannel/template/header');
	}

	public function adminlogin()
	{
		$this->load->view('adminpannel/login');
	}
	

	public function adminindex()
	{
		$this->adminheader();
		$this->load->view('adminpannel/index');
	}

	public function profile()
	{
		$this->adminheader();
		$this->load->view('adminpannel/profile');
	}





	// Admin-Pannel Controller-End

}
