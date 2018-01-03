Dropzone.autoDiscover = false;
$(function(){
  var baseURL = document.getElementById('constant_url').value;
  
  var dropzoneRes = new Dropzone('#dropzoneResYD', {
    url: baseURL+"admin/upload/ycodesign/residential",
    headers: {
      'X-CSRF-Token': $('input[name="_token"]').val()
    },
    sending: function(file, xhr, formData){
      formData.append('groupName', $('#chosenGroupName').val());
    },
  });

  var dropzoneOff = new Dropzone('#dropzoneOffYD', {
    url: baseURL+"admin/upload/ycodesign/offices",
    headers: {
      'X-CSRF-Token': $('input[name="_token"]').val()
    },
    sending: function(file, xhr, formData){
      formData.append('groupName', $('#chosenGroupName').val());
    },
  });

  var dropzoneRet = new Dropzone('#dropzoneRetYD', {
    url: baseURL+"admin/upload/ycodesign/retail",
    headers: {
      'X-CSRF-Token': $('input[name="_token"]').val()
    },
    sending: function(file, xhr, formData){
      formData.append('groupName', $('#chosenGroupName').val());
    },
  });

});  