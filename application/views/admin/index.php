<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Reactor - Bootstrap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
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
<div class="app signin usersession">
    <div class="session-wrapper">
        <div class="page-height-o row-equal align-middle">
            <div class="column">
                <div class="card bg-white no-border">
                    <div class="card-block">
                        <?php
                        $attributes = ['name' => 'formLogin', 'id' => 'formLogin', 'class' => 'animated fadeIn' ];
                        echo form_open('/admin/home/validate', $attributes);
                        ?>
<!--                        <form role="form" class="form-layout" action="/">-->
                            <div class="text-center m-b">
                                <h4 class="text-uppercase">Welcome to our CheckIn Portal</h4>
                                <p>Please sign in to your account</p>
                            </div>
                            <?php if (isset($error)) : ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                            <?php endif ?>
                            <div class="form-inputs">
                                <label class="text-uppercase">Email</label>
                                <input type="email" name="email" class="form-control input-lg" placeholder="Email" required>
                                <label class="text-uppercase">Password</label>
                                <input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
                            </div>
                            <input type="checkbox" name="remember_me" id="checkbox1" value="1">
                            <label for="checkbox1">Keep me reminded </label>
                            <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Login</button>
                            <div class="divider">
                            </div>
                            <p class="text-center">
                            </p>
<!--                        </form>-->
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom footer -->
    <footer class="session-footer">
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
        <nav class="footer-left hidden-xs">
            <ul class="nav">
                <li>
                    <a href="javascript:;"><span>About</span> Reactor</a>
                </li>
                <li>
                    <a href="javascript:;">Privacy</a>
                </li>
                <li>
                    <a href="javascript:;">Terms</a>
                </li>
                <li>
                    <a href="javascript:;">Help</a>
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
</body>

</html>