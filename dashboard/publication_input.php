<?php include ('includes/sess.php');

$edit = false;

//TODO: risky call, assuming it is already set :/
$schedule_id = $_SESSION['schedule_id'];  // "58fa07bbc7ddaa3b7464e0ac";

if(isset($_GET['eventId'])) {
    $edit = true;
    $actionUrl = "javascript:update_event('". $schedule_id. "', '". $_GET['eventId']. "', 'PUB');";
}
else {
    $actionUrl = "javascript:create_event('". $schedule_id. "', 'PUB');";
}

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
                        <h3>Publication Details</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
                            <a href="help.php#hon" class="btn btn-block btn-info"><i class="fa fa-info-circle"></i> Help </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h4>Required fields are marked with *</h4>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <!--form-->

                                <form data-parsley-validate action="<?php echo $actionUrl?>" class="form-horizontal form-label-left">

                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-PUBanded="true">Info</a>
                                            </li>

                                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-PUBanded="false">Description</a>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                <div class="clearfix"></div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input data-parsley-required="true" type="text" id="name" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subtitle1">Co-authors
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="subtitle1" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Date<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <select id="startMonth" class="form-control">
                                                            <option value="00">Choose Month</option>
                                                            <?php
                                                            $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
                                                            foreach ($months as $num => $name) {
                                                                printf('<option value="%02u">%s</option>', $num, $name);
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <select data-parsley-required="true" id="startYear" class="form-control">
                                                            <option value="0000">Choose Year</option>
                                                            <?php
                                                            $year = intval(date("Y"));
                                                            for ($i=$year; $i>1955; $i--) {
                                                                printf('<option value="%04u">%s</option>', $i, strval($i));
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group" style="display: none;">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact">End Date
                                                        <small>(Leave empty if none)</small>
                                                    </label>

                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <select id="endMonth" class="form-control">
                                                            <option value="00">Choose Month</option>
                                                            <?php
                                                            $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
                                                            foreach ($months as $num => $name) {
                                                                printf('<option value="%02u">%s</option>', $num, $name);
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <select id="endYear" class="form-control">
                                                            <option value="0000">Choose Year</option>
                                                            <?php
                                                            $year = intval(date("Y"));
                                                            for ($i=$year; $i>1955; $i--) {
                                                                printf('<option value="%04u">%s</option>', $i, strval($i));
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="ln_solid"></div>

                                                <?php include ('tags.php')?>

                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                <div class="clearfix"></div>
                                                <div style="display: none" class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image_picker">Add Featured Image
                                                        <small>(2:1 ratio)</small>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="text-center well" style="margin-bottom: 10px">
                                                            <img id="featured_img" src="images/media.jpg" alt="Featured" width="300px" height="150px" />
                                                        </div>
                                                        <input type="file" id="image_picker" onchange="readURL(this);" class="form-control imgUpload col-md-7 col-xs-12" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                        <script>
                                                            function readURL(input) {
                                                                if (input.files && input.files[0]) {
                                                                    var reader = new FileReader();

                                                                    reader.onload = function (e) {
                                                                        $('#featured_img').attr('src', e.target.result);
                                                                    };

                                                                    reader.readAsDataURL(input.files[0]);
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>

                                                <div style="display: none" class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="video">Embed Youtube video
                                                    </label>

                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input data-parsley-type="url" type="url" id="video" class="form-control col-md-7 col-xs-12">
                                                    </div>

                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description (1000 chars max)</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <textarea id="description" class="form-control" rows="10" placeholder='Small description...' data-parsley-trigger="keyup" data-parsley-minlength="0" data-parsley-maxlength="1000" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                                      data-parsley-validation-threshold="10"></textarea>
                                                    </div>
                                                </div>




                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="btn_label">Action Button Title
                                                    </label>

                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="btn_label" placeholder="i.e: See on IEEE PUBlore..." class="form-control col-md-7 col-xs-12">
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="btn_url">Action Button Url
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input data-parsley-type="url" pattern="https?://.+" type="text" id="btn_url" placeholder="Url" class="form-control col-md-7 col-xs-12">
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button onclick="location.href='publications.php';" class="btn btn-primary" type="button">Cancel</button>
                                            <button type="submit" class="btn btn-success"><?php if($edit) echo "Update Publication"; else echo "Add New Publication";?></button>
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

<script src="whenhub_api/event.js"></script>
<?php include ('includes/bottom_imports.php');
include ('includes/hashtags.php');
    if($edit) { ?>
        <script>
            window.onload = function() {
                console.log("ready");
                $(".resume_tag").hashtags();
                get_details('<?php echo $schedule_id?>', "<?php echo $_GET['eventId']?>", "PUB");
            };
        </script>
    <?php
    } else { ?>
        <script>
            window.onload = function() {
                console.log("ready");
                $(".resume_tag").hashtags();
            };
        </script>
        <?php
    }
?>

</body>
</html>
