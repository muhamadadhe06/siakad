<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>Login | SIAKAD</title>
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/global/css/bootstrap.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/css/bootstrap-extend.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/css/site.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/css/skintools.min.css_v4.0.2.css">
    <script src="assets/js/Plugin/skintools.min.js_v4.0.2"></script>
    <link rel="stylesheet" href="assets/global/vendor/animsition/animsition.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/vendor/asscrollable/asScrollable.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/vendor/switchery/switchery.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/vendor/intro-js/introjs.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/vendor/slidepanel/slidePanel.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/examples/css/pages/login.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/fonts/web-icons/web-icons.min.css_v4.0.2.css">
    <link rel="stylesheet" href="assets/global/fonts/font-awesome/font-awesome.min.css_v4.0.2.css">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css_family=Roboto:300,400,500,300italic">
</head>

<body class="animsition site-navbar-small page-login layout-full page-dark">
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
        <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
            <div class="brand">
                <img class="brand-img" src="assets/images/logo.png" alt="...">
                <h2 class="brand-text">SIAKAD</h2>
                <h2 class="brand-text">STBA LIA Yogyakarta</h2>
            </div>
            <?php
            if($this->session->userdata('sts')){
            ?>
            <div class="alert alert-warning" role="alert">
              <?= $this->session->userdata('sts') ?>
            </div>
            <?php 
                $this->session->unset_userdata('sts'); 
            }else{
            ?>
            <p>Silahkan masukan akun anda</p>
            <?php
            }
            ?>
            <form action="<?php echo base_url('login/act'); ?>" method="post">
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Nomor Induk</label>
                    <input type="text" class="form-control" id="inputEmail" name="username" placeholder="Nomor Induk">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Kata Kunci</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Kata Kunci">
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-key"></i> Masuk</button>
            </form>

            <footer class="page-copyright page-copyright-inverse">
                <p>© <?= date('Y') ?>. STBA LIA.</p>
            </footer>
        </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="assets/global/vendor/babel-external-helpers/babel-external-helpers.js_v4.0.2"></script>
    <script src="assets/global/vendor/jquery/jquery.min.js_v4.0.2"></script>
    <script src="assets/global/vendor/popper-js/umd/popper.min.js_v4.0.2"></script>
    <script src="assets/global/vendor/bootstrap/bootstrap.min.js_v4.0.2"></script>
    <script src="assets/global/vendor/animsition/animsition.min.js_v4.0.2"></script>
    <script src="assets/global/vendor/mousewheel/jquery.mousewheel.js_v4.0.2"></script>
    <script src="assets/global/vendor/asscrollbar/jquery-asScrollbar.min.js_v4.0.2"></script>
    <script src="assets/global/vendor/asscrollable/jquery-asScrollable.min.js_v4.0.2"></script>
    <script src="assets/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js_v4.0.2"></script>

    <!-- Plugins -->
<script src="assets/global/vendor/switchery/switchery.min.js_v4.0.2"></script>    <script src="assets/global/vendor/intro-js/intro.min.js_v4.0.2"></script>
    <script src="assets/global/vendor/screenfull/screenfull.js_v4.0.2"></script>
    <script src="assets/global/vendor/slidepanel/jquery-slidePanel.min.js_v4.0.2"></script>

    <!-- Plugins For This Page -->
    <script src="assets/global/vendor/jquery-placeholder/jquery.placeholder.js_v4.0.2"></script>

    <!-- Scripts -->
    <script src="assets/global/js/Component.min.js_v4.0.2"></script>
    <script src="assets/global/js/Plugin.min.js_v4.0.2"></script>
    <script src="assets/global/js/Base.min.js_v4.0.2"></script>
    <script src="assets/global/js/Config.min.js_v4.0.2"></script>

    <script src="assets/js/Section/Menubar.min.js_v4.0.2"></script>
    <script src="assets/js/Section/Sidebar.min.js_v4.0.2"></script>
    <script src="assets/js/Section/PageAside.min.js_v4.0.2"></script>
    <script src="assets/js/Plugin/menu.min.js_v4.0.2"></script>

    <!-- Config -->
    <script src="assets/global/js/config/colors.min.js_v4.0.2"></script>
    <script src="assets/js/config/tour.min.js_v4.0.2"></script>
    <script>
        Config.set('assets', 'assets');

    </script>

    <!-- Page -->
    <script src="assets/js/Site.min.js_v4.0.2"></script>
    <script src="assets/global/js/Plugin/asscrollable.min.js_v4.0.2"></script>
    <script src="assets/global/js/Plugin/slidepanel.min.js_v4.0.2"></script>
    <script src="assets/global/js/Plugin/switchery.min.js_v4.0.2"></script>
    <script src="assets/global/js/Plugin/jquery-placeholder.min.js_v4.0.2"></script>


    <script>
        (function(document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);

    </script>
</body>

</html>