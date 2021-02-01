<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>BudgetMobile login</title>
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="<?php echo base_url(); ?>adminfiles/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url(); ?>adminfiles/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url(); ?>adminfiles/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>adminfiles/img/favicon.ico">
    <!-- end: Favicon -->

<style>
    span.add-on{
        border: 1px solid #000000 !important;
    }
</style>

</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">

                <div class="icons" style="margin: 17px 17px 43px;">
                    <a href="<?php echo base_url(); ?>"><i class="halflings-icon home"></i></a>
                    <!--<a href="#"><i class="halflings-icon cog"></i></a>-->
                    <a class="brand" href="<?php echo base_url()?>" style="float: left;">
                        <img src="<?php echo base_url() ?>adminfiles/img/icon.png" style="height: 50px;" alt="icon" title="Budget Mobiles">
                    </a>
                </div>
                <?php
                if ($this->session->flashdata('message')) {
                    echo '<div class="alert alert-danger" id="message">';
                    echo '<b>' . $this->session->flashdata('message') . '</b>';
                    echo '</div>';
                }
                ?>
                <h2>Login to your account</h2>
                <form class="form-horizontal" action="" method="post">
                    <fieldset>

                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="email" id="username" required=""
                                   type="text" placeholder="Enter User ID"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password"
                                   type="password" placeholder="Enter Password"/>
                        </div>
                        <div class="clearfix"></div>

                        <!--<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>-->

                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="clearfix"></div>
                </form>
                <hr>
                <!--                        <h3>Forgot Password?</h3>-->
                <!--                        <p>
                                            No problem, <a href="#">click here</a> to get a new password.
                                        </p>	-->

            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->

<!-- start: JavaScript-->

<script src="<?php echo base_url(); ?>adminfiles/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>adminfiles/js/jquery-migrate-1.0.0.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.ui.touch-punch.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/modernizr.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.cookie.js"></script>

<script src='<?php echo base_url(); ?>adminfiles/js/fullcalendar.min.js'></script>

<script src='<?php echo base_url(); ?>adminfiles/js/jquery.dataTables.min.js'></script>

<script src="<?php echo base_url(); ?>adminfiles/js/excanvas.js"></script>
<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.pie.js"></script>
<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.stack.js"></script>
<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.resize.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.chosen.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.uniform.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.cleditor.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.noty.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.elfinder.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.raty.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.iphone.toggle.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.uploadify-3.1.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.gritter.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.imagesloaded.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.masonry.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.knob.modified.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/counter.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/retina.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>
