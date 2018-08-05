$(document).ready(function(){
  // init variables
  var $form = $('#login-form');

  $form.on('submit', function(e){
    e.preventDefault();
    var $this = $(this);
        $formData = $this.serializeArray();
    
    $.ajax({
      method: 'POST',
      url: '/core/handlers/loginhandler.php',
      data: $formData
    }).done(function(result){
      console.log(result);
    });
  });
});