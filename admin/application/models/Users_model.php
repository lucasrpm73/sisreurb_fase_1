<?php
class users_model extends CI_Model {

  public $table = 'admin';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_users(){
    $this->db->select('u.id, u.name, u.email, t.description');
    $this->db->from('admin as u');
    $this->db->join('type_register as t', 'u.profile = t.profile');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_user($id){
    $this->db->select('id, name, email, note, profile, status');
    $this->db->from('admin');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function update_user($rows){
    $this->db->set('name', $rows['name']);
    $this->db->set('email', $rows['email']);
    $this->db->set('profile', $rows['profile']);
    $this->db->set('note', $rows['note']);
    $this->db->set('status', $rows['status']);
		$this->db->where('id', $rows['id_user']);
		$this->db->update('admin');
  }

}
