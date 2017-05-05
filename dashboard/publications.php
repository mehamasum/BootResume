<?php include ('includes/sess.php');
$schedule_id = $_SESSION['schedule_id'];  // "58fa07bbc7ddaa3b7464e0ac";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Publication | Elegant Resume</title>
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
                        <h3>Publications</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
                            <a href="publication_input.php" class="btn btn-block btn-primary"><i class="fa fa-folder"></i> Add New Publication </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h4>All Publications</h4>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <p>You can add, modify or delete publications</p>

                                <!-- start project list -->
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th style="width: 30%">Publication</th>
                                        <th>Time period</th>
                                        <th style="width: 30%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table_body">
                                    <!--<tr>
                                        <td>#</td>
                                        <td><a>Name of event</a><br /></td>
                                        <td><a>Nov 2016 to Present</a></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                        </td>
                                    </tr>-->
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

<script src="whenhub_api/event.js"></script>
<?php include ('includes/bottom_imports.php') ?>

<script>
    window.onload = function() {
        console.log("ready");
        get_events('<?php echo $schedule_id?>', "PUB");
    };
</script>
</body>
</html>
