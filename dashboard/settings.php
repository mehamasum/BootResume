<?php include ('includes/sess.php') ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Settings | Elegant Resume</title>
    <?php include ('includes/fav.php') ?>

    <?php include ('includes/top_imports.php') ?>


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php include ('includes/menu.php') ?>

        <?php include ('includes/top_nav.php') ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Account Settings</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
                  <button type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#delete_modal" class="btn btn-block btn-danger"><i class="fa fa-ban"></i> Delete Account </button>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Visualization Options</h4>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="img-form" data-parsley-validate class="form-horizontal form-label-left" action="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="theme">Resume Theme <label class="label label-primary">Coming Soon</label>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="theme" class="form-control">
                            <option value="00">Default</option>
                          </select>
                        </div>
                      </div>

                      <div id="delete_modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
                            </div>

                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label class="control-label" for="basic_pass">Enter your password
                                  </label>
                                  <div>
                                    <input data-parsley-required="true" type="password" id="basic_pass"  class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <br/><br/>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" id="pseudo_submit">Delete Account</button>

                              </form>


                            </div>

                          </div>

                        </div>
                      </div>




                      <div class="ln_solid"></div>




                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <script type="text/javascript" src="js/basic.js"></script>
        /page content -->

        <?php include ('includes/footer.php') ?>
      </div>
    </div>

    <?php include ('includes/bottom_imports.php') ?>

  <script src="whenhub_api/delete.js"></script>

  </body>
</html>
