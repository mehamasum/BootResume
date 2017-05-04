<?php
    if($_GET['u']==null || strcmp($_GET['u'],"")==0 ){
        ob_start();
        header('Location: dashboard/page_404.html');
        ob_end_flush();
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_GET['u']." | Elegant Resume";   ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Build your personal resume web app with Elegant Resume">
    <meta name="author" content="Elegant Resume | Team Batfia">
    <link rel="image_src" href="build/ico/favicon.png" />

    <!-- Le styles -->
    <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>-->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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

    <style>
        .fat_br {
            line-height: 200%;
        }
    </style>


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

                </div>
            </h3>
        </div>
    </div>

</div>

<!--- main content block --->
<div class="container body_cont">
    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12" style=" background:white; padding:20px;">


        <div id="objective" style="display: block">
            <h3><i class="fa fa-check-square-o"></i> Objective</h3>
            <ul>

            </ul>
        </div>

        <div id="education-block">
            <h3><i class="fa fa-graduation-cap"></i> Education</h3>
            <div id="education">

            </div>
        </div>


        <div id="experience-block">
            <h3><i class="fa fa-briefcase"></i> Work</h3>
            <div id="experience">

            </div>
        </div>

        <div id="project-block">
            <h3><i class="fa fa-flask"></i> Projects</h3>
            <div id="project">

            </div>
        </div>

        <div id="publication-block">
            <h3><i class="fa fa-file-text"></i> Publications</h3>
            <div id="publication">

            </div>
        </div>

        <div id="honors-block">
            <h3><i class="fa fa-trophy"></i> Honors</h3>
            <div id="honors">

            </div>
        </div>

        <div id="activity-block">
            <h3><i class="fa fa-users"></i> Activities</h3>
            <div id="activity">

            </div>
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
				<p><small>© 2017 <a href="index.php">Elegant Resume Beta</a></small></p>
			</span>
    </div>
</div>

<!--
<script>$(".tip").tooltip({placement:"bottom"})</script>
<script>$(".tip2").tooltip({placement:"right"})</script>
--->
<script type="text/javascript" src="dashboard/whenhub_api/profile.js"></script>


<script>
    window.onload = function() {
        console.log("ready");
        get_profile('<?php echo $_GET['u']?>');
    };
</script>

</body>


</html>
