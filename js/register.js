$(document).ready(function(){

  let $registerPasswordInput = $("#registerPasswordInput");
  let $registerPasswordInputConfirm = $("#registerPasswordInputConfirm");
  let $registerEmailInput = $("#registerEmailInput");

  //let $showHidePassword = $("#showHidePassword");
  //let $eyeCon = $("#eyeCon");

  let $registerButton = $("#registerFormSubmitButton");
  let $registrationMessage = $("#registrationMessage");

  let $registerDropdownButton = $("#dropdownMenu2");

  // when the Login form button is clicked,
  $registerButton.on('click', function(event) {
    handleRegisterButtonClick(event);
  });

  function handleRegisterButtonClick(event) {

    event.preventDefault();

    // get the email & pwd from the login form
    let email = $registerEmailInput.val();
    let password = $registerPasswordInput.val();

    // before we post the data, we should do a little validation
    // and at least make sure the user entered something

    // if the users have entered nothing, we have to let them know. . .
    if (email == "" || password == "") {

      // move the focus to the empty element and HTML will do the Reset
      if (email == "")$registerEmailInput.focus();
      else $registerPasswordInput.focus();

      return;

    } else {

      // create a data object to post to the server
      let registerData = {}
      registerData.email = email;
      registerData.password = password;

      console.log(registerData);

      // post the data to our php side server
      $.post('register.php', registerData, function(data, status, xhr) {
        // check for errors
        handleRegisterPostRequest(data, status, xhr);
      });

    }

  }

  function handleRegisterPostRequest(data, status, xhr) {
    console.log(data);
    console.log('a user may have been added');
    $registrationMessage.text(data);
  }

});
