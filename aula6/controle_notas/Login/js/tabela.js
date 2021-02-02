function edit_row(no) {
  alert('Eu sou um alert!');
  document.getElementById('edit_button' + no).style.display = 'none';
  document.getElementById('save_button' + no).style.display = 'block';

  var qnt_ = document.getElementById('qnt' + no);

  var qnt_data = qnt_.innerHTML;

  qnt_.innerHTML =
    "<input type='text' id='qnt_text" + no + "' value='" + qnt_data + "'>";
}

function save_row(no) {
  alert('Eu sou um alert!');
  //var name_val = document.getElementById('name_text' + no).value;
  //var country_val = document.getElementById('country_text' + no).value;
  //var age_val = document.getElementById('age_text' + no).value;
  var qnt_val = document.getElementById('qnt_text' + no).value;

  //document.getElementById('name_row' + no).innerHTML = name_val;
  //document.getElementById('country_row' + no).innerHTML = country_val;
  document.getElementById('qnt' + no).innerHTML = qnt_val;

  document.getElementById('edit_button' + no).style.display = 'block';
  document.getElementById('save_button' + no).style.display = 'none';
}

function delete_row(no) {
  alert('Eu sou um alert!');
  document.getElementById('row' + no + '').outerHTML = '';
}
