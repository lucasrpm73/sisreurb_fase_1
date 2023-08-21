<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_configurations extends CI_Controller {
	public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
    $this->load->model("users_model");
		$logado = $this->login->checkUser();
		if (!$logado) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
    $this->load->model("city_hall_model");
    $this->load->model("specific_legislation_model");
	}

	public function index()
	{
    $data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['configurations'] = $this->city_hall_model->fetch_configurations();
    $data['configurations_protocol'] = $this->city_hall_model->fetch_configurations_protocol();
    $data['specific_legislations'] = $this->specific_legislation_model->fetch_specific_legislations();

		$this->load->view('basic_configurations/basic_configurations', $data);
	}

  public function register_configuration(){
    if (isset($_POST['register_configuration'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $this->city_hall_model->insert_configuration($posts);
			$city_halls = $this->city_hall_model->fetch_ids_city_halls();
			$this->city_hall_model->insert_new_document_all_city_halls($city_halls, $posts);


      $error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
    } else {
      $error = array();
			$error['error']['error_string']	= 'Houve um erro, Tente novamente!';
			$error['error']['error_type'] = 'danger'; // Warning | success | danger
			$this->session->set_flashdata($error);
    }
    redirect(base_url().'basic_configurations');
  }

  public function update_checklist_config(){
    if (isset($_POST['update_configuration'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $this->city_hall_model->update_checklist_config($posts);

      $error = array();
      $error['error']['error_string']	= 'Atualizado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
      $error['error']['error_type'] = 'success'; // Warning | success | danger
      $this->session->set_flashdata($error);
    } else {
      $error = array();
      $error['error']['error_string']	= 'Houve um erro, Tente novamente!';
      $error['error']['error_type'] = 'danger'; // Warning | success | danger
      $this->session->set_flashdata($error);
    }
    redirect(base_url().'basic_configurations');
  }

	public function register_configuration_protocol(){
    if (isset($_POST['register_configuration'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $this->city_hall_model->insert_configuration_protocol($posts);
			$city_halls = $this->city_hall_model->fetch_ids_city_halls();
			$this->city_hall_model->insert_new_checklist_protocol_all_city_halls($city_halls, $posts);


      $error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
    } else {
      $error = array();
			$error['error']['error_string']	= 'Houve um erro, Tente novamente!';
			$error['error']['error_type'] = 'danger'; // Warning | success | danger
			$this->session->set_flashdata($error);
    }
    redirect(base_url().'basic_configurations');
  }

	public function update_checklist_protocol_config(){
    if (isset($_POST['update_configuration'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $this->city_hall_model->update_checklist_protocol_config($posts);

      $error = array();
      $error['error']['error_string']	= 'Atualizado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
      $error['error']['error_type'] = 'success'; // Warning | success | danger
      $this->session->set_flashdata($error);
    } else {
      $error = array();
      $error['error']['error_string']	= 'Houve um erro, Tente novamente!';
      $error['error']['error_type'] = 'danger'; // Warning | success | danger
      $this->session->set_flashdata($error);
    }
    redirect(base_url().'basic_configurations');
  }

	public function register_specific_legislation(){
		if (isset($_POST['register_specific_legislation'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->specific_legislation_model->insert($posts);

			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		} else {
			$error = array();
			$error['error']['error_string']	= 'Houve um erro, Tente novamente!';
			$error['error']['error_type'] = 'danger'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'basic_configurations');
	}

	public function update_checklist_protocol_entity(){
		if (isset($_POST['update_checklist_protocol_entity'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->specific_legislation_model->update_checklist_protocol_entity($posts);

			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		} else {
			$error = array();
			$error['error']['error_string']	= 'Houve um erro, Tente novamente!';
			$error['error']['error_type'] = 'danger'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'basic_configurations');
	}

}
