<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	// Admin-Pannel Controller-Start


    function __construct(){
        parent::__construct();
        // $this->load->library('session');
		$this->load->Model('Data');
		
        $this->isLogin = $this->session->userdata('isLogin');

    }

	public function adminheader()
	{
		$data['profile'] = $this->Data->getprofile();
		$this->load->view('adminpannel/template/header', $data);
	}

	public function adminlogin()
	{
		$this->load->view('adminpannel/login');
	}
	

	public function adminindex()
	{
        if ($this->isLogin) {
            $this->adminheader();
            $this->load->view('adminpannel/index');
        }else{
         redirect('login');
        }
		
	}

	public function profile()
	{
		$data['profile']=$this->Data->getprofile();
		// echo '<pre>';
		// print_r($data);
		// exit;
		$this->adminheader();
		$this->load->view('adminpannel/profile',$data);
	}


	// dashboard/profile data

	public function profileadded()
	{
		$id = $this->input->post('proid');
		$website_name = $this->input->post('web_name');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$insta = $this->input->post('insta');
		$fb = $this->input->post('fb');
		$twitter = $this->input->post('twitter');
		if (!empty($_FILES['logo']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] ='gif|jpg|png';
			// $config['encrypt_name']  = TRUE;
		

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('logo'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$logo = $this->upload->data();
					$data['logo']=$logo['file_name'];
                    $this->Data->profileinput($data,$id);
					
			}

		}
		if (!empty($_FILES['footerlogo']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] ='gif|jpg|png';
			// $config['encrypt_name']  = TRUE;
		

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('footerlogo'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$logo = $this->upload->data();
					$data['footerlogo']=$logo['file_name'];
                    $this->Data->profileinput($data,$id);
					
			}

		}


		$data = array(
			'website_name'=>$website_name,
			'address'=>$address,
			'email'=>$email,
			'phone'=>$phone,
			'insta'=>$insta,
			'fb'=>$fb,
			'twitter'=>$twitter,
        );
		$this->Data->profileinput($data,$id);
		redirect('admin/profile');
	}

	// Admin Profile End



	// Admin Team Start
	public function team($id='')
	{
		$this->adminheader();
		$data = array();
		$team = $this->Data->getteambyid($id);
		$data['team'] = $team;
		$this->load->view('adminpannel/team', $data);
	}

	public function edit_team()
	{
		$data['team'] = $this->Data->getteam();
		$this->adminheader();
		$this->load->view('adminpannel/edit_team', $data);
	}

	
	public function teamadded()
	{
		$id = $this->input->post('proid');
		$name = $this->input->post('name');
		$role = $this->input->post('role');
		$background = $this->input->post('background');
		$insta = $this->input->post('insta');
		$fb = $this->input->post('fb');
		$linkedin = $this->input->post('linkedin');
		$image='';
		if (!empty($_FILES['image']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['encrypt_name']  = TRUE;

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$image = $this->upload->data();
					$data['image']=$image['file_name'];
                    // $this->Data->teaminput($data,$id);
			}

		}

		$data = array(
			'name'=>$name,
			'role'=>$role,
			'background'=>$background,
			'insta'=>$insta,
			'fb'=>$fb,
			'linkedin'=>$linkedin,
			'image' => isset($image['file_name'])?$image['file_name']:''
		);
		$this->Data->teaminput($data,$id);
		$this->session->set_flashdata('success', 'Team Added successfully');
		redirect('admin/team');
	}

	public function delete_team_row($id)
	{
		$this->load->model('Data');
		$this->Data->delete_team($id);
		$this->session->set_flashdata('success_msg', 'Deleted successfully');
		redirect('admin/edit_team');
	}

	// Admin Team End

	// Admin Service Start

	public function add_service($id='')
	{
		$this->adminheader();
		$data = array();
		$service = $this->Data->getservice_id($id);
		$data['service'] = $service;
		$this->load->view('adminpannel/add_service', $data);
	}

	public function edit_service()
	{
		$data['service'] = $this->Data->getservice();
		$this->adminheader();
		$this->load->view('adminpannel/edit_service', $data);
	}

	public function service_added()
	{
		$id = $this->input->post('proid');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$image='';
		if (!empty($_FILES['image']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['encrypt_name']  = TRUE;

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$image = $this->upload->data();
					$data['image']=$image['file_name'];
                    // $this->Data->teaminput($data,$id);
			}

			$data = array(
				'title' => $title,
				'detail' => $description,
				'image' => isset($image['file_name'])?$image['file_name']:''
			);
			$this->Data->serviceinput($data, $id);
			// $this->session->set_flash('serviceadded','Service Added Successfully');
			redirect('admin/add_service');
		}    

	}
	public function delete_service_row($id)
	{
		$this->load->model('Data');
		$this->Data->delete_service($id);
		// $this->session->set_flashdata('success_msg', 'Deleted successfully');
		redirect('admin/edit_service');
	}

	// Service End


	// Faq's Start

	public function add_faq($id='')
	{
		$this->adminheader();
		$data = array();
		$faq = $this->Data->get_single_faq_data($id);
		$data['faq'] = $faq;
		$data['service'] = $this->Data->getservice(	);
		$this->load->view('adminpannel/add_faq', $data);
	}

	public function edit_faq()
	{
		$this->load->model('Data');
		$faq_data = $this->Data->get_service_faq_data();
		$data['faq_data'] = $faq_data;
		$this->adminheader();
		$this->load->view('adminpannel/edit_faq', $data);
	}


	

	public function service_faq_added()
	{
		$id = $this->input->post('proid');
		// $service_id = $this->input->post('service_id');
		$service_id = $this->input->post('service_id');
		$question = $this->input->post('question');
		$answer = $this->input->post('answer');
		
		$data= array(
			'service_id'=>$service_id,
			'question'=>$question,
			'answer'=>$answer,
			// "service_id"=>$service_id
		);

		$this->Data->faq_input($data, $id);
		redirect('admin/edit_faq');

	}

	public function delete_faq($id) {
		$this->Data->delete_faq($id);
		redirect('Admin/edit_faq');
	}
	
}
