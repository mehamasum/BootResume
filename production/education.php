<?php include ('includes/sess.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Elegant Resume</title>

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
                        <h3>Education</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
                            <a href="education_input.php" class="btn btn-block btn-primary"><i class="fa fa-folder"></i> Add New School </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h4>All Schools</h4>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <p>You can add, edit, modify or delete schools</p>

                                <!-- start project list -->
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 20%">School</th>
                                        <th>Time period</th>
                                        <th style="width: 50%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <a>Name of event</a>
                                            <br />
                                            <small>Tags: tag1, tag2, tag3</small>
                                        </td>
                                        <td>
                                            <a>Nov 2016 to Present</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <a>Pesamakini Backend UI</a>
                                            <br />
                                            <small>Created 01.01.2015</small>
                                        </td>
                                        <td>
                                            <a>Pesamakini Backend UI</a>
                                            <br />
                                            <small>Created 01.01.2015</small>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <a>Pesamakini Backend UI</a>
                                            <br />
                                            <small>Created 01.01.2015</small>
                                        </td>
                                        <td>
                                            <a>Pesamakini Backend UI</a>
                                            <br />
                                            <small>Created 01.01.2015</small>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- end project list -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <?php include ('includes/footer.php') ?>
    </div>
</div>

<?php include ('includes/bottom_imports.php') ?>
</body>
</html>
