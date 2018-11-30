<?php

/**
 * register.php
 */

 @include_once("head.php");

 @include_once("header.php");

 ?>

<section id="content">

<p class="welcome">REGISTER AN ACCOUNT</p>

 <form id="registerForm" class="form" role="form">

    <div class="form-group">
        <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="" pattern="\S+@\S+\.\S+">
        <input id="emailInputMatch" placeholder="Email Again" class="form-control form-control-sm" type="text" required="" pattern="\S+@\S+\.\S+">
    </div>

    <div class="form-group">
      <div class="input-group mb-3">
        <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
        <input id="passwordInputMatch" placeholder="Password Again" class="form-control form-control-sm" type="password" required="">
        <div class="input-group-append">
          <a id="showHidePassword" href=""><i id="eyeCon" class="input-group-text fa fa-eye-slash"></i></a>
        </div>
      </div>
    </div>

    <div class="form-group">
        <button id="registerFormSubmitButton" type="submit" class="btn btn-primary btn-block">Register Account</button>
    </div>

    <div class="form-group text-center">
        <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
    </div>
</form>

</section>

<?php

@include_once("footer.php");

 ?>
