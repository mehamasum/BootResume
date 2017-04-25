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


        <?php
        // "<script> console.log('". $_SERVER['PHP_SELF']."'); </script>";
        include('body/basic_body.php')
        ?>

        <?php include ('includes/footer.php') ?>
      </div>
    </div>

    <?php include ('includes/bottom_imports.php') ?>
  </body>
</html>
