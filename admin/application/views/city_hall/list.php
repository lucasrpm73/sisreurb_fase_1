<?php $this->load->view('elements/header');?>
<div class="wrapper ">
  <?php $this->load->view('elements/sidebar_lateral');?>
  <?php $this->load->view('elements/sidebar');?>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" style="display: inline;">Prefeituras / Entidades</h4>
            <a href="<?php echo base_url()?>city_hall/register"
              class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
          </div>
          <div class="card-body">
            <table class="table table-striped " id="tabelaUm">
              <thead class="text-primary">
                <th>Nome</th>
                <th>Prefeito / Representante legal</th>
                <th>Cep</th>
                <th>Status</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach ($city_halls as $row): ?>
                <tr>
                  <td><?php echo $row->entity_name; ?></td>
                  <td><?php echo $row->name; ?></td>
                  <td><?php echo $row->cep; ?></td>
                  <td><?php echo ($row->status == 1)? 'Ativado' : 'Desativado'; ?></td>
                  <td>
                    <a href="<?php echo base_url()?>city_hall/detail/<?php echo $row->id; ?>">
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
  <?php $this->load->view('elements/footer');?>
