/*	"info": false,
		"scrollX": true,


*/

$('#tabelaum').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabelaum').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});

$('#tabela_clientes').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabela_clientes').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});


$('#tabela_escolher_cliente').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabela_escolher_cliente').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});

$('#tabela_escolher_cliente').DataTable({
  dropdownParent: $('#modalClients')
});




$('#tabela_abastecimento').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});
$('#tabela_abastecimento').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});















$('#todasCorridas').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#todasCorridas').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});







// --> Dashboard
$('#tabela_dash_andamento').DataTable({
  paging: false,
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});
$('#tabela_dash_andamento').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});

$('#tabela_dash_fila').DataTable({
  paging: false,
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});
$('#tabela_dash_fila').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});

$('#tabela_dash_agendamento').DataTable({
  paging: false,
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});
$('#tabela_dash_agendamento').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});

$('#tabela_dash_encerradas').DataTable({
  paging: false,
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});
$('#tabela_dash_encerradas').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});


// --> Motorcycles
$('#todosAbastecimento').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});
$('#todosAbastecimento').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});



$('#tabela_manutencao').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});
$('#tabela_manutencao').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});


$('#tabela_historico').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabela_historico').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});


$('#tabela_multas').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabela_multas').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});


// --> Cliente
$('#tabela_viagens_realizadas').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabela_viagens_realizadas').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});


$('#tabela_cliente_contratos').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabela_cliente_contratos').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});


$('#tabela_cliente_contatos').DataTable({
  "scrollX": true,
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabela_cliente_contatos').keypress(function(e) {
  if(e.which == 13) {
    e.preventDefault();
    console.log('Não vou enviar');
  }
});
