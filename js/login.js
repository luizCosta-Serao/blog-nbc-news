export default class Login {
  constructor(btnSubmit, fileAjax, idForm) {
    this.btnSubmit = btnSubmit;
    this.fileAjax = fileAjax;
    this.idForm = idForm;
  }

  loginAjax() {
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
        } else {
          window.location.href = 'http://localhost/yume/';
        }
      })
    })
  }
}