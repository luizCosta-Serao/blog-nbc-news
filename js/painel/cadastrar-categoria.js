export default class CadastrarCategoria {
  constructor(btnSubmit, fileAjax, idForm) {
    this.btnSubmit = btnSubmit;
    this.fileAjax = fileAjax;
    this.idForm = idForm;
  }

  cadastrarCategoriaAjax() {
    $(this.btnSubmit).click((e) => {
      e.preventDefault();

      var form = document.getElementById(this.idForm)
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