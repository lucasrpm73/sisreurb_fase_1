<?php $this->load->view('elements/header');?>
    <section class="container login">
      <div class="row align-centered pt-5">
        <div class="col-md-4 border">
          <h3 class="azul-padrao text-center">SISREURB</h3>


          <?php if ($error = getError()): // Ao mesmo tempo que defino a variável $error, verifico se retorna algo em "getError" ;) ?>
          <div class="alert alert-<?php echo $error['error_type'] ?> alert-dismissible fade show" role="alert">
            <?php echo $error['error_string'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif; ?>

          <!--<p align="center"><img src="assets/img/logomarca.png" width="400px" height="300px" /></p>-->
          <form method="post" class="" action="<?php echo base_url(); ?>login" >
            <div class="row mb-4">
              <div class="col-md-12">
                <label for="email">E-mail:</label>
                <input class="form-control" type="text" name="email" id="email"/>
                <span id="preencha_email" class="span-login">Preencha campo e-mail</span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="password">Senha:</label>
                <input class="form-control" type="password" name="password" id="password"/>
                <span id="preencha_senha" class="span-login">Preencha campo senha</span>
              </div>
            </div>
            <div class="col-md-12">
              <a href="#" class="float-md-right float-sm-right float-xs-right my-3" data-toggle="modal" data-target="#esqueci_senha">Esqueci minha senha</a><br>
            </div>
            <div class="col-md-12 col-sm-5 col-xs-5">
              <input class="btn btn-primary form-control" type="submit" id="entrar" name="entrar" value="Entrar"/>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="esqueci_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="display: inline;">Recuperar senha</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url(); ?>login" method="post">
            <h6 style="display: inline;">Digite seu email</h6>
            <input type="email" name="email" style="width: 60%;"><br>
          </div>
          <div class="modal-footer">
            <button type="submit" name="forgot_password" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php $this->load->view('elements/footer');?>
