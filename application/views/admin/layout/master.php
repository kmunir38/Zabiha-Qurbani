<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?> | Zabiha Qurbani</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- page stylesheets -->
    <!-- end page stylesheets -->
    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="/assets/styles/webfont.css">
    <link rel="stylesheet" href="/assets/styles/climacons-font.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/styles/font-awesome.css">
    <link rel="stylesheet" href="/assets/styles/card.css">
    <link rel="stylesheet" href="/assets/styles/sli.css">
    <link rel="stylesheet" href="/assets/styles/animate.css">
    <link rel="stylesheet" href="/assets/styles/app.css">
    <link rel="stylesheet" href="/assets/styles/app.skins.css">

    <link href="/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet">
    <!-- endbuild -->
</head>

<body class="page-loading">
<!-- page loading spinner -->
<div class="pageload">
    <div class="pageload-inner">
        <div class="sk-rotating-plane"></div>
    </div>
</div>
<!-- /page loading spinner -->
<div class="app layout-fixed-header">
    <!-- sidebar panel -->
    <div class="sidebar-panel offscreen-left">
        <div class="brand">
            <!-- toggle small sidebar menu -->
<!--            <a href="javascript:;" class="toggle-apps hidden-xs" data-toggle="quick-launch">-->
<!--                <i class="icon-grid"></i>-->
<!--            </a>-->
            <!-- /toggle small sidebar menu -->
            <!-- toggle offscreen menu -->
            <div class="toggle-offscreen">
                <a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <!-- /toggle offscreen menu -->
            <!-- logo -->
            <a class="brand-logo">
                <span>Zabiha Qurbani</span>
            </a>
            <a href="#" class="small-menu-visible brand-logo">C</a>
            <!-- /logo -->
        </div>
        <!-- main navigation -->
        <nav role="navigation">
            <ul class="nav">
                <!-- dashboard -->
                <li>
                    <a href="/admin/home/dashboard">
                        <i class="icon-compass"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- /dashboard -->
                <!-- customizer -->
                <!-- <li>
                    <a href="/admin/affiliate/create">
                        <i class="icon-equalizer"></i>
                        <span>Affiliate</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/task/create">
                        <i class="icon-equalizer"></i>
                        <span>Task</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:;">
                        <span class="badge pull-right"></span>
                        <i class="icon-drop"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo base_url() ?>admin/report/affiliate">
                                <span>View Affiliates</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/report/task">
                                <span>View Tasks</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/report/share">
                                <span>View Shares</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- /customizer -->
                <!-- /static -->
            </ul>
        </nav>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <div class="header navbar">
            <div class="brand visible-xs">
                <!-- toggle offscreen menu -->
                <div class="toggle-offscreen">
                    <a href="javascript:;" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- /toggle offscreen menu -->
                <!-- logo -->
                <a class="brand-logo">
                    <span>REACTOR</span>
                </a>
                <!-- /logo -->
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li>
                    <a href="javascript:;" class="small-sidebar-toggle ripple" data-toggle="layout-small-menu">
                        <i class="icon-toggle-sidebar"></i>
                    </a>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-xs">
                
                <li>
                    <a href="javascript:;" class="ripple" data-toggle="dropdown">
<!--                        <img src="images/avatar.jpg" class="header-avatar img-circle" alt="user" title="user">-->
                        <span><?php echo $this->session->userdata('qurbani_fullname'); ?></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="<?php base_url() ?>/admin/home/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /top header -->

        <!-- main content -->
            <?php $this->load->view($mainContent); ?>
        <!-- /main content -->

        <!-- bottom footer -->
        <footer class="content-footer">
            <nav class="footer-right">
                <ul class="nav">
                    <li>
                        <a href="javascript:;">Feedback</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="scroll-up">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            
        </footer>
        <!-- /bottom footer -->
    </div>
    <!-- build:js({.tmp,app}) scripts/app.min.js -->
    <script src="/assets/scripts/helpers/modernizr.js"></script>
    <script src="/assets/vendor/jquery/dist/jquery.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/assets/vendor/fastclick/lib/fastclick.js"></script>
    <script src="/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="/assets/scripts/helpers/smartresize.js"></script>
    <script src="/assets/scripts/constants.js"></script>
    <script src="/assets/scripts/main.js"></script>
    <!-- endbuild -->
    <!-- page scripts -->
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="/assets/vendor/flot/jquery.flot.js"></script>
    <script src="/assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="/assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="/assets/vendor/flot/jquery.flot.stack.js"></script>
    <script src="/assets/vendor/flot/jquery.flot.time.js"></script>
    <script src="/assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="/assets/vendor/flot-spline/js/jquery.flot.spline.js"></script>
    <script src="/assets/vendor/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <!-- end page scripts -->
    <!-- initialize page scripts -->
    <script src="/assets/scripts/helpers/sameheight.js"></script>
    <script src="/assets/scripts/ui/dashboard.js"></script>
    <!-- end initialize page scripts -->
</body>

</html>