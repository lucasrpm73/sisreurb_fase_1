const { href } = location;
const url_atual = href.includes('homolog') ? 'https://homolog.sisreurb.com.br/painel/' : 'https://sisreurb.com.br/painel/';

// $(document).ready(function(){
// });

$(document).on('change', '.type_client', function(){
  var type_client = $(this).val();
  if (type_client == 1) {
    $('#form_legal_person').show();
    $('#form_juridical_person').hide();
  }else if (type_client == 2){
    $('#form_legal_person').hide();
    $('#form_juridical_person').show();
  }
});

// $(document).on('click', '#choose_cliente', function(){
//   $('#dados_cliente').html('<p>'+$(this).data('trade_name')+' '+$(this).data('name')+' '+$(this).data('surname')+'</p>');
//   $('#id_client').val($(this).data('id'));
//   $('#contract_client').val($(this).data('contract'));
//   $('#modalClients').modal('hide');
// });

// $(document).on('click', '.leave', function(){
//   var leave = $(this).val();
//   console.log(leave);
//   if (leave == 'G') {
//     $('#div_go_out_now').show();
//     $('#div_schedule').hide();
//   }else if (leave == 'S') {
//     $('#div_go_out_now').hide();
//     $('#div_schedule').show();
//   }else{
//     $('#div_go_out_now').hide();
//     $('#div_schedule').hide();
//   }
// });

// $('.newimgum').bind("click", function () {
//   $('#picimgum').click();
//
// });

$(document).on("change", "#picimgum", function () {
  readURLum(this);
  // console.log(this);
  // console.log('asdasd');
});

function readURLum(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imgum').attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
     $('#save').show();
  }
}

$('.newimgdois').bind("click", function () {
  $('#picimgdois').click();
});

$(document).on("change", "#picimgdois", function () {
  readURLdois(this);
});

function readURLdois(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imgdois').attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
     $('#save').show();
  }
}

$(document).on('click', '#add_comission_member', function (){
  $('.members_list').append('<hr>\
  <div class="row mt-5">\
    <div class="col-md-4 pl-md-1 pr-1">\
      <div class="form-group">\
        <label for="CPF_CMRF">CPF</label>\
        <input type="text" name="CPF_CMRF[]" id="CPF_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
    <div class="col-md-4 pl-md-1 pr-1">\
      <div class="form-group">\
        <label for="name_CMRF">Nome</label>\
        <input type="text" name="name_CMRF[]" id="name_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
    <div class="col-md-2 pl-md-1 pr-1">\
      <div class="form-group">\
        <label for="RG_CMRF">R.G</label>\
        <input type="text" name="RG_CMRF[]" id="RG_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
    <div class="col-md-2 pr-1 pl-md-1">\
      <div class="form-group">\
        <label for="OE_CMRF">Órgão Expeditor</label>\
        <input type="text" name="OE_CMRF[]" id="OE_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
  </div>\
  <div class="row">\
    <div class="col-md-4 pl-md-1 pr-1">\
      <div class="form-group">\
        <label for="profession_CMRF">Profissão</label>\
        <input type="text" name="profession_CMRF[]" id="profession_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
    <div class="col-md-4 pl-md-1 pr-1">\
      <div class="form-group">\
        <label for="birth_CMRF">Data de nascimento</label>\
        <input type="date" name="birth_CMRF[]" id="birth_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
    <div class="col-md-4 pr-1 pl-md-1">\
      <div class="form-group">\
        <label for="gender_CMRF">Gênero</label>\
        <select class="custom-select" name="gender_CMRF[]" id="gender_CMRF">\
          <option value="M">Masculino</option>\
          <option value="F">Feminino</option>\
        </select>\
      </div>\
    </div>\
  </div>\
  <div class="row">\
    <div class="col-md-4 pr-1 pl-md-1">\
      <div class="form-group">\
        <label for="nationality_CMRF">Nacionalidade</label>\
        <select class="custom-select" name="nationality_CMRF[]" id="nationality_CMRF">\
          <option value="Brasileira" selected>Brasileira</option>\
          <option value="Estrangeira">Estrangeira</option>\
        </select>\
      </div>\
    </div>\
    <div class="col-md-4 pl-md-1 pr-1">\
      <div class="form-group">\
        <label for="phoneNumber_CMRF">Telefone</label>\
        <input type="text" name="phoneNumber_CMRF[]" id="phoneNumber_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
    <div class="col-md-4 pr-1 pl-md-1">\
      <div class="form-group">\
        <label for="email_CMRF">Email</label>\
        <input type="text" name="email_CMRF[]" id="email_CMRF" class="form-control"\
          value="">\
      </div>\
    </div>\
  </div>\
  ')
});

$(document).on('click', '#new_registry', function (){
  $('.registry_list').append('<hr>\
  <div class="row mt-3">\
  <div class="col-md-4 pl-md-1 pr-1">\
    <div class="form-group">\
      <label for="county_registry">Município</label>\
      <input type="text" name="county_registry[]" id="county_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
  <div class="col-md-4 pl-md-1 pr-1">\
    <div class="form-group">\
      <label for="judicial_district">Comarca</label>\
      <input type="text" name="judicial_district[]" id="judicial_district" class="form-control"\
        value="">\
    </div>\
  </div>\
  <div class="col-md-4 pl-md-1 pr-1">\
    <div class="form-group">\
      <label for="public_place_type_registry">Tipo de logradouro</label>\
      <select class="custom-select" id="public_place_type_registry" name="public_place_type_registry[]">\
        <option value="Rua" selected>Rua</option>\
        <option value="Avenida">Avenida</option>\
        <option value="Travessa">Travessa</option>\
        <option value="Outro">Outro</option>\
      </select>\
    </div>\
  </div>\
</div>\
<div class="row">\
  <div class="col-md-4 pr-1 pl-md-1">\
    <div class="form-group">\
      <label for="public_place_registry">Logradouro</label>\
      <input type="text" name="public_place_registry[]" id="public_place_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
  <div class="col-md-2 pr-1 pl-md-1">\
    <div class="form-group">\
      <label for="public_place_number_registry">Número</label>\
      <input type="text" name="public_place_number_registry[]" id="public_place_number_registry"\
        class="form-control" value="">\
    </div>\
  </div>\
  <div class="col-md-2 pl-md-1 pr-1">\
    <div class="form-group">\
      <label for="public_place_complement_registry">Complemento</label>\
      <input type="text" name="public_place_complement_registry[]" id="public_place_complement_registry"\
        class="form-control" value="">\
    </div>\
  </div>\
  <div class="col-md-4 pl-md-1 pr-1">\
    <div class="form-group">\
      <label for="neighbourhood_registry">Bairro</label>\
      <input type="text" name="neighbourhood_registry[]" id="neighbourhood_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
</div>\
<div class="row">\
  <div class="col-md-4 pl-md-1 pr-1">\
    <div class="form-group">\
      <label for="city_registry">Cidade</label>\
      <input type="text" name="city_registry[]" id="city_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
  <div class="col-md-4 pr-1 pl-md-1">\
    <div class="form-group">\
      <label for="postal_code_registry">CEP</label>\
      <input type="text" name="postal_code_registry[]" id="postal_code_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
  <div class="col-md-4 pr-1 pl-md-1">\
    <div class="form-group">\
      <label for="UF_registry">UF</label>\
      <input type="text" name="UF_registry[]" id="UF_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
</div>\
<div class="row">\
  <div class="col-md-4 pl-md-1 pr-1">\
    <div class="form-group">\
      <label for="district_registry">Distrito</label>\
      <input type="text" name="district_registry[]" id="district_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
  <div class="col-md-4 pr-1 pl-md-1">\
    <div class="form-group">\
      <label for="country_registry">País</label>\
      <input type="text" name="country_registry[]" id="country_registry" class="form-control"\
        value="">\
    </div>\
  </div>\
  <div class="col-md-4 pr-1 pl-md-1">\
    <div class="form-group">\
      <label for="registration_officer">Oficial de Registro</label>\
      <input type="text" name="registration_officer[]" id="registration_officer" class="form-control"\
        value="">\
    </div>\
  </div>\
</div>\
  ')
});

$(document).on('change', '#repeat_password', function (){
  let repeat_password = $(this).val();
  let password = $('#password').val();

  if (repeat_password != password) {
    $('#error_password').show(200);
    $('#cadastrarPrefeitura').prop('disabled', true);
  } else {
    $('#error_password').hide(200);
    $('#cadastrarPrefeitura').prop('disabled', false);
  }
});

$(document).on('click', '#edit_basic_configuration', function (){
  let description = $(this).data('description');
  let id = $(this).data('id');
  let status = $(this).data('status');
  // console.log(status);
  if (status != undefined) {
    $('#status_config').val(status);
  }
  $('#edit_description').val(description);
  $('#id_config').val(id);
});

$(document).on('click', '#edit_basic_configuration_protocol', function (){
  let description = $(this).data('description');
  let id = $(this).data('id');
  let status = $(this).data('status');
  // console.log(status);
  if (status != undefined) {
    $('#status_config_protocol').val(status);
  }
  $('#edit_description_protocol').val(description);
  $('#id_config_protocol').val(id);
});

// $(document).on('click', '#edit_basic_configuration_entity', function (){
//   let description = $(this).data('description');
//   let id = $(this).data('id');
//   let status = $(this).data('status');
//
//   $('#edit_description').val(description);
//   $('#status').val(status);
//   $('#id_config').val(id);
// });

$(document).on('click', '.edit_specific_legislation', function (){
  let id = $(this).data('id');
  let name = $(this).data('name');
  let link = $(this).data('link');

  $('#edit_name_legislation').val(name);
  $('#edit_link_legislation').val(link);
  $('#id_specific_legislation').val(id);
});
