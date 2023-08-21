<?php $this->load->view('elements/header');?>
<div class="wrapper ">
  <?php $this->load->view('elements/sidebar_lateral');?>
  <?php $this->load->view('elements/sidebar');?>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- INI: AVISOS -->
        <?php if (!empty($error)) { ?>
        <div class="alert alert-<?php echo $error['error_type']; ?>" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $error['error_string']; ?>
        </div>
        <?php } ?>
        <!-- INI: AVISOS -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form action="<?php echo base_url(); ?>city_hall/update_city_hall/<?php echo $city_hall->id; ?>" method="post" enctype="multipart/form-data">
            <div class="card-header">
              <div class="col-md-12">
                <div class="row">
                  <h5 class="card-title d-inline">Detalhe de prefeitura / entidade</h5>
                  <button type="submit" name="update_city_hall" id="cadastrarPrefeitura"
                    class="btn btn-primary btn-round float-md-right float-sm-right float-xs-right ml-auto">Atualizar</button>
                </div>
              </div>
              <!-- <hr> -->
            </div>

            <div class="card-body">
              <ul class="nav nav-tabs" id="tabCadastro" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="EntityTownHall" data-toggle="tab" href="#entityTownHall_tab" role="tab"
                    aria-controls="Prefeitura" aria-selected="true">Prefeitura/Entidade</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="mayorRegister" data-toggle="tab" href="#mayorRegister_tab" role="tab"
                    aria-controls="Prefeito" aria-selected="false">Prefeito Municipal/Representante Legal</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="reurb_config_tab" data-toggle="tab" href="#reurb_config" role="tab"
                    aria-controls="reurb_config" aria-selected="false">Configurações da Reurb</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="basic_config_tab" data-toggle="tab" href="#basic_config" role="tab"
                    aria-controls="basic_config" aria-selected="false">Configurações Básicas</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="user_marter_tab" data-toggle="tab" href="#user_master" role="tab"
                    aria-controls="user_master" aria-selected="false">Usuário master</a>
                </li>
								<li class="nav-item" role="presentation">
                  <a class="nav-link" id="all_user" data-toggle="tab" href="#users" role="tab"
                    aria-controls="users" aria-selected="false">Usúarios</a>
                </li>
              </ul>

              <div class="tab-content" id="tabContent">
                <div class="tab-pane show active" id="entityTownHall_tab" role="tabpanel"
                  aria-labelledby="EntityTownHall">

                  <div class="col-md-12">
                    <div class="row mt-3">
                      <div class="col-md pr-md-1">
                        <div class="form-group">
                          <label for="CNPJTownHall">CNPJ</label>
                          <input type="text" name="CNPJTownHall" id="CNPJTownHall" class="form-control"
                            value="<?php echo $city_hall->cnpj; ?>">
                          <?php echo form_error('CNPJTownHall'); ?>
                          <input type="hidden" name="id_entity" value="<?php echo $city_hall->id; ?>">
                        </div>
                      </div>
                      <div class="col-md pl-md-1">
                        <div class="form-group">
                          <label for="nameTownHall">Nome</label>
                          <input type="text" name="nameTownHall" id="nameTownHall" class="form-control"
                            value="<?php echo $city_hall->name_entity; ?>">
                          <?php echo form_error('nameTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 pr-1">
                        <div class="form-group">
                          <label for="phoneTownHall">Telefone</label>
                          <input type="text" name="phoneTownHall" id="phoneTownHall" class="form-control phone"
                            value="<?php echo $city_hall->phone_entity; ?>">
                          <?php echo form_error('phoneTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="emailTownHall">Email</label>
                          <input type="text" name="emailTownHall" id="emailTownHall" class="form-control"
                            value="<?php echo $city_hall->email_entity; ?>">
                          <?php echo form_error('emailTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pl-1">
                        <div class="form-group">
                          <label for="siteTownHall">Site</label>
                          <input type="text" name="siteTownHall" id="siteTownHall" class="form-control"
                            value="<?php echo $city_hall->site_entity; ?>">
                          <?php echo form_error('siteTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 pr-md-1">
                        <div class="form-group">
                          <label for="addressTownHall">Tipo de logradouro</label>
                          <select name="addressTownHall" class="custom-select" id="addressTownHall">
                            <option value=""></option>
                            <option value="Alameda" <?= ($city_hall->address == 'Alameda') ? 'selected':''; ?>>Alameda</option>
                            <option value="Avenida" <?= ($city_hall->address == 'Avenida') ? 'selected':''; ?>>Avenida</option>
                            <option value="Praça" <?= ($city_hall->address == 'Praça') ? 'selected':''; ?>>Praça</option>
                            <option value="Rua" <?= ($city_hall->address == 'Rua') ? 'selected':''; ?>>Rua</option>
                            <option value="Travessa" <?= ($city_hall->address == 'Travessa') ? 'selected':''; ?>>Travessa</option>
                            <option value="Via" <?= ($city_hall->address == 'Via') ? 'selected':''; ?>>Via</option>
                            <option value="Viela" <?= ($city_hall->address == 'Viela') ? 'selected':''; ?>>Viela</option>
                            <option value="Rua" <?= ($city_hall->address == 'Rua') ? 'selected':''; ?>>Rua</option>
                            <option value="Avenida" <?= ($city_hall->address == 'Avenida') ? 'selected':''; ?>>Avenida</option>
                            <option value="Travessa" <?= ($city_hall->address == 'Travessa') ? 'selected':''; ?>>Travessa</option>
                            <option value="Outro" <?= ($city_hall->address == 'Outro') ? 'selected':''; ?>>Outro</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md px-md-1">
                        <div class="form-group">
                          <label for="publicPlaceTownHall">Logradouro</label>
                          <input type="text" name="publicPlaceTownHall" id="publicPlaceTownHall" class="form-control"
                            value="<?php echo $city_hall->public_place; ?>">
                          <?php echo form_error('publicPlaceTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-2 pl-md-1">
                        <div class="form-group">
                          <label for="addressNumberTownHall">Número</label>
                          <input type="text" name="addressNumberTownHall" id="addressNumberTownHall"
                            class="form-control" value="<?php echo $city_hall->number; ?>">
                          <?php echo form_error('addressNumberTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 pr-md-1">
                        <div class="form-group">
                          <label for="complementTownHall">Complemento</label>
                          <input type="text" name="complementTownHall" id="complementTownHall" class="form-control"
                            value="<?php echo $city_hall->complement; ?>">
                          <?php echo form_error('complementTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-6 pl-md-1">
                        <div class="form-group">
                          <label for="neighborhoodTownHall">Bairro</label>
                          <input type="text" name="neighborhoodTownHall" id="neighborhoodTownHall" class="form-control"
                            value="<?php echo $city_hall->neighborhood; ?>">
                          <?php echo form_error('neighborhoodTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md pr-md-1 ">
                        <div class="form-group">
                          <label for="cityTownHall">Cidade</label>
                          <input type="text" name="cityTownHall" id="cityTownHall" class="form-control"
                            value="<?php echo $city_hall->city; ?>">
                          <?php echo form_error('cityTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md px-md-1">
                        <div class="form-group">
                          <label for="CEPTownHall">CEP</label>
                          <input type="text" name="CEPTownHall" id="CEPTownHall" class="form-control cep"
                            value="<?php echo $city_hall->cep; ?>">
                          <?php echo form_error('CEPTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-2 pl-md-1">
                        <div class="form-group">
                          <label for="UFTownHall">UF</label>
                          <input name="UFTownHall" type="text" class="form-control"
                            value="<?php echo $city_hall->uf; ?>" id="UFTownHall">
                        </div>
                      </div>
                    </div>
                    <div class="row my-2">
                      <div class="col-md-12">
                        <label for="countryTownHall">País</label>
                        <select name="countryTownHall" class="custom-select" id="countryTownHall">
                          <option value="<?php echo $city_hall->nation; ?>" selected><?php echo $city_hall->nation; ?>
                          </option>
                          <option value="Brasil">Brasil</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="">Situacao **</label>
                          <select  name="situation" class="custom-select" id="situation">
                            <option value=""></option>
                            <option value="1" <?php echo ($city_hall->status == '1') ? 'selected' : ''; ?>>Ativado</option>
                            <option value="0" <?php echo ($city_hall->status == '0') ? 'selected' : ''; ?>>Desativado</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="processing_office">Secretaria de Processamento</label>
                          <input type="text" name="processing_office" class="form-control" value="<?php echo $city_hall->processing_office; ?>" id="processing_office" autocomplete="off">
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="row mt-3 ml-1">
                    <div class="col-md-2 mr-5">
                      <label for="">Brasão do Município</label>
                      <label class="newimgum">
                        <img src="<?php echo base_url(); ?>assets/build/img/profile_city_hall/<?php echo $city_hall->img ?>" class="icone_perfil" id="imgum">
                        <input type="file" id="picimgum" class='pis' name="profile_city_hall" style="display:none;">
                      </label>
                    </div>

                    <div class="col-md-4">
                      <label for="">Logo da Atual Administração</label><br>
                      <label class="newimgdois">
                        <img src="<?php echo base_url(); ?>assets/build/img/profile_city_hall/<?php echo $city_hall->administration_logo ?>" class="icone_perfil" id="imgdois">
                        <input id="picimgdois" class='pis' name="current_administration_logo" type="file" style="display:none;">
                      </label>
                    </div>

                  </div>
                </div>

                <div class="tab-pane " id="mayorRegister_tab" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="col-md-12">
                    <div class="row mt-3">
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="CPFMayor">CPF</label>
                          <input type="text" name="CPFMayor" id="CPFMayor" class="form-control cpf"
                          value="<?php echo $city_hall->cpf; ?>">
                          <?php echo form_error('CPFMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="nameMayor">Nome</label>
                          <input type="text" name="nameMayor" id="nameMayor" class="form-control"
                          value="<?php echo $city_hall->name; ?>">
                          <?php echo form_error('nameMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-2 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="RGMayor">R.G</label>
                          <input type="text" name="RGMayor" id="RGMayor" class="form-control"
                          value="<?php echo $city_hall->rg; ?>">
                          <?php echo form_error('RGMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-2 pr-1 pl-md-1">
                        <div class="form-group">
                          <label for="OEMayor">Órgão Expeditor</label>
                          <input type="text" name="OEMayor" id="OEMayor" class="form-control"
                          value="<?php echo $city_hall->dispatcher; ?>">
                          <?php echo form_error('OEMayor'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="professionMayor">Profissão</label>
                          <input type="text" name="professionMayor" id="professionMayor" class="form-control"
                          value="<?php echo $city_hall->profission; ?>">
                          <?php echo form_error('professionMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="birthMayor">Data de nascimento</label>
                          <input type="date" name="birthMayor" id="birthMayor" class="form-control"
                          value="<?php echo $city_hall->birth_date; ?>">
                          <?php echo form_error('birthMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pr-1 pl-md-1">
                        <div class="form-group">
                          <label for="genderMayor">Gênero</label>
                          <select name="genderMayor" class="custom-select" id="genderMayor">
                            <option value="<?php echo $city_hall->gender; ?>">
                              <?php echo ($city_hall->gender == 'M') ? 'Masculino' : 'Feminino'; ?></option>
                              <?php if ($city_hall->gender == 'M'): ?>
                                <option value="Feminino">Feminino</option>
                              <?php else: ?>
                                <option value="Masculino">Masculino</option>
                              <?php endif; ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 pr-1 pl-md-1">
                          <div class="form-group">
                            <label for="nationalityMayor">Nacionalidade</label>
                            <select name="nationalityMayor" class="custom-select" id="nationalityMayor">
                              <option value="<?php echo $city_hall->nacionality; ?>">
                                <?php echo $city_hall->nacionality; ?></option>
                                <option value="Brasileira" selected>Brasileira</option>
                                <option value="Estrangeira">Estrangeira</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3 pr-1 pl-md-1">
                            <div class="form-group">
                              <label for="civil_status_Mayor">Estado Civil</label>
                              <select name="civil_status_Mayor" class="custom-select" id="civil_status_Mayor">
                                <option value=""></option>
                                <option value="Casado(a)" <?= ($city_hall->civil_status == 'Casado(a)') ? 'selected' : ''; ?>>Casado(a)</option>
                                <option value="Solteiro(a)" <?= ($city_hall->civil_status == 'Solteiro(a)') ? 'selected' : ''; ?>>Solteiro(a)</option>
                                <option value="Separado(a)" <?= ($city_hall->civil_status == 'Separado(a)') ? 'selected' : ''; ?>>Separado(a)</option>
                                <option value="Divorciado(a)" <?= ($city_hall->civil_status == 'Divorciado(a)') ? 'selected' : ''; ?>>Divorciado(a)</option>
                                <option value="Viúvo(a)" <?= ($city_hall->civil_status == 'Viúvo(a)') ? 'selected' : ''; ?>>Viúvo(a)</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3 pl-md-1 pr-1">
                            <div class="form-group">
                              <label for="phoneNumberMayor">Telefone</label>
                              <input type="text" name="phoneNumberMayor" id="phoneNumberMayor" class="form-control phone"
                              value="<?php echo $city_hall->phone; ?>">
                              <?php echo form_error('phoneNumberMayor'); ?>
                            </div>
                          </div>
                          <div class="col-md-3 pr-1 pl-md-1">
                            <div class="form-group">
                              <label for="emailMayor">Email</label>
                              <input type="text" name="emailMayor" id="emailMayor" class="form-control"
                              value="<?php echo $city_hall->email; ?>">
                              <?php echo form_error('emailMayor'); ?>
                              <input type="hidden" name="id_mayor" value="<?php echo $city_hall->id_mayor; ?>">
                            </div>
                          </div>
                        </div>
                        <h4 class="text-dark">Endereço Residencial</h4>
                        <div class="row mt-3">
                          <div class="col-md pr-md-1">
                            <div class="form-group">
                              <label for="home_type_home">Tipo de logradouro</label>
                              <select class="form-control" name="home_type_home" id="home_type_home">
                                <option value=""></option>
                                <option value="Alameda" <?= ($city_hall->type_street_mayor == 'Alameda') ? 'selected' : ''; ?>>Alameda</option>
                                <option value="Avenida" <?= ($city_hall->type_street_mayor == 'Avenida') ? 'selected' : ''; ?>>Avenida</option>
                                <option value="Praça" <?= ($city_hall->type_street_mayor == 'Praça') ? 'selected' : ''; ?>>Praça</option>
                                <option value="Rua" <?= ($city_hall->type_street_mayor == 'Rua') ? 'selected' : ''; ?>>Rua</option>
                                <option value="Travessa" <?= ($city_hall->type_street_mayor == 'Travessa') ? 'selected' : ''; ?>>Travessa</option>
                                <option value="Via" <?= ($city_hall->type_street_mayor == 'Via') ? 'selected' : ''; ?>>Via</option>
                                <option value="Viela" <?= ($city_hall->type_street_mayor == 'Viela') ? 'selected' : ''; ?>>Viela</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4 px-md-1">
                            <div class="form-group">
                              <label for="home_address_home">Logradouro</label>
                              <input type="text" name="home_public_place" id="home_public_place" class="form-control"
                                value="<?= $city_hall->street_mayor; ?>">
                              <?php echo form_error('home_public_place'); ?>
                            </div>
                          </div>
                          <div class="col-md pl-md-1">
                            <div class="form-group">
                              <label for="home_number_home">Numero</label>
                              <input type="text" name="home_number_home" id="home_number_home" class="form-control"
                                value="<?= $city_hall->number_mayor; ?>">
                              <?php echo form_error('home_number_home'); ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md pr-md-1">
                            <div class="form-group">
                              <label for="home_complement_home">Complemento</label>
                              <input type="text" name="home_complement_home" id="home_complement_home"
                                class="form-control" value="<?= $city_hall->complement_mayor; ?>">
                              <?php echo form_error('home_complement_home'); ?>
                            </div>
                          </div>
                          <div class="col-md pl-md-1">
                            <div class="form-group">
                              <label for="home_neighborhood_home">Bairro</label>
                              <input type="text" name="home_neighborhood_home" id="home_neighborhood_home"
                                class="form-control" value="<?= $city_hall->neighborhood_mayor; ?>">
                              <?php echo form_error('home_neighborhood_home'); ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md pr-md-1">
                            <div class="form-group">
                              <label for="home_city_home">Cidade</label>
                              <input type="text" name="home_city_home" id="home_city_home" class="form-control"
                                value="<?= $city_hall->city_mayor; ?>">
                              <?php echo form_error('home_city_home'); ?>
                            </div>
                          </div>
                          <div class="col-md px-md-1">
                            <div class="form-group">
                              <label for="home_cep_home">CEP</label>
                              <input type="text" name="home_cep_home" id="home_cep_home" class="form-control cep"
                                value="<?= $city_hall->cep_mayor; ?>">
                              <?php echo form_error('home_cep_home'); ?>
                            </div>
                          </div>
                          <div class="col-md pl-md-1">
                            <div class="form-group">
                              <label for="home_uf_home">UF</label>
                              <input type="text" name="home_uf_home" id="home_uf_home" class="form-control"
                                value="<?= $city_hall->uf_mayor; ?>">
                              <?php echo form_error('home_uf_home'); ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <label for="home_country_home">País</label>
                              <input type="text" name="home_country_home" id="home_country_home" class="form-control"
                                value="<?= $city_hall->country_mayor; ?>">
                              <?php echo form_error('home_country_home'); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane " id="basic_config" role="tabpanel" aria-labelledby="basic_config">
                      <div class="row mt-2 text-dark">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <h5 class="d-inline">Checklist do requerente</h5>
                              <button type="button" name="button"
                                class="btn btn-primary float-right"
                                data-toggle="modal" data-target="#modal_adicionar_documento"
                                >
                                Inserir documento exclusivo do requerente
                              </button>
                            </div>
                          </div>
                          <table id="tabelaUm" class="table table-striped table-bordered w-100">
                            <thead class=" text-primary">
                              <tr>
                                <th scope="col">Descrição</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Status</th>
                                <th scope="col">Editar</th>
                              </tr>
                            </thead>
                            <tbody >
                              <?php foreach ($documentos_prefeitura as $row): ?>
                                <tr>
                                  <td><?php echo $row->description; ?></td>
                                  <td><?php if($row->type==1){ echo "Pessoa física";} else if($row->type==2){echo "Pessoa jurídica";} ?></td>
                                  <td class="font-weight-bold"
                                    <?php echo ($row->status == '1') ? 'style="color: #1e73b7;"' : 'style="color: red;"'; ?>>
                                    <?php echo ($row->status == '1') ? 'Ativado' : 'Desativado'; ?>
                                  </td>
                                  <td>
                                    <a href="" id="edit_basic_configuration" data-toggle="modal" data-target="#modal_edit_document"
                                      data-id="<?php echo $row->id; ?>" data-description="<?php echo $row->description; ?>"
                                      data-status="<?php echo $row->status; ?>">
                                        <i class="fa fa-search"></i>
                                    </a>
                                  </td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="row mt-2 text-dark">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <h5 class="d-inline">Checklist do protocolo</h5>
                              <button type="button" name="button"
                                class="btn btn-primary float-right"
                                data-toggle="modal" data-target="#modal_adicionar_documento_protocolo"
                                >
                                Inserir documento exclusivo do protocolo
                              </button>
                            </div>
                          </div>
                          <table id="tabelaUm" class="table table-striped table-bordered w-100">
                            <thead class=" text-primary">
                              <tr>
                                <th scope="col">Descrição</th>
                                <th scope="col">Status</th>
                                <th scope="col">Editar</th>
                              </tr>
                            </thead>
                            <tbody >
                              <?php foreach ($checklist_protocol_entity as $row): ?>
                                <tr>
                                  <td><?php echo $row->description; ?></td>
                                  <td class="font-weight-bold"
                                    <?php echo ($row->status == '1') ? 'style="color: #1e73b7;"' : 'style="color: red;"'; ?>>
                                    <?php echo ($row->status == '1') ? 'Ativado' : 'Desativado'; ?>
                                  </td>
                                  <td>
                                    <a href="" id="edit_basic_configuration_protocol" data-toggle="modal" data-target="#modal_edit_document_protocol"
                                      data-id="<?php echo $row->id; ?>" data-description="<?php echo $row->description; ?>"
                                      data-status="<?php echo $row->status; ?>">
                                        <i class="fa fa-search"></i>
                                    </a>
                                  </td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane " id="users" role="tabpanel" aria-labelledby="users">
											<div class="row">
												<div class="col-md-12">
													<button type="button" class="btn btn-primary"
															data-toggle="modal" data-target="#register_users">
														Cadastrar
													</button>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<table class="table table-striped text-dark">
														<thead>
															<tr>
																<th>Nome</th>
																<th>Email</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($users as $row): ?>
																<tr>
																	<td><?php echo $row->name; ?></td>
																	<td><?php echo $row->email; ?></td>
																</tr>
															<?php endforeach; ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
                    <div class="tab-pane " id="user_master" role="tabpanel" aria-labelledby="user_master">
                      <div class="row pt-2">
                        <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                            <label for="cpf_account">CPF</label>
                            <input type="text" name="cpf_account" id="cpf_account" value="<?= $user->cpf; ?>" class="form-control cpf"
                              >
                          </div>
                        </div>
                        <div class="col-md-4 px-md-1">
                          <div class="form-group">
                            <label for="account_manager">Responsavel da conta</label>
                            <input type="text" name="account_manager" id="account_manager" value="<?= $user->name; ?>" class="form-control"
                              >
                          </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                          <div class="form-group">
                            <label for="phone_account">Telefone</label>
                            <input type="text" name="phone_account" id="phone_account" value="<?= $user->phone; ?>" class="form-control phone"
                              >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                            <label for="email_account">Email</label>
                            <input type="email" name="email_account" id="email_account" value="<?= $user->email; ?>"
                            class="form-control">
                            <input type="hidden" name="id_user" id="id_user" value="<?= $user->id; ?>">
                          </div>
                        </div>
                        <div class="col-md-4 px-md-1">
                          <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" value="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                          <div class="form-group">
                            <label for="repeat_password">Repita a senha</label>
                            <input type="password" name="repeat_password" id="repeat_password" value="" class="form-control">
                          </div>
                          <div class="row" id="error_password" style="display: none;">
                            <div class="col-md-12">
                              <p style="color: red !important;">As senhas devem ser iguais!!</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h4 class="text-dark">Endereço Residencial</h4>
                      <div class="row mt-3">
                        <div class="col-md pr-md-1">
                          <div class="form-group">
                            <label for="account_type_home">Tipo de logradouro</label>
                            <select class="form-control" name="account_type_home" id="account_type_home">
                              <option value=""></option>
                              <option value="Alameda" <?= ($address_user_entity->type_street == 'Alameda') ? 'selected' : ''; ?>>Alameda</option>
                              <option value="Avenida" <?= ($address_user_entity->type_street == 'Avenida') ? 'selected' : ''; ?>>Avenida</option>
                              <option value="Praça" <?= ($address_user_entity->type_street == 'Praça') ? 'selected' : ''; ?>>Praça</option>
                              <option value="Rua" <?= ($address_user_entity->type_street == 'Rua') ? 'selected' : ''; ?>>Rua</option>
                              <option value="Travessa" <?= ($address_user_entity->type_street == 'Travessa') ? 'selected' : ''; ?>>Travessa</option>
                              <option value="Via" <?= ($address_user_entity->type_street == 'Via') ? 'selected' : ''; ?>>Via</option>
                              <option value="Viela" <?= ($address_user_entity->type_street == 'Viela') ? 'selected' : ''; ?>>Viela</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4 px-md-1">
                          <div class="form-group">
                            <label for="account_public_place">Logradouro</label>
                            <input type="text" name="account_public_place" id="account_public_place" class="form-control"
                              value="<?= $address_user_entity->street; ?>">
                            <?php echo form_error('account_public_place'); ?>
                          </div>
                        </div>
                        <div class="col-md pl-md-1">
                          <div class="form-group">
                            <label for="account_number_home">Numero</label>
                            <input type="text" name="account_number_home" id="account_number_home" class="form-control"
                              value="<?= $address_user_entity->number; ?>">
                            <?php echo form_error('account_number_home'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md pr-md-1">
                          <div class="form-group">
                            <label for="account_complement_home">Complemento</label>
                            <input type="text" name="account_complement_home" id="account_complement_home"
                              class="form-control" value="<?= $address_user_entity->complement; ?>">
                            <?php echo form_error('account_complement_home'); ?>
                          </div>
                        </div>
                        <div class="col-md pl-md-1">
                          <div class="form-group">
                            <label for="account_neighborhood_home">Bairro</label>
                            <input type="text" name="account_neighborhood_home" id="account_neighborhood_home"
                              class="form-control" value="<?= $address_user_entity->neighborhood; ?>">
                            <?php echo form_error('account_neighborhood_home'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md pr-md-1">
                          <div class="form-group">
                            <label for="account_city_home">Cidade</label>
                            <input type="text" name="account_city_home" id="account_city_home" class="form-control"
                              value="<?= $address_user_entity->city; ?>">
                            <?php echo form_error('account_city_home'); ?>
                          </div>
                        </div>
                        <div class="col-md px-md-1">
                          <div class="form-group">
                            <label for="account_cep_home">CEP</label>
                            <input type="text" name="account_cep_home" id="account_cep_home" class="form-control cep"
                              value="<?= $address_user_entity->cep; ?>">
                            <?php echo form_error('account_cep_home'); ?>
                          </div>
                        </div>
                        <div class="col-md pl-md-1">
                          <div class="form-group">
                            <label for="account_uf_home">UF</label>
                            <input type="text" name="account_uf_home" id="account_uf_home" class="form-control"
                              value="<?= $address_user_entity->uf; ?>">
                            <?php echo form_error('account_uf_home'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          <div class="form-group">
                            <label for="account_country_home">País</label>
                            <input type="text" name="account_country_home" id="account_country_home" class="form-control"
                              value="<?= $address_user_entity->country; ?>">
                              <input type="hidden" name="id_address_user" value="<?= $address_user_entity->id; ?>">
                            <?php echo form_error('account_country_home'); ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="reurb_config" role="tabpanel" aria-labelledby="reurb_config">
                      <div class="row pt-2">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label for="maximum_family_income">Renda familiar máxima para enquadramento em reurb-s (R$)</label>
                            <input type="text" name="maximum_family_income" value="<?php echo $reurb_config->maximum_family_income; ?>" class="form-control valor" id="maximum_family_income">
                            <input type="hidden" name="id_reurb_config" value="<?php echo $reurb_config->id; ?>">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<?php $this->load->view('elements/footer');?>

<!-- Modal Novo membro -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar membro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>city_hall/register_new_member/<?php echo $city_hall->id; ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="CPF_CMRF">CPF</label>
                <input type="text" name="CPF_CMRF[]" id="CPF_CMRF" class="form-control cpf" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="name_CMRF">Nome</label>
                <input type="text" name="name_CMRF[]" id="name_CMRF" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="RG_CMRF">R.G</label>
                <input type="text" name="RG_CMRF[]" id="RG_CMRF" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="OE_CMRF">Órgão Expeditor</label>
                <input type="text" name="OE_CMRF[]" id="OE_CMRF" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="profession_CMRF">Profissão</label>
                <input type="text" name="profession_CMRF[]" id="profession_CMRF" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="gender_CMRF">Gênero</label>
                <select class="custom-select" name="gender_CMRF[]" id="gender_CMRF">
                  <option value="M">Masculino</option>
                  <option value="F">Feminino</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nationality_CMRF">Nacionalidade</label>
                <select class="custom-select" name="nationality_CMRF[]" id="nationality_CMRF">
                  <option value="Brasileira" selected>Brasileira</option>
                  <option value="Estrangeira">Estrangeira</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="birth_CMRF">Data de nascimento</label>
                <input type="date" name="birth_CMRF[]" id="birth_CMRF" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="phoneNumber_CMRF">Telefone</label>
                <input type="text" name="phoneNumber_CMRF[]" id="phoneNumber_CMRF" class="form-control phone" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email_CMRF">Email</label>
                <input type="text" name="email_CMRF[]" id="email_CMRF" class="form-control" value="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" name="register_new_member" id="register_new_member"
                class="btn btn-primary float-right">Cadastrar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Novo cartorio -->
<div class="modal fade bd-example-modal-lg" id="new_notarys_office" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Cartorio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>city_hall/register_new_notarys_office/<?php echo $city_hall->id; ?>"
        method="post">
        <div class="modal-body">
          <div class="row mt-3">
            <div class="col-md-4 pl-md-1 pr-1">
              <div class="form-group">
                <label for="country_registry">Município</label>
                <input type="text" name="country_registry[]" id="country_registry" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-4 pl-md-1 pr-1">
              <div class="form-group">
                <label for="judicial_district">Comarca</label>
                <input type="text" name="judicial_district[]" id="judicial_district" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-4 pl-md-1 pr-1">
              <div class="form-group">
                <label for="public_place_type_registry">Tipo de logradouro</label>
                <select class="custom-select" id="public_place_type_registry" name="public_place_type_registry[]">
                  <option value="Rua" selected>Rua</option>
                  <option value="Avenida">Avenida</option>
                  <option value="Travessa">Travessa</option>
                  <option value="Outro">Outro</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pr-1 pl-md-1">
              <div class="form-group">
                <label for="public_place_registry">Logradouro</label>
                <input type="text" name="public_place_registry[]" id="public_place_registry" class="form-control"
                  value="">
              </div>
            </div>
            <div class="col-md-2 pr-1 pl-md-1">
              <div class="form-group">
                <label for="public_place_number_registry">Número</label>
                <input type="text" name="public_place_number_registry[]" id="public_place_number_registry"
                  class="form-control" value="">
              </div>
            </div>
            <div class="col-md-2 pl-md-1 pr-1">
              <div class="form-group">
                <label for="public_place_complement_registry">Complemento</label>
                <input type="text" name="public_place_complement_registry[]" id="public_place_complement_registry"
                  class="form-control" value="">
              </div>
            </div>
            <div class="col-md-4 pl-md-1 pr-1">
              <div class="form-group">
                <label for="neighbourhood_registry">Bairro</label>
                <input type="text" name="neighbourhood_registry[]" id="neighbourhood_registry" class="form-control"
                  value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pl-md-1 pr-1">
              <div class="form-group">
                <label for="city_registry">Cidade</label>
                <input type="text" name="city_registry[]" id="city_registry" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-4 pr-1 pl-md-1">
              <div class="form-group">
                <label for="postal_code_registry">CEP</label>
                <input type="text" name="postal_code_registry[]" id="postal_code_registry" class="form-control cep"
                  value="">
              </div>
            </div>
            <div class="col-md-4 pr-1 pl-md-1">
              <div class="form-group">
                <label for="UF_registry">UF</label>
                <input type="text" name="UF_registry[]" id="UF_registry" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pl-md-1 pr-1">
              <div class="form-group">
                <label for="district_registry">Distrito</label>
                <input type="text" name="district_registry[]" id="district_registry" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-4 pr-1 pl-md-1">
              <div class="form-group">
                <label for="country_registry">País</label>
                <input type="text" name="country_registry[]" id="country_registry" class="form-control" value="">
              </div>
            </div>
            <div class="col-md-4 pr-1 pl-md-1">
              <div class="form-group">
                <label for="registration_officer">Oficial de Registro</label>
                <input type="text" name="registration_officer[]" id="registration_officer" class="form-control"
                  value="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" name="register_new_notarys_office" id="register_new_notarys_office"
                class="btn btn-primary float-right">Cadastrar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_edit_document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Documento Comum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>city_hall/update_checklist_config/<?php echo $city_hall->id; ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="edit_description">Descrição</label>
                <input type="text" name="edit_description" value="" class="form-control" id="edit_description">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="status_config">Status</label>
                <select class="form-control" name="status" id="status_config">
                  <option value="1">Ativado</option>
                  <option value="0">Desativado</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <input type="hidden" name="id_config" value="" id="id_config">
          <button type="submit" name="update_configuration" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_edit_document_protocol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Documento Protocolo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>city_hall/update_checklist_protocol_entity/<?php echo $city_hall->id; ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="edit_description">Descrição</label>
                <input type="text" name="edit_description" value="" class="form-control" id="edit_description_protocol">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="status_config">Status</label>
                <select class="form-control" name="status" id="status_config_protocol">
                  <option value="1">Ativado</option>
                  <option value="0">Desativado</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <input type="hidden" name="id_config" value="" id="id_config_protocol">
          <button type="submit" name="update_configuration" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modal_adicionar_documento -->
<div class="modal fade" id="modal_adicionar_documento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Documento Requerente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>city_hall/register_document_requester/" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="description_requester">Descrição</label>
                <input type="text" name="description" class="form-control" id="description_requester" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control" name="type" id="type">
                  <option value=""></option>
                  <option value="1">Pessoa física</option>
                  <option value="2">Pessoa jurídica</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <input type="hidden" name="id_city_hall" value="<?php echo $city_hall->id; ?>" id="id_city_hall">
          <button type="submit" name="register_document_requester" class="btn btn-primary">Adicionar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modal_adicionar_documento_protocolo -->
<div class="modal fade" id="modal_adicionar_documento_protocolo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Documento Protocolo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>city_hall/register_document_protocol" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="description_protocol">Descrição</label>
                <input type="text" name="description_protocol" class="form-control" id="description_protocol" value="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <input type="hidden" name="id_city_hall" value="<?php echo $city_hall->id; ?>" id="id_city_hall">
          <button type="submit" name="register_document_protocol" class="btn btn-primary">Adicionar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- register_users -->
<div class="modal fade" id="register_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cadastrar usuario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url(); ?>city_hall/register_user/" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="">CPF</label>
								<input type="text" name="cpf" id="cpf" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Nome</label>
								<input type="text" class="form-control" name="name" id="name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control" name="email" id="email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="password">Senha</label>
								<input type="password" class="form-control" name="password" id="password">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<input type="hidden" name="id_city_hall" value="<?php echo $city_hall->id; ?>" id="id_city_hall">
					<button type="submit" name="register_user" class="btn btn-primary">Adicionar</button>
				</div>
			</form>
		</div>
	</div>
</div>

