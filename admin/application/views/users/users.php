<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" style="display: inline;">Usuários</h4>
              <a href="<?php echo base_url()?>users/register" class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="" class="table table-striped">
                  <thead class=" text-primary">
                    <th>Nome</th>
                    <th>Perfil</th>
                    <th>E-mail</th>
                    <th>Detalhes</th>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $row): ?>
                      <tr>
                        <td><?php echo $row->name?></td>
                        <td><?php echo $row->description?></td>
                        <td><?php echo $row->email?></td>
                        <td>
                          <a href="<?php echo base_url()?>users/detail/<?php echo $row->id?>">
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
    </div>
<?php $this->load->view('elements/footer');?>
