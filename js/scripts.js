
$(document).ready(function(){

  let $passwordInput = $("#passwordInput");
  let $showHidePassword = $("#showHidePassword");
  let $eyeCon = $("#eyeCon");

  console.log(showHidePassword);

  $showHidePassword.on('click', function(event){
    event.preventDefault();
    console.log("eyeball was clicked");

    if ($passwordInput.attr("type") == "password") {
      console.log("type is password")
      $eyeCon.removeClass("fa-eye-slash");
      $eyeCon.addClass("fa-eye");
      $passwordInput.attr("type", "text");
    } else {
      $eyeCon.removeClass("fa-eye");
      $eyeCon.addClass("fa-eye-slash");
      $passwordInput.attr("type", "password");
    }
  });

});
