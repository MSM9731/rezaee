<div class="col-md-3 left_col hidden-print">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <!-- <a href="<?php echo ROOT ?>" class="site_title"><i class="fa fa-paw"></i>
                <span>Gentelella Alela!</span>
            </a> -->
            <span class="site_title"><i class="fa fa-paw"></i>
                <span>نام سایت</span>
            </span>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo ROOT ?>/app/assets/users/images/img.jpg" alt="icon" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>خوش آمدید,</span>
                <h2>مرتضی کریمی</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br >

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <!-- <h3>عمومی</h3> -->
                <ul class="nav side-menu">
                    <li><a href="<?php echo ROOT ?>/users"><i class="fa fa-home"></i> داشبورد </a></li>
                    <li><a href="<?php echo ROOT ?>/users/accessManagement"><i class="fa fa-sitemap"></i> مدیریت دسترسی </a></li>
                    <!-- <li><a href="<?php echo ROOT ?>/template.html"><i class="fa fa-sitemap"></i> صفحه نمونه</a></li> -->
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

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
            <a data-toggle="tooltip" data-placement="top" title="خروج" href="<?php echo ROOT ?>/pages/login">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>