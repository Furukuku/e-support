// resident register
$(function(){
  $('#register-form').submit(function(e){
    e.preventDefault();

    const regModal = bootstrap.Modal.getOrCreateInstance('#registerModal');
    $('#reg-btn').val('Please Wait...');
    $('#reg-btn').attr('disabled', 'disabled');
    $.ajax({
      url:  $(this).attr('action'),
      method: 'post',
      data: $(this).serialize(),
      dataType: 'json',
      success: function(res){
        if(res.status == 400){
          showError('reg-lname', res.messages.last_name);
          showError('reg-fname', res.messages.first_name);
          showError('reg-mname', res.messages.middle_name);
          showError('reg-sname', res.messages.suffix_name);
          showError('display-pict', res.messages.display_picture);
          showError('reg-bday', res.messages.birthday);
          showError('reg-email', res.messages.email);
          showError('reg-contact', res.messages.contact);
          showError('reg-zone', res.messages.zone);
          showError('reg-e-status', res.messages.e_status);
          showError('reg-gender', res.messages.gender);
          showError('family-head', res.messages.family_head);
          showError('reg-username', res.messages.username);
          showError('reg-password', res.messages.password);
          $('#reg-btn').val('Register');
          $('#reg-btn').removeAttr('disabled');
        }else if(res.status == 200){
          $('#registered-complete').html(showMessage('success', res.messages));
          $('#register-form')[0].reset();
          removeValidationClasses('#register-form');
          $('#reg-btn').val('Register');
          $('#reg-btn').removeAttr('disabled');
          regModal.hide();
          
        }
      }
    });
  });
});

function showError(field, message){
  if(!message){
    $('#' + field).addClass('is-valid').removeClass('is-invalid').siblings('.invalid-feedback').text('');
  }else{
    $('#' + field).addClass('is-invalid').removeClass('is-valid').siblings('.invalid-feedback').text(message);
  }
}

function removeValidationClasses(form){
  $(form).each(function(){
    $(form).find(':input').removeClass('is-valid is-invalid');
  });
}

function showMessage(type, message){
  return `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
  <strong>${message}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>`
}


// company register
$(function(){
  $('#company-form').submit(function(e){
    e.preventDefault();

    const comModal = bootstrap.Modal.getOrCreateInstance('#companyModal');
    $.ajax({
      url:  $(this).attr('action'),
      method: 'post',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function(){
        $('#com-btn').val('Please Wait...');
        $('#com-btn').attr('disabled', 'disabled');
      },
      success: function(res){
        if(res.status == 400){
          showErrorCom('business-name', res.messages.business_name);
          showErrorCom('business-address', res.messages.business_address);
          showErrorCom('business-nature', res.messages.business_nature);
          showErrorCom('com-lname', res.messages.last_name);
          showErrorCom('com-fname', res.messages.first_name);
          showErrorCom('com-mname', res.messages.middle_name);
          showErrorCom('com-sname', res.messages.suffix_name);
          showErrorCom('com-display-pict', res.messages.display_picture);
          showErrorCom('com-email', res.messages.email);
          showErrorCom('com-contact', res.messages.contact);
          showErrorCom('com-username', res.messages.username);
          showErrorCom('com-password', res.messages.password);
          showErrorCom('com-clearance', res.messages.business_clearance);
          $('#com-btn').val('Register');
          $('#com-btn').removeAttr('disabled');
        }else if(res.status == 200){
          $('#registered-complete').html(showMessageCom('success', res.messages));
          $('#company-form')[0].reset();
          removeValidationClassesCom('#company-form');
          $('#com-btn').val('Register');
          $('#com-btn').removeAttr('disabled');
          comModal.hide();
          
        }
      }
    });
  });
});

function showErrorCom(field, message){
  if(!message){
    $('#' + field).addClass('is-valid').removeClass('is-invalid').siblings('.invalid-feedback').text('');
  }else{
    $('#' + field).addClass('is-invalid').removeClass('is-valid').siblings('.invalid-feedback').text(message);
  }
}

function removeValidationClassesCom(form){
  $(form).each(function(){
    $(form).find(':input').removeClass('is-valid is-invalid');
  });
}

function showMessageCom(type, message){
  return `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
  <strong>${message}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>`
}