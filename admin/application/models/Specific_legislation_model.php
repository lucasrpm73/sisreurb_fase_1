<?php

class Specific_legislation_model extends CI_Model {

  public $table = 'specific_legislation';

  public function __construct(){
      parent::__construct();
  }

  public function insert($posts){
    $data = [
      'name' => $posts['name_legislation'],
      'link' => $posts['link_legislation'],
    ];
    $this->db->insert('specific_legislation', $data);
    return $this->db->insert_id();
  }

  public function update_checklist_protocol_entity($posts){
    $this->db->set('name', $posts['edit_name_legislation']);
    $this->db->set('link', $posts['edit_link_legislation']);
    $this->db->where('id', $posts['id_specific_legislation']);
    $this->db->update('specific_legislation');
  }

  public function fetch_specific_legislations(){
    $this->db->select('id, name, link');
    $this->db->from('specific_legislation');
    $query = $this->db->get();
    return $query->result();
  }

}
