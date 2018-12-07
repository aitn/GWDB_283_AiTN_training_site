
$(document).ready(function(){

  let $passwordInput = $("#passwordInput");
  let $emailInput = $("#emailInput");
  let $showHidePassword = $("#showHidePassword");
  let $eyeCon = $("#eyeCon");
  let $loginButton = $("#loginFormSubmitButton");

  let $loginDropdownButton = $("#dropdownMenu1");
  let $loginMessage = $("#loginMessage");

  $loginDropdownButton.on('click', function(event) {
    // do something
  });

  // show and hide the password field when the eye icon is clicked
  $showHidePassword.on('click', function(event){
    handleShowPasswordButtonClick(event);
  });

  // when the Login form button is clicked,
  $loginButton.on('click', function(event) {
    handleLoginButtonClick(event);
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

    event.preventDefault();

    // get the email & pwd from the login form
    let email = $emailInput.val();
    let password = $passwordInput.val();

    // before we post the data, we should do a little validation
    // and at least make sure the user entered something

    // if the users have entered nothing, we have to let them know. . .
    if (email == "" || password == "") {

      // move the focus to the empty element and HTML will do the Reset
      if (email == "")$emailInput.focus();
      else $passwordInput.focus();

      return;

    } else {

      // create a data object to post to the server
      let loginData = {}
      loginData.email = email;
      loginData.password = password;

      // post the data to our php side server
      $.post('login.php', loginData, function(data, status, xhr) {
          // check for errors
          handleLoginPostRequest(data, status, xhr);
      });

    }

  }

  function handleLoginPostRequest(data, status, xhr) {
    console.log(data);

    $loginMessage.text(data);
    // so when this comes back positive, from the user having logged in,
    // you'll need to update the UI, remove the register and login buttons,
    // and display some kind of username of profile pic in that area,
    // along with a link to log out.
  }

});
