Dropzone.autoDiscover = false;
$(function(){
  var baseURL = document.getElementById('constant_url').value;
  
  var dropzoneRes = new Dropzone('#dropzoneRes', {
    url: baseURL+"admin/upload/optimum/residential",
    headers: {
      'X-CSRF-Token': $('input[name="_token"]').val()
    },
    sending: function(file, xhr, formData){
      formData.append('groupName', $('#chosenGroupName').val());
    },
  });

  var dropzoneOff = new Dropzone('#dropzoneOff', {
    url: baseURL+"admin/upload/optimum/offices",
    headers: {
      'X-CSRF-Token': $('input[name="_token"]').val()
    },
    sending: function(file, xhr, formData){
      formData.append('groupName', $('#chosenGroupName').val());
    },
  });

  var dropzoneRet = new Dropzone('#dropzoneRet', {
    url: baseURL+"admin/upload/optimum/retail",
    headers: {
      'X-CSRF-Token': $('input[name="_token"]').val()
    },
    sending: function(file, xhr, formData){
      formData.append('groupName', $('#chosenGroupName').val());
    },
  });

});  