<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <?php if(isset($page_title))
        echo '<title>'.$page_title.'</title>';
        else
        echo '<title>BudgetMobile</title>';
        ?>



        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->
        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo base_url() ?>adminfiles/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url() ?>adminfiles/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url() ?>adminfiles/css/style-responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>adminfiles/css/validationEngine.jquery.css" type="text/css"/>

<!--        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>-->
        <!-- end: CSS -->
        <script src="<?php echo base_url() ?>adminfiles/js/jquery-1.9.1.min.js"></script>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
<!--                <link id="ie-style" href="css/ie.css" rel="stylesheet">-->
        <![endif]-->

        <!--[if IE 9]>
                <!--<link id="ie9style" href="css/ie9.css" rel="stylesheet">-->
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico" type="image/gif" sizes="16x16" />
        <!-- end: Favicon -->

        <script>
            var BASE_URL='<?php echo base_url(); ?>';
        </script>


    </head>

    <body>
    <style>
        #content {
            width: 100%;
            padding: 0px;
            margin: 0px 0px;
            margin-left: 0 !important;
        }
    </style>
        <!-- start: Header -->
        
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->

                <!-- end: Main Menu --> 

                <!-- start: Content -->
                <div id="content" class="span10"> 

                    <div class="row-fluid sortable">