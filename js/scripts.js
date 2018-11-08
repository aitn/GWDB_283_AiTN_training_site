
$(document).ready(function(){

  let $passwordInput = $("#passwordInput");
  let $showHidePassword = $("#showHidePassword");
  let $eyeCon = $("#eyeCon");
  let $loginButton = $("#loginFormSubmitButton");

  let $loginDropdownButton = $("#dropdownMenu1");

  $loginDropdownButton.on('click', function(event) {
    console.log("click");
  });

  // show and hide the password field when the eye icon is clicked
  $showHidePassword.on('click', function(event){
    event.preventDefault();

    if ($passwordInput.attr("type") == "password") {
      $eyeCon.removeClass("fa-eye-slash");
      $eyeCon.addClass("fa-eye");
      $passwordInput.attr("type", "text");
    } else {
      $eyeCon.removeClass("fa-eye");
      $eyeCon.addClass("fa-eye-slash");
      $passwordInput.attr("type", "password");
    }
  });

  // when the Login form button is clicked,
  $loginButton.on('click', function(event) {

    let password = $passwordInput.val();
    console.log(password);

  });

});
