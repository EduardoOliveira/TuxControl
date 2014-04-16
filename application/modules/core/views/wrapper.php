<!DOCTYPE html>
<html lang="en" data-ng-app="TuxControl">
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
    <script type="text/javascript">
        var tuxControl = angular.module('TuxControl', []);
    </script>
    <script type="text/javascript">
        //size conversion 
        //(size).fileSize(0 to power1024 / 1 to power 1000)
        Object.defineProperty(Number.prototype, 'fileSize', {value: function (a, b, c, d) {
            return (a = a ? [1e3, 'k', 'B'] : [1024, 'K', 'iB'], b = Math, c = b.log,
                d = c(this) / c(a[0]) | 0, this / b.pow(a[0], d)).toFixed(2)
                + ' ' + (d ? (a[1] + 'MGTPEZY')[--d] + a[2] : 'Bytes');
        }, writable: false, enumerable: false});
    </script>

    <script src='<?php site_url() ?>/angular_application/stats/controller.js'></script>
    <script src='<?php site_url() ?>/angular_application/stats/service.js'></script>
    <script type="text/javascript">
        tuxControl.service("statsService", statsService);
        tuxControl.controller('statsController', statsController);
    </script>

</head>
<body class="bg-img-num1" data-ng-controller="statsController">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar brb" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
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
                        <?php foreach(TuxCore::menu_paths() as $module):?>
                            <li class="<?if(count($module['entry'])>0)echo"dropdown"?>">

                                <?php if(empty($module['title']['path'])):?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php else:?>
                                <a href="<?=$module['entry']['path']?>">
                                <?php endif;?>
                                    <span class="<?=$module['title']['icon']?>"></span>
                                    <?=$module['title']['label']?>
                                </a>
                            <?php if(count($module['entry'])>0):?>
                            <ul class="dropdown-menu">
                            <?php foreach($module['entry'] as $entry):?>
                                <li><a href="<?=base_url($entry['path'])?>" ><?=$entry['label']?></a></li>
                            <?php endforeach;?>
                            </ul>
                            <?php endif;?>
                            </li>
                        <?php endforeach;?>
                        <li>
                            <a href="#"><span class="icon-off"></span>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="block block-drop-shadow">
                <div class="head bg-dot20">
                    <h2>CPU
                    </h2>

                    <div class="side pull-right">
                        <ul class=buttons>
                            <li>
                                <a href="#">
                              <span class="icon-cogs">
                              </span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="head-panel nm">
                        <div class="hp-info hp-simple pull-left hp-inline">
                            <span class="hp-main">Usage <span
                                    class="icon-angle-right"></span> {{instant_usage}} %</span>

                            <div class="hp-sm">
                                <div class="progress progress-small">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="89"
                                         aria-valuemin="0" aria-valuemax="100" style="width: {{instant_usage}}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-drop-shadow">
                <div class="head bg-dot20">
                    <h2>Memory
                    </h2>

                    <div class="side pull-right">
                        <ul class="buttons">
                            <li>
                                <a href="#">
                              <span class="icon-cogs">
                              </span></a>
                            </li>
                        </ul>
                    </div>
                    <div class=head-subtitle>Kingston 2x8Gb DDR3 1866MHz
                    </div>
                    <div class="head-panel nm tac">
                        <div class="sparkline">
                           <span sparkType="pie" sparkWidth="100" sparkHeight="100">5079,3768,7537
                           </span>
                        </div>
                    </div>
                    <div class="head-panel nm">
                        <div class="hp-info hp-simple pull-left hp-inline">
                           <span class="hp-main">
                           <span class=icon-circle>
                           </span> Allocated 5079 Mb [ 31% ]
                           </span>
                        </div>
                        <div class="hp-info hp-simple pull-left hp-inline">
                           <span class="hp-main">
                           <span class="icon-circle text-info">
                           </span> In Cache 3768 Mb [ 23% ]
                           </span>
                        </div>
                        <div class="hp-info hp-simple pull-left hp-inline">
                           <span class="hp-main">
                           <span class="icon-circle text-primary">
                           </span> Aviable 7537 Mb [ 46% ]
                           </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-drop-shadow">
                <div class="head bg-dot20">
                    <h2>Volumes status
                    </h2>

                    <div class="side pull-right">
                        <ul class=buttons>
                            <li>
                                <a href="#">
                              <span class=icon-cogs>
                              </span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="head-subtitle">WD Caviar Blue 1TB
                    </div>
                    <div class="head-panel nm tac" style="line-height: 0px;">
                        <div class="knob">
                            <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="1024" data-width="100"
                                   data-height="100" value="654" data-readOnly="true"/>
                        </div>
                    </div>
                    <div class="head-panel nm">
                        <div class="hp-info hp-simple pull-left hp-inline">
                           <span class="hp-main">Volume 1 [ 0.5 TB ]
                           </span> 
                           <span class="hp-sm">Used: 450.0 GB [ 90% ] 
                           </span> 
                           <span class="hp-sm">Free: 50.0 GB [ 10% ] 
                           </span>
                        </div>
                        <div class="hp-info hp-simple pull-left hp-inline">
                           <span class="hp-main">Volume 2 [ 0.5 TB ]
                           </span> 
                           <span class="hp-sm">Used: 154.0 GB [ 30% ] 
                           </span> 
                           <span class="hp-sm">Free: 346.0 GB [ 70% ] 
                           </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <?php echo $main; ?>
        </div>
    </div>
    <div class="row">
        <div class="page-footer">
            <div class="page-footer-wrap">
                <div class="side pull-left"> Copyirght &COPY; YourCompany 2013. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>