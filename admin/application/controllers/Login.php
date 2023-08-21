<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
    $this->load->model("users_model");
		$this->load->library("myemail");
	}

	public function index()
	{
    if (isset($_POST['entrar'])) {
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
  			$user = $this->login->autentica($this->security->xss_clean($this->input->post()));
  			if ($user) {
          if (!$user['status']) {
            $error = "E-mail desativado";
            reportError($error, "danger", '');
            exit();
          }else{
            $this->session->set_userdata('user', $user);
            redirect(base_url('inicio'));
          }
  			} else {
          $error = "E-mail ou senha inválidos";
          reportError($error, "danger", '');
          exit();
  			}
  		} else {
  			$logado = $this->login->checkUser();

  			if (!$logado) {
  				$this->load->view('login');
  			} else {
  				redirect(base_url('inicio'));
  				exit();
  			}
  		}
    }

    if (isset($_POST['forgot_password'])) {
			$email = htmlspecialchars(preg_replace('/[^@-_.[:alnum:]_]/', '', $this->security->xss_clean($this->input->post('email'))));

			$string_aleatoria = substr(sha1(microtime()),1,rand(20,25));
		  $token = sha1($string_aleatoria);

			$data['login'] = $this->login->autentica_email($email);

			if (empty($data['login'])) {
        $error = "E-mail inválido";
        reportError($error, "danger", '');
        exit();
			}else{
				$insert = $this->login->insert_recover_password([
					'email' => $email,
					'token' => $token
				]);

				$this->myemail->email_recover_password($email, $token);

        $error = "E-mail enviado";
        reportError($error, "danger", '');
        exit();
        // redirect(base_url());
			}
		}

    $userdata = $this->session->get_userdata();
    if (!empty($userdata['usuario']['id'])) {
		  redirect("inicio");
    } else{
      $this->load->view('login/login');
    }
	}

  public function recover($token){
    if (isset($_POST['update_password'])) {
			$data['token'] = $this->login->autentica_token($token);

			if (empty($data['token'])) {
				echo "<script>alert('Token inexistente');
				window.location.href = '".base_url()."';</script>";
			}else{
				foreach ($data['token'] as $row) {
					$email = $row->email;
				}

        foreach ($data['token'] as $row) {
  				$email = $row->email;
  			}
  			$data['login'] = $this->login->autentica_login($email);
  			foreach ($data['login'] as $row) {
  				$id = $row->id;
  			}
  			$this->login->updateUser(array("password" => $this->security->xss_clean($this->input->post('nova_senha')), "id" => $id));

				$this->db->where('email', $email);
				$this->db->delete('recover_password');

				echo "<script>alert('Senha alterada com sucesso');
				window.location.href = '".base_url()."';</script>";
			}
		}

    $this->load->view('login/recover');
  }

  public function logout() {
    # logout user
    $this->session->unset_userdata('usuario');
    redirect(base_url());
    exit();
	}
}
