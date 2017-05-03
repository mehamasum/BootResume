<?php
    session_start();

    $_SESSION['profile']=$_GET['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TAG_LINE_ABOUT_YOU">
    <meta name="author" content="YOUR_NAME">

    <!-- Le styles -->
    <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>-->

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-fa fa-precomposed" sizes="144x144" href="build/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-fa fa-precomposed" sizes="114x114" href="build/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-fa fa-precomposed" sizes="72x72" href="build/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-fa fa-precomposed" href="build/ico/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="build/ico/favicon.ico">

    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <script src="vendors/nprogress/nprogress.js"></script>
    <script>
        // NProgress
        if (typeof NProgress != 'undefined') {
            $(document).ready(function () {
                NProgress.start();
            });
        }
    </script>


</head>

<body style="background:#E8E8E8; padding-top:20px; padding-bottom:20px; font-family: 'Lato', sans-serif;">
<!--- head block --->
<div class="container head_cont">

    <!--- tablet & desktop head --->
    <div class="row col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 hidden-xs" style="padding: 15px 15px 25px;">

        <!--<div style="width: 60px; height: 60px;">
            <img src="avatar.png" height="60px" width="60px" class="tip img-circle" data-toggle="tooltip" title="Hi there!">
        </div>

        <div class="pull-right">
            <h2 style="margin: 0px;">Your Name</h2><span>mehamasum@gmail.com | +8801521112085</span>
        </div>-->

        <div id="basic-normal" class="text-center">

        </div>

    </div>

    <!--- mobile / phone head --->
    <div class="visible-xs  col-xs-12" style="padding-bottom:10px;">
        <div>

            <!--<h3><img src="avatar.png" height="60px" width="60px" class="img-circle"> Your Name</h3>-->
            <div id="basic-mob">

            </div>
            <h3>
                <div id="social-mob">

                </div>>
            </h3>
        </div>
    </div>

</div>

<!--- main content block --->
<div class="container body_cont">
    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12" style=" background:white; padding:20px;">


        <div id="objective" style="display: block">
            <h3><i class="fa fa-tasks"></i> Objective</h3>
            <ul style="padding-bottom:5px;">
                To obtain a professional position in the consulting industry utilizing my relevant experience, technical expertise,
                and problem solving skills.
            </ul>
        </div>

        <h3><i class="fa fa-book"></i> Education</h3>
        <div id="education">


        </div>

        <h3><i class="fa fa-briefcase"></i> Work</h3>
        <div id="experience">


        </div>

        <h3><i class="fa fa-flask"></i> Projects</h3>
        <div id="project">


        </div>


        <h3><i class="fa fa-file-text"></i> Publications</h3>
        <div id="publication">


        </div>

        <h3><i class="fa fa-lightbulb-o"></i> Honors</h3>
        <div id="honors">


        </div>

        <h3><i class="fa fa-comments"></i> Activities</h3>
        <div id="activity">


        </div>


    </div>

    <!-- contact / social icons for desktop/tablet view-->
    <div id="social-normal" class="col-lg-1 col-sm-1 col-md-1 hidden-xs" style="padding-left: 30px">

    </div>
</div><br>
<!-- footer div-->
<div class="container">
    <div class="row">
			<span class="span8 offset2 text-center">
				<p><small>© 2017 <a href="dashboard/login.php">Elegant Resume</a></small></p>
			</span>
    </div>
</div>

<script>$(".tip").tooltip({placement:"bottom"})</script>
<script>$(".tip2").tooltip({placement:"right"})</script>
<script type="text/javascript" src="dashboard/whenhub_api/profile.js"></script>

</body>


</html>
