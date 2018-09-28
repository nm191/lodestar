$(document).ready(function(){
  // init variables
  var $form = $('#login-form');

  $form.on('submit', function(e){
    e.preventDefault();
    var $this = $(this);
        $formData = $this.serializeArray();
        $alertContainer = $('.alert-container');
        $submitButton = $('.btn-login');
        
    $submitButton.prepend('<i class="far fa-spinner fa-pulse"></i> ');
    $.ajax({
      method: 'POST',
      url: '/core/handlers/loginhandler.php',
      data: $formData
    }).done(function(result){
      $submitButton.find('.fa-spinner').remove();
      console.log(result);
      if(result == 1){
        window.location.replace('/dashboard');
      }else{
        $alertContainer.html(result);
      }
      
    });
  });
});