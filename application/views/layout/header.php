<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?= $judul ?> | SISTEM INFROMASI AKADEMIK</title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.ico">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/css/bootstrap.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/css/bootstrap-extend.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/site.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/css/skintools.min.css_v4.0.2.css">
    <script src="<?= base_url() ?>/assets/js/Plugin/skintools.min.js_v4.0.2"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/animsition/animsition.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/asscrollable/asScrollable.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/switchery/switchery.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/intro-js/introjs.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/slidepanel/slidePanel.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/jquery-selective/jquery-selective.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/vendor/asscrollable/asScrollable.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/examples/css/dashboard/team.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/fonts/web-icons/web-icons.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/fonts/font-awesome/font-awesome.min.css_v4.0.2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/global/fonts/brand-icons/brand-icons.min.css_v4.0.2.css">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
    <style>
    .display_box{
        border-bottom:1px solid #dbdbdb;
        color:#000;
        cursor:pointer
    }
    .display_box td{
        padding:0 0px
    }
    .display_box:hover{
        background:#158CBA;
        color:#FFF
    }
    #display{
        position:absolute;
        display:none;
        float:right;
        z-index:10;
        box-shadow:0 1px 5px #1F1E20;
        width:400px!important;
        background-color:#FFF
    }
    #display>tr:hover{
        text-decoration:none
    }
    #display table{
        width:100%
    }
</style>
    <script src="<?= base_url() ?>/assets/global/vendor/breakpoints/breakpoints.min.js_v4.0.2"></script>
    <script>
        Breakpoints();

    </script>
</head>

<body class="animsition site-navbar-small dashboard" style="background-color: rgb(201, 201, 201) ">
    <!-- Navigation-->
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
                    <i class="icon wb-more-horizontal" aria-hidden="true"></i>
                </button>
            <a class="navbar-brand navbar-brand-center" href="<?= base_url() ?>home">
                    <img class="navbar-brand-logo navbar-brand-logo-normal" src="<?= base_url() ?>/assets/images/logo.png" title="Remark">
                    <img class="navbar-brand-logo navbar-brand-logo-special" src="<?= base_url() ?>/assets/images/logo-colored.png" title="Remark">
                    <span class="navbar-brand-text hidden-xs-down"> SIAKAD | Sistem Informasi Akademik STBA LIA</span>
                </a>
        </div>

        <div class="navbar-container container-fluid">
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <ul class="nav navbar-toolbar">
                    <li class="nav-item hidden-float" id="toggleMenubar">
                        <a class="nav-link" data-toggle="menubar" href="index.html#" role="button">
                                <i class="icon hamburger hamburger-arrow-left">
                                    <span class="sr-only">Toggle menubar</span>
                                    <span class="hamburger-bar"></span>
                                </i>
                            </a>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right Logout -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                        <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="index.html#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>home/profile" title="Profil">
                            <i class="fa fa-gears" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>home/logout" title="Keluar">
                            <i class="icon wb-power" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>

    <div class="site-menubar site-menubar-light">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <?php
                            $this->load->view('layout/menu/menu-'.strtolower($this->session->userdata('login_data')->status.'.php'));
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
