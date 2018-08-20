<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_operator');
		}

		function login()
		{
			if(isset($_POST['submit']))
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$data = array(
					'username' => $username,
					'password' => sha1($password)
				);

				$hasil = $this->m_operator->login('operator',$data);

				if($hasil==1)
				{
					$this->session->set_userdata(array('status' => 'Oke'));

					redirect('dashboard');
				}else
				{
					redirect('login');
				}
			}else{
				$this->load->view('form_login');
			}
		}
	}
?>