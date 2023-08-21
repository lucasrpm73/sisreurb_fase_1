<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {
  public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
		$this->load->model("users_model");
		$logado = $this->login->checkUser();
		if (!$logado || $_SESSION['user']['profile'] != 1) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
	}

	public function index()
	{
    $data['users'] = $this->users_model->fetch_users();

		$this->load->view('users/users', $data);
	}

  public function register()
	{
    if (isset($_POST['register_user'])) {
      $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('profile', 'profile', 'trim|required');
      $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
      $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

      $sucess = $this->form_validation->run();

      if ($sucess) {
        $data = array("name" => $this->input->post('name'), 'profile' => $this->input->post('profile'), 'email' => $this->input->post('email'), 'password' => $this->input->post('password'));
  			$this->login->registerUser($data);

        redirect(base_url().'users');
      }
    }
		$this->load->view('users/register');
	}

  public function detail($id){
    $data['user'] = $this->users_model->fetch_user($id);

    $this->load->view('users/detail', $data);
  }

  public function update_user(){
    $rows = array();

    $rows['name'] = $this->security->xss_clean($this->input->post('name'));
    $rows['email'] = $this->security->xss_clean($this->input->post('email'));
    $rows['profile'] = $this->security->xss_clean($this->input->post('profile'));
    $rows['note'] = $this->security->xss_clean($this->input->post('note'));
    $rows['status'] = $this->security->xss_clean($this->input->post('status'));
		$rows['id_user'] = $this->security->xss_clean($this->input->post('id_user'));

    $this->users_model->update_user($rows);

    redirect(base_url().'users/detail/'.$this->input->post('id_user'));
  }
}
