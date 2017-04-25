<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Elegant Resume </title>

    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <?php include ('includes/top_imports.php') ?>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form data-parsley-validate action="javascript:login_submit();">
                <h1>Login</h1>

                <div id="error_msg_login_well" class="well" style="display: none">
                    <div id="error_msg_login"></div>
                </div>

                <div>
                <input type="text" id="login_username" class="form-control" placeholder="Username" data-parsley-required="true" />
              </div>
              <div>
                <input type="password" id="login_password" class="form-control" placeholder="Password" data-parsley-required="true" />
              </div>
              <div>
                  <button type="submit" class="btn btn-default submit">Login</button>

                  <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                    <h1><i class="fa fa-asterisk"></i> Elegant Resume</h1>
                    <p>© 2017, Batfia. All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form data-parsley-validate action="javascript:signup_submit();">
                <h1>Create Account</h1>

                <div id="error_msg_signup_well" class="well" style="display: none">
                    <div id="error_msg_signup"></div>
                </div>


                <div>
                    <input id="signup_username" type="text" class="form-control" placeholder="Username" data-parsley-required="true" />
                </div>

                <div>
                    <input id="signup_password" type="password" class="form-control" placeholder="Password" data-parsley-required="true" />
                </div>

                <div>
                    <input id="signup_fullname" type="text" class="form-control" placeholder="Full Name" data-parsley-required="true" />
                </div>

                <div>
                    <input id="signup_email" type="email" class="form-control" placeholder="Email" data-parsley-required="true" />
                </div>



                <div>
                    <button type="submit" class="btn btn-default submit">Sign Up</button>
                </div>

                <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-asterisk"></i> Elegant Resume</h1>
                  <p>© 2017, Batfia. All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>



    <?php include ('includes/bottom_imports.php') ?>
    <script type="text/javascript" src="js/form_on_submit.js"></script>
  </body>
</html>
