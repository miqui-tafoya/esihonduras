let blackout = $('#blackout');
function dialogModal(msg, yesTitle, noTitle, yesCall, noCall) {
  let body = document.body;
  $('#btnAceptar').show();
  $('#btnCancelar').show();
  body.style.height = '100vh';
  body.style.overflowY = 'hidden';
  if (msg != 'none') {
    $('#modal_body').html('<ul>' + msg + '</ul>');
  }
  let dialog = $('#modal_container');
  blackout.show();
  dialog.addClass('visibleModal');
  if (yesTitle == 'none') {
    $('#btnAceptar').hide();
  } else {
    $('#btnAceptar').html(yesTitle);
  }
  if (noTitle == 'none') {
    $('#btnCancelar').hide();
  } else {
    $('#btnCancelar').html(noTitle);
  }
  if (yesTitle != 'none') {
    $('#btnAceptar').off('click').on('click', function (e) {
      yesCall();
      dialog.removeClass('visibleModal');
      body.style.height = '';
      body.style.overflowY = '';
      blackout.hide();
    });
  }
  if (noTitle != 'none') {
    $('#btnCancelar').off('click').on('click', function (e) {
      noCall();
      dialog.removeClass('visibleModal');
      body.style.height = '';
      body.style.overflowY = '';
      blackout.hide();
    });
  }
}
function closeModal() {
  let body = document.body;
  let dialog = $('#modal_container');
  // let blackout = $('#blackout');
  dialog.removeClass('visibleModal');
  body.style.height = '';
  body.style.overflowY = '';
  blackout.hide();
}