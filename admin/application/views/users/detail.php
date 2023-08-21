<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo $user->name; ?></h4>
            </div>
            <div class="card-body">

            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-body">
              <form id="form_update_user" action="<?php echo base_url()?>users/update_user" method="post">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome" value="<?php echo $user->name; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="exemplo@email.com" value="<?php echo $user->email; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="profile">Perfil **</label>
                        <select class="form-control" name="profile" id="profile">
                          <option value=""></option>
                          <option value="1" <?php echo $user->profile=='1'?'selected':''; ?>>Administrador</option>
                          <option value="2" <?php echo $user->profile=='2'?'selected':''; ?>>Agendador</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label for="status">Situacao **</label>
                        <select class="form-control" name="status" id="status">
                          <option value=""></option>
                          <option value="1" <?php echo $user->status=='1'?'selected':''; ?>>Ativado</option>
                          <option value="0" <?php echo $user->status=='0'?'selected':''; ?>>Desativado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="note">Observação</label>
                        <textarea name="note" id="note" class="form-control textarea"><?php echo $user->note; ?></textarea>
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <input type="hidden" name="id_user" value="<?php echo $user->id; ?>">
                    <button id="update_user" name="update_user" class="btn btn-primary btn-round" >Alterar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAlterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Realmente editar dados?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id="btn_modal_alterar_usuario" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('elements/footer');?>
<script type="text/javascript">
  $(document).on('click', '#alterar_usuario',  function(){
    $('#modalAlterar').modal('show');
    return false;
  });

  $(document).on('click', '#btn_modal_alterar_usuario', function(){
    $('#form_alterar_usuario').submit();
  });
</script>
