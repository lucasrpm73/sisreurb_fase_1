<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_hall extends CI_Controller {
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
		$this->load->model("upload_image_model");
	}

	public function index(){
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['city_halls'] = $this->city_hall_model->fetch_city_halls();
		$this->load->view('city_hall/list', $data);
	}

	public function register(){
		$this->load->view('city_hall/register');
	}

	public function register_city_hall(){
		if (isset($_POST['cadastrarPrefeitura'])) {
			$posts = $this->security->xss_clean($this->input->post());

			if ($_FILES["current_administration_logo"]['name'] != '') {
				$administration_logo = file_get_contents($_FILES["current_administration_logo"]['tmp_name']);
			} else {
				$administration_logo = 'perfil.png';
			}
			if ($_FILES["profile_city_hall"]['name'] != '') {
				$image = file_get_contents($_FILES["profile_city_hall"]['tmp_name']);
			} else {
				  $image = 'perfil.png';
			}
			$id_entity = $this->city_hall_model->insert($posts, $image, $administration_logo);
			$this->city_hall_model->insert_city_mayor($posts, $id_entity);
			$this->city_hall_model->insert_reurb_config($posts, $id_entity);

			$configurations = $this->city_hall_model->fetch_configurations();
			$this->city_hall_model->insert_documentos_prefeitura($configurations, $id_entity);

			if ($posts['password'] == $posts['repeat_password']) {
				$user = $this->city_hall_model->insert_users($posts, $id_entity);
				$this->city_hall_model->insert_address_user_entity($posts, $user);
			}

			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'city_hall/detail/'.$id_entity);
	}

	public function register_user(){
		if (isset($_POST['register_user'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$data = array(
				'cpf_account' => $posts['cpf'],
				'account_manager' => $posts['name'],
				'phone_account' => '',
				'email_account' => $posts['email'],
				'id_city_hall' => $posts['id_city_hall'],
				'password' => $posts['password'],
			);

			$this->city_hall_model->insert_users($data, $posts['id_city_hall']);

			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		redirect(base_url().'city_hall/detail/'.$posts['id_city_hall']);
		}
		redirect(base_url().'city_hall/');
	}

	public function detail($id){
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['city_hall'] = $this->city_hall_model->fetch_city_hall($id);
		$data['members_commission'] = $this->city_hall_model->fetch_members_commission($id);
		$data['notarys_office'] = $this->city_hall_model->fetch_notarys_office($id);
		$data['user'] = $this->city_hall_model->fetch_users($id);
		// var_dump($data['user']); die;
		$data['address_user_entity'] = $this->city_hall_model->fetch_address_user_entity($data['user']->id);
		$data['reurb_config'] = $this->city_hall_model->fetch_reurb_config($id);
		$data['documentos_prefeitura'] = $this->city_hall_model->fetch_documentos_prefeitura($id);
		$data['checklist_protocol_entity'] = $this->city_hall_model->fetch_checklist_protocol_entity($id);
		$data['users'] = $this->city_hall_model->fetch_all_users($id);

		$this->load->view('city_hall/detail', $data);
	}

	public function update_city_hall($id){
		if (isset($_POST['update_city_hall'])) {
			$posts = $this->security->xss_clean($this->input->post());
			// var_dump($posts['processing_office']);
			// die;
			// var_dump($_FILES); die;

			if ($_FILES["current_administration_logo"]['name'] != '') {
				$administration_logo = $this->upload_image_model->upload_img('current_administration_logo', 'assets/build/img/profile_city_hall', 'perfil.png');

				$this->city_hall_model->update_administration_logo($posts, $administration_logo);
			}

			if ($_FILES["profile_city_hall"]['name'] != '') {
				$logo = $this->upload_image_model->upload_img('profile_city_hall', 'assets/build/img/profile_city_hall', 'perfil.png');

				$this->city_hall_model->update_brasao($posts, $logo);
			}

			$this->city_hall_model->update_entity($posts);
			$this->city_hall_model->update_city_mayor($posts);
			$this->city_hall_model->update_user($posts);
			$this->city_hall_model->update_user_password($posts);
			$this->city_hall_model->update_user_address($posts);
			$this->city_hall_model->update_reurb_config($posts);

			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'city_hall/detail/'.$id);
	}

	public function update_checklist_config($id){
		if (isset($_POST['update_configuration'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->city_hall_model->update_checklist_doc_entity($posts);

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
		redirect(base_url().'city_hall/detail/'.$id);
	}

	public function update_checklist_protocol_entity($id){
		if (isset($_POST['update_configuration'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->city_hall_model->update_checklist_protocol_entity($posts);

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
		redirect(base_url().'city_hall/detail/'.$id);
	}

	public function register_document_requester(){
		if (isset($_POST['register_document_requester'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->city_hall_model->insert_document_city_hall($posts);

			$error = array();
			$error['error']['error_string']	= 'Adicionado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
			redirect(base_url().'city_hall/detail/'.$posts['id_city_hall']);
		} else {
			$error = array();
			$error['error']['error_string']	= 'Houve um erro, Tente novamente!';
			$error['error']['error_type'] = 'danger'; // Warning | success | danger
			$this->session->set_flashdata($error);
			redirect(base_url().'city_hall/');
		}
	}

	public function register_document_protocol(){
		if (isset($_POST['register_document_protocol'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->city_hall_model->insert_checklist_protocol($posts);

			$error = array();
			$error['error']['error_string']	= 'Adicionado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
			redirect(base_url().'city_hall/detail/'.$posts['id_city_hall']);
		} else {
			$error = array();
			$error['error']['error_string']	= 'Houve um erro, Tente novamente!';
			$error['error']['error_type'] = 'danger'; // Warning | success | danger
			$this->session->set_flashdata($error);
			redirect(base_url().'city_hall/');
		}
	}

}
