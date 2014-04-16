<!DOCTYPE html>
<html lang=en>
<head>
    <title>Taurus</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
    <link rel=icon type=image/ico href="favicon.ico"/>
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
</head>
<body class=bg-img-num1  data-ng-controller="statsController">
<div class=page-container>
<div class=page-sidebar>
    <div class="page-navigation-panel logo"></div>
    <div class=page-navigation-panel>
        <div class=name>Howdy, Aqvatarius</div>
        <div class=control><a href=# class=psn-control><span class=icon-reorder></span></a></div>
    </div>
    <div class="page-navigation-panel search">
        <div class=input-group>
            <input type=text class=form-control placeholder="Search..."/>

            <div class=input-group-addon><span class=icon-search></span></div>
        </div>
    </div>
    <ul class="page-navigation">
        <li class="active">
            <a href="index.html"><span class="icon-home"></span> HOME </a>
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
                        <ul>
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
    <!--<ul class=page-navigation>
        <li><a href=index.html> <span class=icon-home></span> Dashboard </a></li>
        <li>
            <a href=#><span class=icon-pencil></span> Forms</a>
            <ul>
                <li><a href=form_elements.html>Form elements</a></li>
                <li><a href=form_editors.html>WYSIWYG</a></li>
                <li><a href=form_files.html>File handling</a></li>
                <li><a href=form_validation.html>Validation and wizard</a></li>
            </ul>
        </li>
        <li>
            <a href=#><span class=icon-cogs></span> Components</a>
            <ul>
                <li><a href=component_blocks.html>Blocks and panels</a></li>
                <li><a href=component_buttons.html>Buttons</a></li>
                <li><a href=component_modals.html>Modals and popups</a></li>
                <li><a href=component_tabs.html>Tabs, accordion, selectable, sortable</a></li>
                <li><a href=component_progress.html>Progressbars</a></li>
                <li><a href=component_lists.html>List groups</a></li>
                <li><a href=component_messages.html>Messages</a></li>
                <li>
                    <a href=#>Tables<i class="icon-angle-down pull-right"></i></a>
                    <ul>
                        <li><a href=component_table_default.html>Default tables</a></li>
                        <li><a href=component_table_sortable.html>Sortable tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href=#>Layouts<i class="icon-angle-down pull-right"></i></a>
                    <ul>
                        <li><a href=component_layout_blank.html>Default layout(blank)</a></li>
                        <li><a href=component_layout_custom.html>Custom navigation</a></li>
                        <li><a href=component_layout_scroll.html>Content scroll</a></li>
                        <li><a href=component_layout_fixed.html>Fixed content</a></li>
                        <li><a href=component_layout_white.html>White layout</a></li>
                    </ul>
                </li>
                <li><a href=component_charts.html>Charts</a></li>
                <li><a href=component_maps.html>Maps</a></li>
                <li><a href=component_typography.html>Typography</a></li>
                <li><a href=component_gallery.html>Gallery</a></li>
                <li><a href=component_calendar.html>Calendar</a></li>
                <li><a href=component_icons.html>Icons</a></li>
            </ul>
        </li>
        <li><a href=widgets.html><span class=icon-globe></span> Widgets</a></li>
        <li>
            <a href=#><span class=icon-file-alt></span> Pages</a>
            <ul>
                <li><a href=sample_login.html>Login</a></li>
                <li><a href=sample_registration.html>Registration</a></li>
                <li><a href=sample_profile.html>User profile</a></li>
                <li><a href=sample_profile_social.html>Social profile</a></li>
                <li><a href=sample_edit_profile.html>Edit profile</a></li>
                <li><a href=sample_mail.html>Mail</a></li>
                <li><a href=sample_search.html>Search</a></li>
                <li><a href=sample_invoice.html>Invoice</a></li>
                <li><a href=sample_contacts.html>Contacts</a></li>
                <li><a href=sample_tasks.html>Tasks</a></li>
                <li><a href=sample_timeline.html>Timeline</a></li>
                <li>
                    <a href=#>Email templates<i class="icon-angle-down pull-right"></i></a>
                    <ul>
                        <li><a href=email_sample_1.html>Sample 1</a></li>
                        <li><a href=email_sample_2.html>Sample 2</a></li>
                        <li><a href=email_sample_3.html>Sample 3</a></li>
                        <li><a href=email_sample_4.html>Sample 4</a></li>
                    </ul>
                </li>
                <li>
                    <a href=#>Error pages<i class="icon-angle-down pull-right"></i></a>
                    <ul>
                        <li><a href=sample_error_403.html>403 Forbidden</a></li>
                        <li><a href=sample_error_404.html>404 Not Found</a></li>
                        <li><a href=sample_error_500.html>500 Internal Server Error</a></li>
                        <li><a href=sample_error_503.html>503 Service Unavailable</a></li>
                        <li><a href=sample_error_504.html>504 Gateway Timeout</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>-->
    <div class="block block-drop-shadow page-navigation-hide">
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
    <div class="block block-drop-shadow page-navigation-hide">
        <div class="head bg-dot20">
            <h2>Memory</h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li><a href=#><span class=icon-cogs></span></a></li>
                </ul>
            </div>
            <div class=head-subtitle>Kingston 2x8Gb DDR3 1866MHz</div>
            <div class="head-panel nm tac">
                <div class=sparkline><span sparkType=pie sparkWidth=100 sparkHeight=100>5079,3768,7537</span></div>
            </div>
            <div class="head-panel nm">
                <div class="hp-info hp-simple pull-left hp-inline"><span class=hp-main><span class=icon-circle></span> Allocated 5079 Mb [ 31% ]</span>
                </div>
                <div class="hp-info hp-simple pull-left hp-inline"><span class=hp-main><span
                            class="icon-circle text-info"></span> In Cache 3768 Mb [ 23% ]</span></div>
                <div class="hp-info hp-simple pull-left hp-inline"><span class=hp-main><span
                            class="icon-circle text-primary"></span> Aviable 7537 Mb [ 46% ]</span></div>
            </div>
        </div>
    </div>
    <div class="block block-drop-shadow page-navigation-hide">
        <div class="head bg-dot20">
            <h2>Volumes status</h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li><a href=#><span class=icon-cogs></span></a></li>
                </ul>
            </div>
            <div class=head-subtitle>WD Caviar Blue 1TB</div>
            <div class="head-panel nm tac" style="line-height: 0px;">
                <div class=knob><input type=text data-fgColor=#3F97FE data-min=0 data-max=1024 data-width=100
                                       data-height=100 value=654 data-readOnly="true"/></div>
            </div>
            <div class="head-panel nm">
                <div class="hp-info hp-simple pull-left hp-inline"><span class=hp-main>Volume 1 [ 0.5 TB ]</span> <span
                        class=hp-sm>Used: 450.0 GB [ 90% ] </span> <span class=hp-sm>Free: 50.0 GB [ 10% ] </span></div>
                <div class="hp-info hp-simple pull-left hp-inline"><span class=hp-main>Volume 2 [ 0.5 TB ]</span> <span
                        class=hp-sm>Used: 154.0 GB [ 30% ] </span> <span class=hp-sm>Free: 346.0 GB [ 70% ] </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=page-content>
<div class=container>
<div class=row>
<div class=col-md-6>
    <div class="block block-drop-shadow">
        <div class="head bg-dot20">
            <h2>Total sales</h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li><a href=#><span class=icon-cogs></span></a></li>
                </ul>
            </div>
            <div class="head-panel nm">
                <div class=left_abs_100 style="margin-top: 20px;">
                    <div class=knob><input type=text data-fgColor=#FFFFFF data-min=0 data-max=200 data-width=100
                                           data-height=100 value=155 data-readOnly="true"/></div>
                </div>
                <div class=chart id=dash_chart_1 style="height: 150px;"></div>
            </div>
            <div class="head-panel nm">
                <div class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-thumbs-up-alt></span></div>
                    <span class=hp-main>155</span> <span class=hp-sm>Sales</span>
                </div>
                <div class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-thumbs-down-alt></span></div>
                    <span class=hp-main>23</span> <span class=hp-sm>Cancelled</span>
                </div>
                <div class="hp-info pull-right">
                    <div class=hp-icon><span class=icon-usd></span></div>
                    <span class=hp-main>19,215.23</span> <span class=hp-sm>Total Income</span>
                </div>
            </div>
        </div>
        <div class="content list">
            <div class=list-title> Previous months</div>
            <div class=list-item>
                <div class=list-text>
                    <strong>May 2013</strong>

                    <div class="progress progress-small">
                        <div class="progress-bar progress-bar-info" role=progressbar aria-valuenow=75 aria-valuemin=0
                             aria-valuemax=100 style="width: 75%"></div>
                    </div>
                </div>
            </div>
            <div class=list-item>
                <div class=list-text>
                    <strong>April 2013</strong>

                    <div class="progress progress-small">
                        <div class="progress-bar progress-bar-info" role=progressbar aria-valuenow=64 aria-valuemin=0
                             aria-valuemax=100 style="width: 64%"></div>
                    </div>
                </div>
            </div>
            <div class=list-item>
                <div class=list-text>
                    <strong>March 2013</strong>

                    <div class="progress progress-small">
                        <div class="progress-bar progress-bar-info" role=progressbar aria-valuenow=58 aria-valuemin=0
                             aria-valuemax=100 style="width: 58%"></div>
                    </div>
                </div>
            </div>
            <div class=list-item>
                <div class=list-text>
                    <strong>February 2013</strong>

                    <div class="progress progress-small">
                        <div class="progress-bar progress-bar-info" role=progressbar aria-valuenow=72 aria-valuemin=0
                             aria-valuemax=100 style="width: 72%"></div>
                    </div>
                </div>
            </div>
            <div class=list-item>
                <div class=list-text>
                    <strong>January 2013</strong>

                    <div class="progress progress-small">
                        <div class="progress-bar progress-bar-info" role=progressbar aria-valuenow=83 aria-valuemin=0
                             aria-valuemax=100 style="width: 83%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer footer-defaut tac">
            <div class=pull-left style="width: 200px;">
                <div class=input-group>
                    <div class=input-group-addon><span class=icon-calendar></span></div>
                    <input type=text class="datepicker form-control" value="10/08/2013"/>

                    <div class=input-group-btn>
                        <button class=btn><span class=icon-search></span></button>
                    </div>
                </div>
            </div>
            <div class=pull-right><a href=#>More information</a></div>
        </div>
    </div>
    <div class="block block-drop-shadow">
        <div class="head bg-dot30">
            <h2>This week visits</h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li><a href=#><span class=icon-refresh></span></a></li>
                    <li><a href=#><span class=icon-cogs></span></a></li>
                </ul>
            </div>
            <div class="head-panel nm">
                <div class=chart id=dash_chart_2 style="height: 150px;"></div>
            </div>
        </div>
        <div class="head bg-dot30">
            <div class="head-panel nm">
                <div class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-globe></span></div>
                    <span class=hp-main>12,480</span> <span class=hp-sm>Total visits</span>
                </div>
                <div class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-desktop></span></div>
                    <span class=hp-main style="margin-left: 35px;">10,140</span> <span class=hp-sm
                                                                                       style="margin-left: 35px;">Desktop</span>
                </div>
                <div class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-laptop></span></div>
                    <span class=hp-main style="margin-left: 35px;">1,204</span> <span class=hp-sm
                                                                                      style="margin-left: 35px;">Desktop</span>
                </div>
                <div class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-tablet></span></div>
                    <span class=hp-main>322</span> <span class=hp-sm>Tablet</span>
                </div>
                <div class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-mobile-phone></span></div>
                    <span class=hp-main>814</span> <span class=hp-sm>Mobile</span>
                </div>
            </div>
        </div>
        <div class="head bg-dot30">
            <h2>Visits by browser</h2>

            <div class="head-panel nm">
                <div class=progress>
                    <div class="progress-bar progress-bar-success tip" title=Chrome style="width: 35%"></div>
                    <div class="progress-bar progress-bar-info tip" title=Firefox style="width: 20%"></div>
                    <div class="progress-bar progress-bar-warning tip" title=Opera style="width: 20%"></div>
                    <div class="progress-bar progress-bar-danger tip" title=Safari style="width: 10%"></div>
                    <div class="progress-bar tip" title="Internet Explorer" style="width: 15%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=col-md-6>
    <div class="block block-drop-shadow">
        <div class="head bg-dot20">
            <h2>Inbox messages</h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li><a href=#><span class=icon-plus></span></a></li>
                    <li><a href=#><span class=icon-cogs></span></a></li>
                </ul>
            </div>
            <div class="head-panel nm">
                <a href=# class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-download-alt></span></div>
                    <span class=hp-main>25</span> <span class=hp-sm>recived</span>
                </a>
                <a href=# class="hp-info pull-left">
                    <div class=hp-icon><span class=icon-upload-alt></span></div>
                    <span class=hp-main>10</span> <span class=hp-sm>sent</span>
                </a>
                <a href=# class="hp-info hp-one pull-right tip" title=Refresh>
                    <div class=hp-icon><span class=icon-refresh></span></div>
                    <span class=hp-main>9:24 am</span>
                </a>
            </div>
        </div>
        <div class="content list">
            <div class=list-item>
                <div class=list-datetime>
                    <div class=time>9:45 am</div>
                </div>
                <div class=list-info><img src=img/example/user/dmitry.jpg class="img-circle img-thumbnail"/></div>
                <div class=list-text>
                    <a href=# class=list-text-name>John Doe</a>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit.</p>
                </div>
                <div class=list-controls><a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-rotate-right></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-pushpin></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-remove></span></a></div>
            </div>
            <div class=list-item>
                <div class=list-datetime>
                    <div class=time>8:16 am</div>
                </div>
                <div class=list-info><img src=img/example/user/alexey.jpg class="img-circle img-thumbnail"/></div>
                <div class=list-text>
                    <a href=# class=list-text-name>Brad Pitt</a>

                    <p>Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla gravida rutrum neque.</p>
                </div>
                <div class=list-controls><a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-rotate-right></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-pushpin></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-remove></span></a></div>
            </div>
            <div class=list-item>
                <div class=list-datetime>
                    <div class=date>27.08</div>
                    <div class=time>9:59 pm</div>
                </div>
                <div class=list-info><img src=img/example/user/olga.jpg class="img-circle img-thumbnail"/></div>
                <div class=list-text>
                    <a href=# class=list-text-name>Angelina Jolie</a>

                    <p>Morbi tincidunt, tellus ut fermentum accumsan, est justo pretium enim, eget.</p>
                </div>
                <div class=list-controls><a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-rotate-right></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-pushpin></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-remove></span></a></div>
            </div>
            <div class=list-item>
                <div class=list-datetime>
                    <div class=date>27.08</div>
                    <div class=time>4:34 pm</div>
                </div>
                <div class=list-info><img src=img/example/user/helen.jpg class="img-circle img-thumbnail"/></div>
                <div class=list-text>
                    <a href=# class=list-text-name>Keira Knightley</a>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit.</p>
                </div>
                <div class=list-controls><a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-rotate-right></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-pushpin></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-remove></span></a></div>
            </div>
            <div class=list-item>
                <div class=list-datetime>
                    <div class=date>26.08</div>
                    <div class=time>12:12 am</div>
                </div>
                <div class=list-info><img src=img/example/user/dmitry.jpg class="img-circle img-thumbnail"/></div>
                <div class=list-text>
                    <a href=# class=list-text-name>John Doe</a>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit.</p>
                </div>
                <div class=list-controls><a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-rotate-right></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-pushpin></span></a> <a href=# class="widget-icon widget-icon-circle"><span
                            class=icon-remove></span></a></div>
            </div>
        </div>
        <div class="footer tac"><a href=#>Load more messages...</a></div>
    </div>
    <div class="block block-drop-shadow">
        <div class=header>
            <h2>Messaging</h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li><a href=#><span class=icon-user></span></a></li>
                    <li><a href=#><span class=icon-cogs></span></a></li>
                </ul>
            </div>
        </div>
        <div class="content messages npr npb npt">
            <div class=scroll style="height: 250px;">
                <div class=messages-item>
                    <img src=img/example/user/dmitry_s.jpg class="img-circle img-thumbnail"/>

                    <div class=messages-item-text>Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla
                        gravida rutrum neque
                    </div>
                    <div class=messages-item-date>14:33 30.08.2013</div>
                </div>
                <div class="messages-item inbox">
                    <img src=img/example/user/olga_s.jpg class="img-circle img-thumbnail"/>

                    <div class=messages-item-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                        condimentum nisl velit
                    </div>
                    <div class=messages-item-date>14:32 30.08.2013</div>
                </div>
                <div class=messages-item>
                    <img src=img/example/user/dmitry_s.jpg class="img-circle img-thumbnail"/>

                    <div class=messages-item-text>Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla
                        gravida rutrum neque
                    </div>
                    <div class=messages-item-date>14:20 30.08.2013</div>
                </div>
                <div class="messages-item inbox">
                    <img src=img/example/user/olga_s.jpg class="img-circle img-thumbnail"/>

                    <div class=messages-item-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                        condimentum nisl velit
                    </div>
                    <div class=messages-item-date>14:19 30.08.2013</div>
                </div>
                <div class=messages-item>
                    <img src=img/example/user/dmitry_s.jpg class="img-circle img-thumbnail"/>

                    <div class=messages-item-text>Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla
                        gravida rutrum neque
                    </div>
                    <div class=messages-item-date>14:15 30.08.2013</div>
                </div>
                <div class="messages-item inbox">
                    <img src=img/example/user/olga_s.jpg class="img-circle img-thumbnail"/>

                    <div class=messages-item-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                        condimentum nisl velit
                    </div>
                    <div class=messages-item-date>14:10 30.08.2013</div>
                </div>
            </div>
        </div>
        <div class=footer>
            <div class=input-group><span class=input-group-addon><i class=icon-comment></i></span> <input type=text
                                                                                                          class=form-control
                                                                                                          placeholder=message..>
                <span class=input-group-btn> <button class=btn><span class=icon-chevron-up></span></button> </span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>