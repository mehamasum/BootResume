<?php
session_start();
if(isset($_SESSION['user'])) {
    ob_start();
    header('Location: dashboard/index.php');
    ob_end_flush();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Build your personal resume web app with Elegant Resume">
    <meta name="author" content="Elegant Resume | Team Batfia">

    <title>Elegant Resume</title>

    <!-- Custom CSS -->
    <link href="build/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
        .bg-primary {
            background-color: #2A3F54;
            color: #FFFFFF;
        }

        .text-primary {
            color: #2A3F54;
        }

        .text-white {
            color: #ffffff;
        }
    </style>

</head>

<body>


<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1 class="text-white"><i class="fa fa-asterisk"></i> Elegant Resume </h1>
        <div class="label label-small label-warning col-md-offset-5">Beta</div>
        <h3 class="text-white">Build your personal resume web app!</h3>
        <br>
        <a href="dashboard/login.php" class="btn btn-primary btn-lg">Get Started</a>
    </div>
</header>

<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary">Build neat, elegant resumes within minutes!</h2>
                <h4 class="text-primary">Not a Tech guy? We got you covered.</h4>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2 style="color: white">Why Elegant Resume?</h2>
                <br/><br/>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-money fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Free</strong>
                            </h4>
                            <p>Elegant Resume is free of any cost.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-pencil-square-o fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Simple Dashboard</strong>
                            </h4>
                            <p>Easy to use dashboard to build your resume.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-hashtag fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Elegant & Interactive</strong>
                            </h4>
                            <p>Simple looking interactive tags on your resume.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-code-fork fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Open Source</strong>
                            </h4>
                            <p>Want to contribute? <br/><a style="color: #00caff" href="https://github.com/mehamasum/ElegantResume" class="my_white_link">Get started</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4 class="text-primary"><span><i class="fa fa-asterisk"></i> Elegant Resume</span></h4>
                <p class="text-primary">Built with love by Team Batfia
                    <br>University of Dhaka</p>
                <hr class="small">
                <ul class="list-unstyled">
                    <li class="text-primary"><i class="fa fa-phone fa-fw"></i> (+880) 152-111-2085</li>
                    <li class="text-primary"><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:team.batfia@gmail.com" class="my_link">team.batfia@gmail.com</a>
                    </li>
                </ul>
                <br>
                <hr class="small">
                <p class="text-primary">© 2017, Batfia. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</footer>

<!-- jQuery -->
<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>
