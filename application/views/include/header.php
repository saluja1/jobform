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
        .required.control-label:after {
            content:"*";color:red;
        }
    </style>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="<?php echo base_url()?>">
                        <img src="<?php echo base_url() ?>adminfiles/img/icon.png" style="height: 50px;" alt="icon" title="Budget Mobiles">
                        </a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">  
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i>Hi, <?php echo $this->session->userdata('user_name'); ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!--                                    <li class="dropdown-menu-title">
                                                                            <span>Account Settings</span>
                                                                        </li>-->
                                                                        <!--<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>-->
                                    <li><a href="<?php echo base_url('jobs/changePass'); ?>"><i class="icon-user off"></i> Change Password</a></li>
                                    <li><a href="<?php echo base_url('login/logout'); ?>"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li> 
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <!--<li><a href=""><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>--> 
                            <li><a href="<?php echo base_url('jobs/users'); ?>"><i class="halflings-icon white user"></i><span class="hidden-tablet"> Manage Users</span></a></li>
                            <li><a href="<?php echo base_url('jobs/customers'); ?>"><i class="halflings-icon white user"></i><span class="hidden-tablet"> Manage Customers</span></a></li>
                            <li><a href="<?php echo base_url('jobs/technicians'); ?>"><i class="halflings-icon white user"></i><span class="hidden-tablet"> Manage Technicians</span></a></li>
                            
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Job Area</span></a>
                                <ul>
                                    <li><a class="submenu" href="<?php echo base_url(); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Job Listing</span></a></li>
                                    <li><a class="submenu" href="<?php echo base_url('jobs/create/mob'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Mobile Job</span></a></li>
<!--                                     <li><a class="submenu" href="<?php echo base_url('jobs/create/lap'); ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Laptop Job</span></a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu --> 

                <!-- start: Content -->
                <div id="content" class="span10"> 

                    <div class="row-fluid sortable">