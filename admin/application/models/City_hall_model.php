<?php

class City_hall_model extends CI_Model {

  public $table = 'entity';

  public function __construct(){
      parent::__construct();
  }

  public function insert($posts, $image, $administration_logo){
    $data = [
      'cnpj' => $posts['CNPJTownHall'],
      'name' => $posts['nameTownHall'],
      'phone' => $posts['phoneTownHall'],
      'email' => $posts['emailTownHall'],
      'site' => $posts['siteTownHall'],
      'public_place' => $posts['publicPlaceTownHall'],
      'address' => $posts['addressTownHall'],
      'number' => $posts['addressNumberTownHall'],
      'complement' => $posts['complementTownHall'],
      'neighborhood' => $posts['neighborhoodTownHall'],
      'uf' => $posts['UFTownHall'],
      'city' => $posts['cityTownHall'],
      'cep' => $posts['CEPTownHall'],
      'nation' => $posts['countryTownHall'],
      'processing_office' => $posts['processing_office'],
      'img' => $image,
      'administration_logo' => $administration_logo,
      'status' => 1,
      // 'profile' => 1,
    ];
    $this->db->insert('entity', $data);
    return $this->db->insert_id();
  }

  public function insert_users($posts, $id_entity){
    $password = password_hash($posts['password'], PASSWORD_BCRYPT);
    $data = [
      'id_entity' => $id_entity,
      'cpf' => $posts['cpf_account'],
      'name' => $posts['account_manager'],
      'phone' => $posts['phone_account'],
      'email' => $posts['email_account'],
      'password' => $password,
      'profile' => '1',
      'status' => '1',
    ];
    $this->db->insert('users', $data);
    return $this->db->insert_id();
  }

  public function insert_city_mayor($posts, $id_entity){
    $data = [
      'id_entity' => $id_entity,
      'cpf' => $posts['CPFMayor'],
      'name' => $posts['nameMayor'],
      'rg' => $posts['RGMayor'],
      'dispatcher' => $posts['OEMayor'],
      'profission' => $posts['professionMayor'],
      'civil_status' => $posts['civil_status_Mayor'],
      'birth_date' => $posts['birthMayor'],
      'gender' => $posts['genderMayor'],
      'nacionality' => $posts['nationalityMayor'],
      'phone' => $posts['phoneNumberMayor'],
      'email' => $posts['emailMayor'],
      'type_street' => $posts['home_type_home'],
      'street' => $posts['home_public_place'],
      'number' => $posts['home_number_home'],
      'complement' => $posts['home_complement_home'],
      'neighborhood' => $posts['home_neighborhood_home'],
      'city' => $posts['home_city_home'],
      'cep' => $posts['home_cep_home'],
      'uf' => $posts['home_uf_home'],
      'country' => $posts['home_country_home'],
    ];
    $this->db->insert('city_mayor', $data);
    return $this->db->insert_id();
  }

  public function insert_address_user_entity($posts, $user){
    $data = [
      'id_user' => $user,
      'type_street' => $posts['account_type_home'],
      'street' => $posts['account_public_place'],
      'number' => $posts['account_number_home'],
      'complement' => $posts['account_complement_home'],
      'neighborhood' => $posts['account_neighborhood_home'],
      'city' => $posts['account_city_home'],
      'cep' => $posts['account_cep_home'],
      'uf' => $posts['account_uf_home'],
      'country' => $posts['account_country_home'],
    ];
    $this->db->insert('address_user_entity', $data);
    return $this->db->insert_id();
  }

  public function insert_president_commission($posts, $id_entity){
    $data = [
      'id_entity' => $id_entity,
      'cpf' => $posts['cpf_president'],
      'name' => $posts['name_president'],
      'rg' => $posts['rg_president'],
      'dispatcher' => $posts['oe_president'],
      'profission' => $posts['profession_president'],
      'birth_date' => $posts['birth_president'],
      'gender' => $posts['gender_president'],
      'nationality' => $posts['nationality_president'],
      'phone' => $posts['phoneNumber_president'],
      'email' => $posts['email_president'],
    ];
    $this->db->insert('president_commission', $data);
    return $this->db->insert_id();
  }

  public function insert_members_commission($posts, $id_entity){
    $name = $posts['name_CMRF'];
    foreach ($name as $key => $value) {
      $data = [
        'id_entity' => $id_entity,
        'cpf' => $posts['CPF_CMRF'][$key],
        'name' => $value,
        'rg' => $posts['RG_CMRF'][$key],
        'dispatcher' => $posts['OE_CMRF'][$key],
        'profission' => $posts['profession_CMRF'][$key],
        'birth_date' => $posts['birth_CMRF'][$key],
        'gender' => $posts['gender_CMRF'][$key],
        'nationality' => $posts['nationality_CMRF'][$key],
        'phone' => $posts['phoneNumber_CMRF'][$key],
        'email' => $posts['email_CMRF'][$key],
      ];
      $this->db->insert('members_commission', $data);
    }
    return $this->db->insert_id();
  }

  public function insert_reurb_config($posts, $id_entity){
    $data = [
      'id_entity' => $id_entity,
      'maximum_family_income' => $posts['maximum_family_income'],
    ];
    $this->db->insert('reurb_config', $data);
    return $this->db->insert_id();
  }

  public function insert_configuration($posts){
    $data = [
      'description' => $posts['description'],
      'type' => $posts['type'],
    ];
    $this->db->insert('checklist_documentos', $data);
    return $this->db->insert_id();
  }

  public function insert_configuration_protocol($posts){
    $data = [
      'description' => $posts['description'],
    ];
    $this->db->insert('checklist_protocol_commom', $data);
    return $this->db->insert_id();
  }

  public function insert_documentos_prefeitura($configurations, $id_entity){
    foreach ($configurations as $key => $value) {
      $data = [
        'id_entity' => $id_entity,
        'description' => $value->description,
        'type' => $value->type,
        'status' => '1',
      ];
      $this->db->insert('checklist_documentos_prefeitura', $data);
    }
  }

  public function insert_new_document_all_city_halls($city_halls, $posts){
    foreach ($city_halls as $key => $value) {
      $data = [
        'id_entity' => $value->id,
        'description' => $posts['description'],
        'type' => $posts['type'],
        'status' => '1',
      ];
      $this->db->insert('checklist_documentos_prefeitura', $data);
    }
  }

  public function insert_document_city_hall($posts){
    $data = [
      'id_entity' => $posts['id_city_hall'],
      'description' => $posts['description'],
      'type' => $posts['type'],
      'status' => '1',
    ];
    $this->db->insert('checklist_documentos_prefeitura', $data);
  }

  public function insert_new_checklist_protocol_all_city_halls($city_halls, $posts){
    foreach ($city_halls as $key => $value) {
      $data = [
        'id_entity' => $value->id,
        'description' => $posts['description'],
        'status' => '1',
      ];
      $this->db->insert('checklist_protocol_entity', $data);
    }
  }

  public function insert_checklist_protocol($posts){
    $data = [
      'id_entity' => $posts['id_city_hall'],
      'description' => $posts['description_protocol'],
      'status' => '1',
    ];
    $this->db->insert('checklist_protocol_entity', $data);
  }

  // public function insert_notarys_office($posts, $id_entity){
  //   $county = $posts['county_registry'];
  //   foreach ($county as $key => $value) {
  //     $data = [
  //       'id_entity' => $id_entity,
  //       'county' => $value,
  //       'judicial_district' => $posts['judicial_district'][$key],
  //       'type_place' => $posts['public_place_type_registry'][$key],
  //       'public_place' => $posts['public_place_registry'][$key],
  //       'number' => $posts['public_place_number_registry'][$key],
  //       'complement' => $posts['public_place_complement_registry'][$key],
  //       'neighborhood' => $posts['neighbourhood_registry'][$key],
  //       'city' => $posts['city_registry'][$key],
  //       'cep' => $posts['postal_code_registry'][$key],
  //       'uf' => $posts['UF_registry'][$key],
  //       'district' => $posts['district_registry'][$key],
  //       'nationality' => $posts['country_registry'][$key],
  //       'registration_officer' => $posts['registration_officer'][$key],
  //     ];
  //     $this->db->insert('notarys_office', $data);
  //   }
  //   return $this->db->insert_id();
  // }

  // public function update_notarys_office($posts){
  //   $county = $posts['edit_county_registry'];
  //   foreach ($county as $key => $value) {
  //     $this->db->set('county', $value);
  //     $this->db->set('judicial_district', $posts['edit_judicial_district'][$key]);
  //     $this->db->set('type_place', $posts['edit_public_place_type_registry'][$key]);
  //     $this->db->set('public_place', $posts['edit_public_place_registry'][$key]);
  //     $this->db->set('complement', $posts['edit_public_place_complement_registry'][$key]);
  //     $this->db->set('neighborhood', $posts['edit_neighbourhood_registry'][$key]);
  //     $this->db->set('city', $posts['edit_city_registry'][$key]);
  //     $this->db->set('cep', $posts['edit_postal_code_registry'][$key]);
  //     $this->db->set('uf', $posts['edit_UF_registry'][$key]);
  //     $this->db->set('district', $posts['edit_district_registry'][$key]);
  //     $this->db->set('nationality', $posts['edit_country_registry'][$key]);
  //     $this->db->set('registration_officer', $posts['edit_registration_officer'][$key]);
  //     $this->db->where('id', $posts['id_notaries'][$key]);
  //     $this->db->update('notarys_office');
  //   }
  // }

  public function update_entity($posts){
    $this->db->set('name', $posts['nameTownHall']);
    $this->db->set('phone', $posts['phoneTownHall']);
    $this->db->set('email', $posts['emailTownHall']);
    $this->db->set('site', $posts['siteTownHall']);
    $this->db->set('cnpj', $posts['CNPJTownHall']);
    $this->db->set('public_place', $posts['publicPlaceTownHall']);
    $this->db->set('address', $posts['addressTownHall']);
    $this->db->set('number', $posts['addressNumberTownHall']);
    $this->db->set('complement', $posts['complementTownHall']);
    $this->db->set('neighborhood', $posts['neighborhoodTownHall']);
    $this->db->set('uf', $posts['UFTownHall']);
    $this->db->set('city', $posts['cityTownHall']);
    $this->db->set('cep', $posts['CEPTownHall']);
    $this->db->set('nation', $posts['countryTownHall']);
    $this->db->set('processing_office', $posts['processing_office']);
    $this->db->set('status', $posts['situation']);
    $this->db->where('id', $posts['id_entity']);
    $this->db->update('entity');
  }

  public function update_brasao($posts, $image){
    $this->db->set('img', $image);
    $this->db->where('id', $posts['id_entity']);
    $this->db->update('entity');
  }

  public function update_administration_logo($posts, $administration_logo){
    $this->db->set('administration_logo', $administration_logo);
    // $this->db->set('administration_logo', $administration_logo);
    $this->db->where('id', $posts['id_entity']);
    $this->db->update('entity');
  }

  public function update_city_mayor($posts){
    $this->db->set('cpf', $posts['CPFMayor']);
    $this->db->set('name', $posts['nameMayor']);
    $this->db->set('rg', $posts['RGMayor']);
    $this->db->set('dispatcher', $posts['OEMayor']);
    $this->db->set('profission', $posts['professionMayor']);
    $this->db->set('birth_date', $posts['birthMayor']);
    $this->db->set('gender', $posts['genderMayor']);
    $this->db->set('nacionality', $posts['nationalityMayor']);
    $this->db->set('civil_status', $posts['civil_status_Mayor']);
    $this->db->set('phone', $posts['phoneNumberMayor']);
    $this->db->set('email', $posts['emailMayor']);
    $this->db->set('type_street', $posts['home_type_home']);
    $this->db->set('street', $posts['home_public_place']);
    $this->db->set('number', $posts['home_number_home']);
    $this->db->set('complement', $posts['home_complement_home']);
    $this->db->set('neighborhood', $posts['home_neighborhood_home']);
    $this->db->set('city', $posts['home_city_home']);
    $this->db->set('cep', $posts['home_cep_home']);
    $this->db->set('uf', $posts['home_uf_home']);
    $this->db->set('country', $posts['home_country_home']);
    $this->db->where('id', $posts['id_mayor']);
    $this->db->update('city_mayor');
  }

  public function update_president_commission($posts){
    $this->db->set('cpf', $posts['edit_cpf_president']);
    $this->db->set('name', $posts['edit_name_president']);
    $this->db->set('rg', $posts['edit_rg_president']);
    $this->db->set('dispatcher', $posts['edit_oe_president']);
    $this->db->set('profission', $posts['edit_profession_president']);
    $this->db->set('birth_date', $posts['edit_birth_president']);
    $this->db->set('gender', $posts['edit_gender_president']);
    $this->db->set('nationality', $posts['edit_nationality_president']);
    $this->db->set('phone', $posts['edit_phoneNumber_president']);
    $this->db->set('email', $posts['edit_email_president']);
    $this->db->where('id', $posts['id_president']);
    $this->db->update('president_commission');
  }

  public function update_user($posts){
    $this->db->set('name', $posts['account_manager']);
    $this->db->set('cpf', $posts['cpf_account']);
    $this->db->set('phone', $posts['phone_account']);
    $this->db->set('email', $posts['email_account']);
    $this->db->where('id', $posts['id_user']);
    $this->db->update('users');
  }

  public function update_user_password($posts){
    $password = password_hash($posts['password'], PASSWORD_BCRYPT);
    if ($posts['password'] != '' && $posts['repeat_password'] != '') {
      $this->db->set('password', $password);
      $this->db->where('id', $posts['id_user']);
      $this->db->update('users');
    }
  }

  public function update_members_commission($posts){
    $cpf = $posts['edit_CPF_CMRF'];
    foreach ($cpf as $key => $value) {
      $this->db->set('cpf', $value);
      $this->db->set('name', $posts['edit_name_CMRF'][$key]);
      $this->db->set('rg', $posts['edit_RG_CMRF'][$key]);
      $this->db->set('dispatcher', $posts['edit_OE_CMRF'][$key]);
      $this->db->set('profission', $posts['edit_profession_CMRF'][$key]);
      $this->db->set('birth_date', $posts['edit_birth_CMRF'][$key]);
      $this->db->set('gender', $posts['edit_gender_CMRF'][$key]);
      $this->db->set('nationality', $posts['edit_nationality_CMRF'][$key]);
      $this->db->set('phone', $posts['edit_phoneNumber_CMRF'][$key]);
      $this->db->set('email', $posts['edit_email_CMRF'][$key]);
      $this->db->where('id', $posts['id_members'][$key]);
      $this->db->update('members_commission');
    }
  }

  public function update_user_address($posts){
    $this->db->set('type_street', $posts['account_type_home']);
    $this->db->set('street', $posts['account_public_place']);
    $this->db->set('number', $posts['account_number_home']);
    $this->db->set('complement', $posts['account_complement_home']);
    $this->db->set('neighborhood', $posts['account_neighborhood_home']);
    $this->db->set('city', $posts['account_city_home']);
    $this->db->set('cep', $posts['account_cep_home']);
    $this->db->set('uf', $posts['account_uf_home']);
    $this->db->set('country', $posts['account_country_home']);
    $this->db->where('id', $posts['id_address_user']);
    $this->db->update('address_user_entity');
  }

  public function update_reurb_config($posts){
    $this->db->set('maximum_family_income', $posts['maximum_family_income']);
    $this->db->where('id', $posts['id_reurb_config']);
    $this->db->update('reurb_config');
  }

  public function update_checklist_config($posts){
    $this->db->set('description', $posts['edit_description']);
    $this->db->where('id', $posts['id_config']);
    $this->db->update('checklist_documentos');
  }

  public function update_checklist_protocol_config($posts){
    $this->db->set('description', $posts['edit_description']);
    $this->db->where('id', $posts['id_config']);
    $this->db->update('checklist_protocol_commom');
  }

  public function update_checklist_doc_entity($posts){
    $this->db->set('description', $posts['edit_description']);
    $this->db->set('status', $posts['status']);
    $this->db->where('id', $posts['id_config']);
    $this->db->update('checklist_documentos_prefeitura');
  }

  public function update_checklist_protocol_entity($posts){
    $this->db->set('description', $posts['edit_description']);
    $this->db->set('status', $posts['status']);
    $this->db->where('id', $posts['id_config']);
    $this->db->update('checklist_protocol_entity');
  }

  public function fetch_ids_city_halls(){
    $this->db->select('id');
    $this->db->from('entity');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_city_halls(){
    $this->db->select('e.id, e.name as entity_name, e.cnpj, e.country, e.public_place,
      e.address, e.number, e.complement, e.neighborhood,
      e.uf, e.city, e.cep, e.uf, e.destrict, e.nation, e.status,
      c.cpf, c.name, c.rg, c.dispatcher, c.profission, c.birth_date, c.gender, c.nacionality, c.phone, c.email,
    ');
    $this->db->from('entity as e');
    $this->db->join('city_mayor as c', 'c.id_entity = e.id', 'left');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_notarys_office($id){
    $this->db->select('n.id, n.country, n.judicial_district, n.type_place, n.public_place, n.number, n.complement, n.neighborhood, n.city, n.cep, n.uf, n.district, n.nationality, n.registration_officer,');
    $this->db->from('notarys_office as n');
    $this->db->where('n.id_entity', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_city_hall($id){
    $this->db->select('e.id, e.cnpj, e.country, e.public_place, e.address, e.number, e.complement, e.neighborhood, e.uf, e.city, e.cep, e.destrict, e.nation, e.img, e.administration_logo, e.status,
      e.processing_office,
      c.civil_status, e.name as name_entity, e.phone as phone_entity, e.email as email_entity, e.site as site_entity,
      c.id as id_mayor, c.cpf, c.name, c.rg, c.dispatcher, c.profission, c.birth_date, c.gender, c.nacionality, c.phone, c.email,
      c.type_street as type_street_mayor, c.street as street_mayor, c.number as number_mayor, c.complement as complement_mayor, c.neighborhood as neighborhood_mayor,
      c.city as city_mayor, c.cep as cep_mayor, c.uf as uf_mayor, c.country as country_mayor,
      p.id as id_president, p.cpf as cpf_president, p.name as name_president, p.rg as rg_president, p.dispatcher as dispatcher_president, p.profission as profission_president, p.birth_date as birth_date_president, p.gender as gender_president, p.nationality as nationality_president, p.phone as phone_president, p.email as email_president,
    ');
    $this->db->from('entity as e');
    $this->db->join('city_mayor as c', 'c.id_entity = e.id', 'left');
    $this->db->join('president_commission as p', 'p.id_entity = e.id', 'left');
    $this->db->where('e.id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_members_commission($id){
    $this->db->select('m.id, m.cpf, m.name, m.rg, m.dispatcher, m.profission, m.birth_date, m.gender, m.nationality, m.phone, m.email');
    $this->db->from('members_commission as m');
    $this->db->where('m.id_entity', $id);
    $query = $this->db->get();
    return $query->result();
  }

	public function fetch_all_users($id){
		$this->db->select('id, cpf, name, phone, email, status');
		$this->db->from('users');
		$this->db->where('id_entity', $id);
		// $this->db->where('profile', '1');
		$query = $this->db->get();
		return $query->result();
	}

  public function fetch_users($id){
    $this->db->select('id, cpf, name, phone, email, status');
    $this->db->from('users');
    $this->db->where('id_entity', $id);
    $this->db->where('profile', '1');
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_address_user_entity($id){
    $this->db->select('id, type_street, street, number, complement, neighborhood, city, cep, uf, country');
    $this->db->from('address_user_entity');
    $this->db->where('id_user', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_reurb_config($id){
    $this->db->select('id, maximum_family_income');
    $this->db->from('reurb_config');
    $this->db->where('id_entity', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_configurations(){
    $this->db->select('id, description, type');
    $this->db->from('checklist_documentos');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_configurations_protocol(){
    $this->db->select('id, description');
    $this->db->from('checklist_protocol_commom');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_documentos_prefeitura($id){
    $this->db->select('id, description, type, status');
    $this->db->from('checklist_documentos_prefeitura');
    $this->db->where('id_entity', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_checklist_protocol_entity($id){
    $this->db->select('id, description, status');
    $this->db->from('checklist_protocol_entity');
    $this->db->where('id_entity', $id);
    $query = $this->db->get();
    return $query->result();
  }

}
