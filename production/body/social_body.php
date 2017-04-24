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
                        <form data-parsley-validate class="form-horizontal form-label-left">

                            <?php
                                $media = ["LinkedIn", "Twitter", "Github", "Facebook", "Google+", "Skype", "Flickr", "Instagram", "Tumblr", "Youtube"];

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
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
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