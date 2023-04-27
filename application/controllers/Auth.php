<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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


	public function adminlogin()
	{
		$this->load->view('adminpannel/login');
	}
    
    public function logincheck()
    {
       $user = $this->input->post('email');
       $password = $this->input->post('password');

       $check = $this->Login->checklogin($user, $password);

       if ($check != '') {
           $this->session->set_userdata('isLogin',true);
           $this->session->set_userdata('type',$check->type);
           $this->session->set_userdata('id', $check->id);
           redirect('dashboard');
       }else{
        $this->session->set_flashdata('error','Invalid username or password');
        redirect('login');
        
       }
    }

    public function logout(){
        $this->session->unset_userdata('isLogin');
        $this->session->unset_userdata('type');
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        redirect('login');
    }
	

}
