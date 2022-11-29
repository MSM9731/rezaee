<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <base href="<?php echo URLPATH ?>">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="<?php echo URLPATH ?>/app/assets/images/favicon.ico" type="image/ico" />
    <title>Gentelella Alela! | قالب مدیریت رایگان </title>

    <!-- Bootstrap -->
    <link href="<?php echo URLPATH ?>/app/assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URLPATH ?>/app/assets/libs/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo URLPATH ?>/app/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo URLPATH ?>/app/assets/libs/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo URLPATH ?>/app/assets/libs/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo URLPATH ?>/app/assets/libs/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo URLPATH ?>/app/assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo URLPATH ?>/app/assets/css/custom.min.css" rel="stylesheet">
</head>
<!-- /header content -->

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col hidden-print">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?php echo URLPATH ?>/app/assets/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>خوش آمدید,</span>
                            <h2>مرتضی کریمی</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <?php load('/views/inc/sidebar.php') ?>

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="خروج" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>


            <!-- /header content -->