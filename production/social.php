<?php include ('includes/sess.php')
?>

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
                        <h3>Social Media</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h4>Leave fields empty to hide</h4>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />




                                <form action="javascript:submit();" data-parsley-validate class="form-horizontal form-label-left">

                                    <?php
                                    $media = ["LinkedIn", "Twitter", "Github", "Facebook", "Google", "Skype", "Flickr", "Instagram", "Tumblr", "Youtube"];

                                    foreach($media as $m) {
                                        ?>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="<?php echo $m?>"><?php echo $m?>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input data-parsley-type="url" type="text" id="<?php echo $m?>"  class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <?php
                                    }

                                    ?>



                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>

                                </form>
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


<script>


    $(window).load(function() {

        $.post("../db-app/social-get.php", {

            data: "null"

        }, function (data) {
            console.log(data);
            var ara= JSON.parse(data);
            console.log(ara[0]);


            var sm = ["LinkedIn", "Twitter", "Github", "Facebook", "Google", "Skype", "Flickr", "Instagram", "Tumblr", "Youtube"];

            var it;
            for( it=0; it<sm.length; it++) {
                $("#"+sm[it]).val();
                document.getElementById(sm[it]).value = ara[0][it+1];
            }

        });

    });






    function submit() {

        NProgress.start();

        var sm = ["LinkedIn", "Twitter", "Github", "Facebook", "Google", "Skype", "Flickr", "Instagram", "Tumblr", "Youtube"];
        var sm_val = [];

        var it;
        for( it=0; it<sm.length; it++) {
            sm_val.push($("#"+sm[it]).val());
        }

        for(it=0; it<sm.length; it++) {
            console.log(sm_val[it]);
        }

        $.post("../db-app/social.php", {

            li: sm_val[0],
            tw: sm_val[1],
            gi: sm_val[2],
            fa: sm_val[3],
            go: sm_val[4],
            sk: sm_val[5],
            fl: sm_val[6],
            insta: sm_val[7],
            tu: sm_val[8],
            yo: sm_val[9]

        }, function (data) {
            NProgress.done();
            NProgress.remove();

            if (data.includes("success")) {
                new PNotify({
                    title: 'Success',
                    text: 'Profile updated',
                    type: 'success',
                    styling: 'bootstrap3'
                });
            }
            else {
                new PNotify({
                    title: 'Error updating data',
                    text: data,
                    type: 'error',
                    styling: 'bootstrap3'
                });

            }

        });
    }
</script>
</body>
</html>
