$(function () {
  function Adicionar() {
    $('#tblCadastro tbody').append(
      '<tr>' +
        "<td><input type='text'/></td>" +
        "<td><input type='text'/></td>" +
        "<td><input type='text'/></td>" +
        "<td><img src='images/disk.png' class='btnSalvar'><img src='images/delete.png' class='btnExcluir'/></td>" +
        '</tr>'
    );

    $('.btnSalvar').bind('click', Salvar);
    $('.btnSalvar_apro').bind('click', Salvar_apro);
  }

  function Salvar_apro() {
    var par = $(this).parent().parent(); //tr
    var tdNome = par.children('td:nth-child(1)');
    var tdNota1 = par.children('td:nth-child(2)');
    var tdNota2 = par.children('td:nth-child(3)');
    var tdMedia = par.children('td:nth-child(4)');
    var tdBotoes = par.children('td:nth-child(5)');
    var n1 = parseFloat(document.getElementById('txtNota1_apro').value);
    var n2 = parseFloat(document.getElementById('txtNota2_apro').value);

    var media = (n1 + n2) / 2;
    tdMedia.html(
      "<input type='text' name='media' id='txtMedia_apro' value='" +
        media +
        "'/>"
    );

    tdNome.html(tdNome.children('input[type=text]').val());
    tdNota1.html(tdNota1.children('input[type=text]').val());
    tdNota2.html(tdNota2.children('input[type=text]').val());
    tdMedia.html(tdMedia.children('input[type=text]').val());

    tdBotoes.html(
      "<i class='fa fa-pencil btnEditar_apro' aria-hidden='true'<input type='button' ></i>"
    );

    $('.btnEditar_apro').bind('click', Editar_apro);
  }

  function Salvar() {
    var par = $(this).parent().parent(); //tr
    var tdNome = par.children('td:nth-child(1)');
    var tdNota1 = par.children('td:nth-child(2)');
    var tdNota2 = par.children('td:nth-child(3)');
    var tdMedia = par.children('td:nth-child(4)');
    var tdBotoes = par.children('td:nth-child(5)');
    var n1 = parseFloat(document.getElementById('txtNota1').value);
    var n2 = parseFloat(document.getElementById('txtNota2').value);

    var media = (n1 + n2) / 2;
    tdMedia.html(
      "<input type='text' name='media' id='txtMedia' value='" + media + "'/>"
    );

    tdNome.html(tdNome.children('input[type=text]').val());
    tdNota1.html(tdNota1.children('input[type=text]').val());
    tdNota2.html(tdNota2.children('input[type=text]').val());
    tdMedia.html(tdMedia.children('input[type=text]').val());

    tdBotoes.html(
      "<i class='fa fa-pencil btnEditar' aria-hidden='true'<input type='button' ></i>"
    );

    $('.btnEditar').bind('click', Editar);
  }

  function Editar_apro() {
    var par = $(this).parent().parent(); //tr
    var tdNome_apro = par.children('td:nth-child(1)');
    var tdNota1_apro = par.children('td:nth-child(2)');
    var tdNota2_apro = par.children('td:nth-child(3)');
    var tdMedia_apro = par.children('td:nth-child(4)');
    var tdBotoes_apro = par.children('td:nth-child(5)');

    tdNome_apro.html(
      "<input type='text' name='nome_apro' id='txtNome_apro' value='" +
        tdNome_apro.html() +
        "'/>"
    );
    tdNota1_apro.html(
      "<input type='text' name='nota1_apro' id='txtNota1_apro' value='" +
        tdNota1_apro.html() +
        "'/>"
    );
    tdNota2_apro.html(
      "<input type='text' name='nota2_apro' id='txtNota2_apro' value='" +
        tdNota2_apro.html() +
        "'/>"
    );

    tdBotoes_apro.html(
      "<button type='submit'><i class='fa fa-floppy-o' aria-hidden='true'></i></button>"
    );
    $('.btnSalvar_apro').bind('click', Salvar_apro);
    $('.btnEditar_apro').bind('click', Editar_apro);
  }
  function Editar() {
    var par = $(this).parent().parent(); //tr
    var tdNome = par.children('td:nth-child(1)');
    var tdNota1 = par.children('td:nth-child(2)');
    var tdNota2 = par.children('td:nth-child(3)');
    var tdMedia = par.children('td:nth-child(4)');
    var tdBotoes = par.children('td:nth-child(5)');

    tdNome.html(
      "<input type='text' name='nome' id='txtNome' value='" +
        tdNome.html() +
        "'/>"
    );
    tdNota1.html(
      "<input type='text' name='nota1' id='txtNota1' value='" +
        tdNota1.html() +
        "'/>"
    );
    tdNota2.html(
      "<input type='text' name='nota2' id='txtNota2' value='" +
        tdNota2.html() +
        "'/>"
    );

    tdBotoes.html(
      "<button type='submit'><i class='fa fa-floppy-o' aria-hidden='true'></i></button>"
    );
    $('.btnSalvar').bind('click', Salvar);
    $('.btnEditar').bind('click', Editar);
  }

  function Excluir() {
    var par = $(this).parent().parent(); //tr
    par.remove();
  }

  $('.btnEditar').bind('click', Editar);
  $('.btnEditar_apro').bind('click', Editar_apro);
});
