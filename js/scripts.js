
$(document).ready(function(){

  let $passwordInput = $("#passwordInput");
  let $emailInput = $("#emailInput");
  let $showHidePassword = $("#showHidePassword");
  let $eyeCon = $("#eyeCon");
  let $loginButton = $("#loginFormSubmitButton");

  let $loginDropdownButton = $("#dropdownMenu1");

  $loginDropdownButton.on('click', function(event) {
    console.log("click");
  });

  // show and hide the password field when the eye icon is clicked
  $showHidePassword.on('click', function(event){
    handleShowPasswordButtonClick(event);
  });

  // when the Login form button is clicked,
  $loginButton.on('click', function(event) {
    handleLoginButtonClick(data);
  });

  function handleShowPasswordButtonClick(event) {
    
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
  }

  function handleLoginButtonClick(event) {

    // get the email & pwd from the login form
    let email = $emailInput.val();
    let password = $passwordInput.val();

    // create a data object to post to the server
    let loginData = {}
    loginData.email = email;
    loginData.password = password;

    // before we post the data, we should do a little validation
    // and at least make sure the user entered something

    // post the data to our php side server
    $.post('login.php', loginData, function(data, status, xhr) {

        // check for errors
    });
  }

});
