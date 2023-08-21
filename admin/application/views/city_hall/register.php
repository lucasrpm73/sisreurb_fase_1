<?php $this->load->view('elements/header');?>
<div class="wrapper ">
  <?php $this->load->view('elements/sidebar_lateral');?>
  <?php $this->load->view('elements/sidebar');?>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form action="<?php echo base_url(); ?>city_hall/register_city_hall" method="post"
            enctype="multipart/form-data">
            <div class="card-header">
              <div class="col-md-12">
                <div class="row">
                  <h5 class="card-title d-inline">Cadastro de prefeitura / entidade</h5>
                  <button type="submit" name="cadastrarPrefeitura" id="cadastrarPrefeitura"
                    class="btn btn-primary btn-round float-md-right float-sm-right float-xs-right ml-auto">Cadastrar</button>
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
                  <a class="nav-link" id="user_marter_tab" data-toggle="tab" href="#user_master" role="tab"
                    aria-controls="user_master" aria-selected="false">Usuário master</a>
                </li>
              </ul>

              <div class="tab-content" id="tabContent">
                <div class="tab-pane fade show active" id="entityTownHall_tab" role="tabpanel"
                  aria-labelledby="EntityTownHall">

                  <div class="col-md-12">
                    <div class="row mt-3">
                      <div class="col-md-6  pr-1">
                        <div class="form-group">
                          <label for="CNPJTownHall">CNPJ</label>
                          <input type="text" name="CNPJTownHall" id="cnpj" class="form-control cnpj"
                            value="<?php echo set_value('CNPJTownHall'); ?>">
                          <?php echo form_error('CNPJTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-6 pl-1">
                        <div class="form-group">
                          <label for="nameTownHall">Nome</label>
                          <input type="text" name="nameTownHall" id="nameTownHall" class="form-control"
                            value="<?php echo set_value('nameTownHall'); ?>">
                          <?php echo form_error('nameTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 pr-1">
                        <div class="form-group">
                          <label for="phoneTownHall">Telefone</label>
                          <input type="text" name="phoneTownHall" id="phoneTownHall" class="form-control phone"
                            value="<?php echo set_value('phoneTownHall'); ?>">
                          <?php echo form_error('phoneTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="emailTownHall">Email</label>
                          <input type="text" name="emailTownHall" id="emailTownHall" class="form-control"
                            value="<?php echo set_value('emailTownHall'); ?>">
                          <?php echo form_error('emailTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pl-1">
                        <div class="form-group">
                          <label for="siteTownHall">Site</label>
                          <input type="text" name="siteTownHall" id="siteTownHall" class="form-control"
                            value="<?php echo set_value('siteTownHall'); ?>">
                          <?php echo form_error('siteTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 pr-md-1">
                        <div class="form-group">
                          <label for="addressTownHall">Tipo de Logradouro</label>
                          <select name="addressTownHall" class="custom-select" id="addressTownHall">
                            <option value=""></option>
                            <option value="Alameda">Alameda</option>
                            <option value="Avenida">Avenida</option>
                            <option value="Praça">Praça</option>
                            <option value="Rua">Rua</option>
                            <option value="Travessa">Travessa</option>
                            <option value="Via">Via</option>
                            <option value="Viela">Viela</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md px-md-1">
                        <div class="form-group">
                          <label for="publicPlaceTownHall">Logradouro</label>
                          <input type="text" name="publicPlaceTownHall" id="publicPlaceTownHall" class="form-control"
                            value="<?php echo set_value('publicPlaceTownHall'); ?>">
                          <?php echo form_error('publicPlaceTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-2  pl-md-1">
                        <div class="form-group">
                          <label for="addressNumberTownHall">Número</label>
                          <input type="text" name="addressNumberTownHall" id="addressNumberTownHall"
                            class="form-control" value="<?php echo set_value('addressNumberTownHall'); ?>">
                          <?php echo form_error('addressNumberTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 pr-md-1">
                        <div class="form-group">
                          <label for="complementTownHall">Complemento</label>
                          <input type="text" name="complementTownHall" id="complementTownHall" class="form-control"
                            value="<?php echo set_value('complementTownHall'); ?>">
                          <?php echo form_error('complementTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-6 pl-md-1">
                        <div class="form-group">
                          <label for="neighborhoodTownHall">Bairro</label>
                          <input type="text" name="neighborhoodTownHall" id="neighborhoodTownHall" class="form-control"
                            value="<?php echo set_value('neighborhoodTownHall'); ?>">
                          <?php echo form_error('neighborhoodTownHall'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md pr-md-1">
                        <div class="form-group">
                          <label for="cityTownHall">Cidade</label>
                          <input type="text" name="cityTownHall" id="cityTownHall" class="form-control"
                            value="<?php echo set_value('cityTownHall'); ?>">
                          <?php echo form_error('cityTownHall'); ?>
                        </div>
                      </div>

                      <div class="col-md px-md-1">
                        <div class="form-group">
                          <label for="CEPTownHall">CEP</label>
                          <input type="text" name="CEPTownHall" id="CEPTownHall" class="form-control cep"
                            value="<?php echo set_value('CEPTownHall'); ?>">
                          <?php echo form_error('CEPTownHall'); ?>
                        </div>
                      </div>
                      <div class="col-md-3 pl-md-1">
                        <div class="form-group">
                          <label for="UFTownHall">UF</label>
                          <input type="text" name="UFTownHall" class="form-control" id="UFTownHall">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label for="countryTownHall">País</label>
                        <select name="countryTownHall" class="custom-select" id="countryTownHall">
                          <option value="Brasil" selected>Brasil</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3 ml-1">
                    <div class="col-md-2 mr-5">
                      <label for="">Brazão do Município</label>
                      <label class="newimgum">
                        <img id="imgum" class="icone_perfil"
                        src="<?php echo base_url(); ?>assets/build/img/icon/perfil.png">
                        <input id="picimgum" class='pis' name="profile_city_hall" type="file" style="display:none;">
                      </label>
                    </div>

                    <div class="col-md-2">
                      <label for="">Logo da Atual Administração</label>
                      <label class="newimgdois">
                        <img id="imgdois" class="icone_perfil"
                        src="<?php echo base_url(); ?>assets/build/img/icon/perfil.png">
                        <input id="picimgdois" class='pis' name="current_administration_logo" type="file" style="display:none;">
                      </label>
                    </div>

                  </div>

                </div>

                <div class="tab-pane fade" id="mayorRegister_tab" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="col-md-12">
                    <div class="row mt-3">
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="CPFMayor">CPF</label>
                          <input type="text" name="CPFMayor" id="CPFMayor" class="form-control cpf"
                            value="<?php echo set_value('CPFMayor'); ?>">
                          <?php echo form_error('CPFMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="nameMayor">Nome</label>
                          <input type="text" name="nameMayor" id="nameMayor" class="form-control"
                            value="<?php echo set_value('nameMayor'); ?>">
                          <?php echo form_error('nameMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-2 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="RGMayor">R.G</label>
                          <input type="text" name="RGMayor" id="RGMayor" class="form-control"
                            value="<?php echo set_value('RGMayor'); ?>">
                          <?php echo form_error('RGMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-2 pr-1 pl-md-1">
                        <div class="form-group">
                          <label for="OEMayor">Órgão Expeditor</label>
                          <input type="text" name="OEMayor" id="OEMayor" class="form-control"
                            value="<?php echo set_value('OEMayor'); ?>">
                          <?php echo form_error('OEMayor'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="professionMayor">Profissão</label>
                          <input type="text" name="professionMayor" id="professionMayor" class="form-control"
                            value="<?php echo set_value('professionMayor'); ?>">
                          <?php echo form_error('professionMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="birthMayor">Data de nascimento</label>
                          <input type="date" name="birthMayor" id="birthMayor" class="form-control"
                            value="<?php echo set_value('birthMayor'); ?>">
                          <?php echo form_error('birthMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-4 pr-1 pl-md-1">
                        <div class="form-group">
                          <label for="genderMayor">Gênero</label>
                          <select name="genderMayor" class="custom-select" id="genderMayor">
                            <option value=""></option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-md-1">
                        <div class="form-group">
                          <label for="nationalityMayor">Nacionalidade</label>
                          <select name="nationalityMayor" class="custom-select" id="nationalityMayor">
                            <option value=""></option>
                            <option value="Brasileira">Brasileira</option>
                            <option value="Estrangeira">Estrangeira</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3 pr-1 pl-md-1">
                        <div class="form-group">
                          <label for="civil_status_Mayor">Estado Civil</label>
                          <select name="civil_status_Mayor" class="custom-select" id="civil_status_Mayor">
                            <option value=""></option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Solteiro(a)">Solteiro(a)</option>
                            <option value="Separado(a)">Separado(a)</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Viúvo(a)">Viúvo(a)</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3 pl-md-1 pr-1">
                        <div class="form-group">
                          <label for="phoneNumberMayor">Telefone</label>
                          <input type="text" name="phoneNumberMayor" id="phoneNumberMayor" class="form-control phone"
                            value="<?php echo set_value('phoneNumberMayor'); ?>">
                          <?php echo form_error('phoneNumberMayor'); ?>
                        </div>
                      </div>
                      <div class="col-md-3 pr-1 pl-md-1">
                        <div class="form-group">
                          <label for="emailMayor">Email</label>
                          <input type="text" name="emailMayor" id="emailMayor" class="form-control"
                            value="<?php echo set_value('emailMayor'); ?>">
                          <?php echo form_error('emailMayor'); ?>
                        </div>
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
                          <option value="Alameda">Alameda</option>
                          <option value="Avenida">Avenida</option>
                          <option value="Praça">Praça</option>
                          <option value="Rua">Rua</option>
                          <option value="Travessa">Travessa</option>
                          <option value="Via">Via</option>
                          <option value="Viela">Viela</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label for="home_address_home">Logradouro</label>
                        <input type="text" name="home_public_place" id="home_public_place" class="form-control"
                          value="<?php echo set_value('home_public_place'); ?>">
                        <?php echo form_error('home_public_place'); ?>
                      </div>
                    </div>
                    <div class="col-md pl-md-1">
                      <div class="form-group">
                        <label for="home_number_home">Numero</label>
                        <input type="text" name="home_number_home" id="home_number_home" class="form-control"
                          value="<?php echo set_value('home_number_home'); ?>">
                        <?php echo form_error('home_number_home'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md pr-md-1">
                      <div class="form-group">
                        <label for="home_complement_home">Complemento</label>
                        <input type="text" name="home_complement_home" id="home_complement_home"
                          class="form-control" value="<?php echo set_value('home_complement_home'); ?>">
                        <?php echo form_error('home_complement_home'); ?>
                      </div>
                    </div>
                    <div class="col-md pl-md-1">
                      <div class="form-group">
                        <label for="home_neighborhood_home">Bairro</label>
                        <input type="text" name="home_neighborhood_home" id="home_neighborhood_home"
                          class="form-control" value="<?php echo set_value('home_neighborhood_home'); ?>">
                        <?php echo form_error('home_neighborhood_home'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md pr-md-1">
                      <div class="form-group">
                        <label for="home_city_home">Cidade</label>
                        <input type="text" name="home_city_home" id="home_city_home" class="form-control"
                          value="<?php echo set_value('home_city_home'); ?>">
                        <?php echo form_error('home_city_home'); ?>
                      </div>
                    </div>
                    <div class="col-md px-md-1">
                      <div class="form-group">
                        <label for="home_cep_home">CEP</label>
                        <input type="text" name="home_cep_home" id="home_cep_home" class="form-control cep"
                          value="<?php echo set_value('home_cep_home'); ?>">
                        <?php echo form_error('home_cep_home'); ?>
                      </div>
                    </div>
                    <div class="col-md pl-md-1">
                      <div class="form-group">
                        <label for="home_uf_home">UF</label>
                        <input type="text" name="home_uf_home" id="home_uf_home" class="form-control"
                          value="<?php echo set_value('home_uf_home'); ?>">
                        <?php echo form_error('home_uf_home'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md">
                      <div class="form-group">
                        <label for="home_country_home">País</label>
                        <input type="text" name="home_country_home" id="home_country_home" class="form-control"
                          value="<?php echo set_value('home_country_home'); ?>">
                        <?php echo form_error('home_country_home'); ?>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade" id="reurb_config" role="tabpanel" aria-labelledby="reurb_config">
                  <div class="row pt-2">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label for="maximum_family_income">Renda familiar máxima para enquadramento em reurb-s (R$)</label>
                        <input type="text" name="maximum_family_income" value="" class="form-control valor" id="maximum_family_income">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="user_master" role="tabpanel" aria-labelledby="user_master">
                  <div class="row pt-2">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label for="cpf_account">CPF</label>
                        <input type="text" name="cpf_account" id="cpf_account" value="" class="form-control cpf"
                          >
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label for="account_manager">Responsavel da conta</label>
                        <input type="text" name="account_manager" id="account_manager" value="" class="form-control"
                          >
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="phone_account">Telefone</label>
                        <input type="text" name="phone_account" id="phone_account" value="" class="form-control phone"
                          >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label for="email_account">Email</label>
                        <input type="email" name="email_account" id="email_account" value="" class="form-control"
                          >
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" value="" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="repeat_password">Repita a senha</label>
                        <input type="password" name="repeat_password" id="repeat_password" value="" class="form-control"
                          >
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
                          <option value="Alameda">Alameda</option>
                          <option value="Avenida">Avenida</option>
                          <option value="Praça">Praça</option>
                          <option value="Rua">Rua</option>
                          <option value="Travessa">Travessa</option>
                          <option value="Via">Via</option>
                          <option value="Viela">Viela</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label for="account_public_place">Logradouro</label>
                        <input type="text" name="account_public_place" id="account_public_place" class="form-control"
                          value="<?php echo set_value('account_public_place'); ?>">
                        <?php echo form_error('account_public_place'); ?>
                      </div>
                    </div>
                    <div class="col-md pl-md-1">
                      <div class="form-group">
                        <label for="account_number_home">Numero</label>
                        <input type="text" name="account_number_home" id="account_number_home" class="form-control"
                          value="<?php echo set_value('account_number_home'); ?>">
                        <?php echo form_error('account_number_home'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md pr-md-1">
                      <div class="form-group">
                        <label for="account_complement_home">Complemento</label>
                        <input type="text" name="account_complement_home" id="account_complement_home"
                          class="form-control" value="<?php echo set_value('account_complement_home'); ?>">
                        <?php echo form_error('account_complement_home'); ?>
                      </div>
                    </div>
                    <div class="col-md pl-md-1">
                      <div class="form-group">
                        <label for="account_neighborhood_home">Bairro</label>
                        <input type="text" name="account_neighborhood_home" id="account_neighborhood_home"
                          class="form-control" value="<?php echo set_value('account_neighborhood_home'); ?>">
                        <?php echo form_error('account_neighborhood_home'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md pr-md-1">
                      <div class="form-group">
                        <label for="account_city_home">Cidade</label>
                        <input type="text" name="account_city_home" id="account_city_home" class="form-control"
                          value="<?php echo set_value('account_city_home'); ?>">
                        <?php echo form_error('account_city_home'); ?>
                      </div>
                    </div>
                    <div class="col-md px-md-1">
                      <div class="form-group">
                        <label for="account_cep_home">CEP</label>
                        <input type="text" name="account_cep_home" id="account_cep_home" class="form-control cep"
                          value="<?php echo set_value('account_cep_home'); ?>">
                        <?php echo form_error('account_cep_home'); ?>
                      </div>
                    </div>
                    <div class="col-md pl-md-1">
                      <div class="form-group">
                        <label for="account_uf_home">UF</label>
                        <input type="text" name="account_uf_home" id="account_uf_home" class="form-control"
                          value="<?php echo set_value('account_uf_home'); ?>">
                        <?php echo form_error('account_uf_home'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md">
                      <div class="form-group">
                        <label for="account_country_home">País</label>
                        <input type="text" name="account_country_home" id="account_country_home" class="form-control"
                          value="<?php echo set_value('account_country_home'); ?>">
                        <?php echo form_error('account_country_home'); ?>
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
</div>
<?php $this->load->view('elements/footer');?>
