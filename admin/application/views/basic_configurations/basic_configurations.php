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
          <h4 class="card-title text-center" >Configurações Básicas</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="d-inline">Checklist requerente</h5>
            <a href="" data-toggle="modal" data-target="#basic_configurations"
              class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
          </div>
          <div class="card-body">
            <table class="table table-striped " id="tabelaUm">
              <thead class="text-primary">
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach ($configurations as $row): ?>
                  <tr>
                    <td><?php echo $row->description; ?></td>
                    <td><?php if($row->type==1){ echo "Pessoa física";} else if($row->type==2){echo "Pessoa jurídica";} ?></td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#edit_basic_configurations" id="edit_basic_configuration"
                        data-id="<?php echo $row->id; ?>" data-description="<?php echo $row->description; ?>">
                        <i class="nc-icon nc-zoom-split"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="d-inline">Checklist protocolo</h5>
            <a href="" data-toggle="modal" data-target="#basic_configurations_protocol"
              class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
          </div>
          <div class="card-body">
            <table class="table table-striped " id="tabelaUm">
              <thead class="text-primary">
                <th>Descrição</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach ($configurations_protocol as $row): ?>
                  <tr>
                    <td><?php echo $row->description; ?></td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_edit_basic_configuration_protocol" id="edit_basic_configuration_protocol"
                        data-id="<?php echo $row->id; ?>" data-description="<?php echo $row->description; ?>">
                        <i class="nc-icon nc-zoom-split"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="d-inline">Legislação Especifica</h5>
            <a href="" data-toggle="modal" data-target="#modal_add_specific_legislation"
              class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
          </div>
          <div class="card-body">
            <table class="table table-striped " id="tabelaUm">
              <thead class="text-primary">
                <tr>
                  <th>Nome</th>
                  <th>Link</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($specific_legislations as $row): ?>
                  <tr>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->link; ?></td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_edit_specific_legislation" class="edit_specific_legislation" id="edit_specific_legislation"
                        data-id="<?php echo $row->id; ?>" data-name="<?php echo $row->name; ?>" data-link="<?php echo $row->link; ?>">
                        <i class="nc-icon nc-zoom-split"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Cadastrar Configuração -->
  <div class="modal fade" id="basic_configurations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Configuração Básica</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>basic_configurations/register_configuration" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="description" value="" class="form-control" id="description">
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
            <button type="submit" name="register_configuration" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Editar Configuração -->
  <div class="modal fade" id="edit_basic_configurations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Configuração Básica</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>basic_configurations/update_checklist_config" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="edit_description" value="" class="form-control" id="edit_description">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id_config" id="id_config" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="update_configuration" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Cadastrar Configuração -->
  <div class="modal fade" id="basic_configurations_protocol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Configuração Básica</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>basic_configurations/register_configuration_protocol" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="description" value="" class="form-control" id="description">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="register_configuration" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Editar Configuração -->
  <div class="modal fade" id="modal_edit_basic_configuration_protocol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Configuração Básica de protocolo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>basic_configurations/update_checklist_protocol_config" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="edit_description" value="" class="form-control" id="edit_description_protocol">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id_config" id="id_config_protocol" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="update_configuration" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- modal_add_specific_legislation -->
  <div class="modal fade" id="modal_add_specific_legislation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Legislação Especifica</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>basic_configurations/register_specific_legislation" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name_legislation">Nome</label>
                  <input type="text" name="name_legislation" value="" class="form-control" id="name_legislation">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="link_legislation">Link</label>
                  <input type="text" name="link_legislation" value="" class="form-control" id="link_legislation">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p  style="color: red;">Colocar https://</p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="register_specific_legislation" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- modal_edit_specific_legislation -->
  <div class="modal fade" id="modal_edit_specific_legislation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Legislação Especifica</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>basic_configurations/update_checklist_protocol_entity" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="edit_name_legislation">Nome</label>
                  <input type="text" name="edit_name_legislation" value="" class="form-control" id="edit_name_legislation">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="edit_link_legislation">Link</label>
                  <input type="text" name="edit_link_legislation" value="" class="form-control" id="edit_link_legislation">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p  style="color: red;">Colocar https://</p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <input type="hidden" name="id_specific_legislation" value="" id="id_specific_legislation">
            <button type="submit" name="update_checklist_protocol_entity" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php $this->load->view('elements/footer');?>
