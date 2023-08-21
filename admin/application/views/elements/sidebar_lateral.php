<?php $paginaCorrente = $_SERVER['REQUEST_URI'];?>
<div class="sidebar" data-color="white" data-active-color="danger">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="" class="simple-text logo">
      <div class="logo-image">
        <img src="<?php echo base_url();?>assets/build/img/construcao.png">
      </div>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li <?php echo(strpos($paginaCorrente, '/inicio') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>inicio">
          <i class="nc-icon nc-bank"></i>
          <p>Início</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/city_hall') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>city_hall">
          <i class="nc-icon nc-diamond"></i>
          <p>Prefeitura / Entidade</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/basic_configurations') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>basic_configurations">
          <i class="nc-icon nc-diamond"></i>
          <p>Configurações Básicas</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/users') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>users">
          <i class="nc-icon nc-diamond"></i>
          <p>Usuarios</p>
        </a>
      </li>

      <li class="active-pro">
        <a href="<?php echo base_url();?>login/logout">
          <i class="nc-icon nc-button-power"></i>
          <p>Sair</p>
        </a>
      </li>
    </ul>
  </div>
</div>
