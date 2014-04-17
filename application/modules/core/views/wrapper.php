<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tux Control</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    <link href="<?php site_url() ?>/assets/css/stylesheets.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript"
            src="<?php site_url() ?>/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/jquery/globalize.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="<?php site_url() ?>/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/knob/jquery.knob.js"></script>
    <script type="text/javascript"
            src="<?php site_url() ?>/assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/flot/jquery.flot.resize.js"></script>



    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/noty/layouts/topRight.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/noty/layouts/topCenter.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/plugins/noty/themes/default.js"></script>

    <script type="text/javascript" src="<?php site_url() ?>/assets/js/js.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/assets/js/settings.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>


    <!--LAUNCHER-->
    <link href="<?php site_url() ?>/angular_application/core/libs/gridster/gridster.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php site_url() ?>/angular_application/core/libs/gridster/gridster.js"></script>
    <link href="<?php site_url() ?>/angular_application/core/Launcher/Launcher.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php site_url() ?>/angular_application/core/Launcher/LauncherController.js"></script>
    <script type="text/javascript" src="<?php site_url() ?>/angular_application/core/Launcher/LauncherService.js"></script>
    <!--LAUNCHER-->

    <script src='<?php site_url() ?>/angular_application/stats/controller.js'></script>
    <script src='<?php site_url() ?>/angular_application/stats/service.js'></script>


    <script type="text/javascript">
        //size conversion 
        //(size).fileSize(0 to power1024 / 1 to power 1000)
        Object.defineProperty(Number.prototype, 'fileSize', {value: function (a, b, c, d) {
            return (a = a ? [1e3, 'k', 'B'] : [1024, 'K', 'iB'], b = Math, c = b.log,
                d = c(this) / c(a[0]) | 0, this / b.pow(a[0], d)).toFixed(2)
                + ' ' + (d ? (a[1] + 'MGTPEZY')[--d] + a[2] : 'Bytes');
        }, writable: false, enumerable: false});
    </script>

    <script type="text/javascript">
        var tuxControl = {};

        tuxControl.launcher = angular.module('TuxLauncher', ['gridster']);
        tuxControl.launcher.service('launcherService',launcherService);
        tuxControl.launcher.controller('launcherController',launcherController);

        tuxControl.stats = angular.module('TuxStats',[]);
        tuxControl.stats.service("statsService", statsService);
        tuxControl.stats.controller('statsController', statsController);
    </script>

</head>
<body class="bg-img-num1">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar brb" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-reorder"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="<?php site_url() ?>/assets/img/logo.png"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/"><span class="icon-home"></span> HOME </a>
                        </li>
                        <?php foreach (TuxCore::menu_paths() as $module): ?>
                            <li class="<? if (count($module['entry']) > 0) echo "dropdown" ?>">

                                <?php if (empty($module['title']['path'])): ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php else: ?>
                                    <a href="<?= $module['entry']['path'] ?>">
                                        <?php endif; ?>
                                        <span class="<?= $module['title']['icon'] ?>"></span>
                                        <?= $module['title']['label'] ?>
                                    </a>
                                    <?php if (count($module['entry']) > 0): ?>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($module['entry'] as $entry): ?>
                                                <li><a href="<?= base_url($entry['path']) ?>"><?= $entry['label'] ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <a href="#"><span class="icon-off"></span>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <?=$main_content?>
    </div>
</div>
</body>
</html>