export default class EditarCategoria {
  
  constructor(btnSubmit, fileAjax, idForm) {
    this.btnSubmit = btnSubmit;
    this.fileAjax = fileAjax;
    this.idForm = idForm;
  }

  publicarPostAjax() {
    $(this.btnSubmit).click((e) => {
      e.preventDefault();
      
      var form = document.getElementById(this.idForm)
      console.log(form);
      var formData = new FormData(form);

      $.ajax({
        url: `http://localhost/yume/ajax/${this.fileAjax}`,
        method: 'post',
        data: formData,
        contentType: false,
        processData: false
      }).done(function(data) {
        if (data) {
          $('.login-form').append(data);
        }
      })
    })
  }
}