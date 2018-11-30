<?php
/**
  * header.php
  */
?>

<body>

  <div id="wrapper">

    <header>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
          <div class="container">
              <a class="navbar-brand" href="#">AiTN Training Site</a>
              <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                  &#9776;
              </button>
              <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                  <ul class="nav navbar-nav">
                      <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">More</a></li>
                  </ul>
                  <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                      <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                      <li class="dropdown order-1">
                          <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                          <button type="button" id="dropdownMenu2" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Register <span class="caret"></span></button>
                          <ul id="loginFormDropdown" class="dropdown-menu dropdown-menu-right mt-2">
                             <li class="px-3 py-2">
                                 <form id="loginForm" class="form" role="form">

                                      <div class="form-group">
                                          <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="" pattern="\S+@\S+\.\S+">
                                      </div>

                                      <div class="form-group">
                                        <div class="input-group mb-3">
                                          <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                          <div class="input-group-append">
                                            <a id="showHidePassword" href=""><i id="eyeCon" class="input-group-text fa fa-eye-slash"></i></a>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <button id="loginFormSubmitButton" type="submit" class="btn btn-primary btn-block">Login</button>
                                      </div>

                                      <div class="form-group text-center">
                                          <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                      </div>
                                  </form>
                              </li>
                          </ul>
                          <ul id="registerFormDropdown" class="dropdown-menu dropdown-menu-right mt-2">
                             <li class="px-3 py-2">
                                 <form id="registerForm" class="form" role="form">

                                      <div class="form-group">
                                          <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="" pattern="\S+@\S+\.\S+">
                                      </div>

                                      <div class="form-group">
                                        <div class="input-group mb-3">
                                          <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                          <div class="input-group-append">
                                            <a id="showHidePassword" href=""><i id="eyeCon" class="input-group-text fa fa-eye-slash"></i></a>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <button id="loginFormSubmitButton" type="submit" class="btn btn-primary btn-block">Login</button>
                                      </div>

                                      <div class="form-group text-center">
                                          <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                      </div>
                                  </form>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

      <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3>Forgot password</h3>
                      <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                      <p>Reset your password..</p>
                  </div>
                  <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                      <button class="btn btn-primary">Save changes</button>
                  </div>
              </div>
          </div>
      </div>

    </header>
