<div id="load" style="display: none;">
  <div class="loader"></div>
</div>


<footer class="footer footer-black  footer-white ">
  <div class="container-fluid">

  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/build/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/build/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/build/js/core/bootstrap.min.js"></script>


<script src="<?php echo base_url()?>assets/build/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/build/js/plugins/bootstrap-notify.js"></script>
<script src="<?php echo base_url()?>assets/build/js/plugins/paper-dashboard.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/build/js/plugins/chartjs.min.js"></script>

<script src="<?php echo base_url()?>assets/build/js/plugins/fontawesome.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/build/js/plugins/jquery.mask.js"></script>
<script src="<?php echo base_url(); ?>assets/build/js/plugins/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/build/js/plugins/valida_cpf_cnpj.js"></script>
<script src="<?php echo base_url(); ?>assets/build/js/plugins/jquery.maskMoney.min.js"></script>
<script src="<?php echo base_url(); ?>assets/build/js/plugins/endereco.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script src="<?php echo base_url()?>assets/build/js/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/build/js/tabelas.js"></script>

<div class="modais">



</div>


<script type="text/javascript">
$(document).on('click', '.chama_modal', function(){
  var tipo_modal = $(this).data('id');
  console.log(tipo_modal);
  $.get('<?php echo base_url(); ?>modais/'+tipo_modal,function(response){
    $('.modais').html(response);

    setTimeout(function(){
      $('#'+tipo_modal).modal('show');
    }, 200);
  });


});
</script>

<script type="text/javascript">
$(document).ready(function(){
 $('.select_write').select2();

 $("#nascimento").mask("99/99/9999");
 $(".nascimento").mask("99/99/9999");
 $("#telefone").mask("(99) 99999-9999");
 $("#phone").mask("(99) 99999-9999");
 $(".phone").mask("(99) 99999-9999");
 $("#phone_fixed").mask("(99) 9999-9999");
 $("#cpf").mask("999.999.999-99");
 $(".cpf").mask("999.999.999-99");
 $("#cep").mask("99999-999");
 $(".cep").mask("99999-999");
 $("#cnpj").mask("99.999.999/9999-99");
 $(".cnpj").mask("99.999.999/9999-99");
 $("#placa").mask("aaa - 9999");

 $(".valor").maskMoney({
   prefix: "",
   decimal: ".",
   thousands: "",
 });
});





</script>

</body>

</html>
