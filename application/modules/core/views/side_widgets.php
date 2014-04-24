<div class="col-md-2 page-sidebar">
    <div class="block block-drop-shadow">
        <div class="head bg-dot20">
            <h2>CPU</h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li>
                        <a href="#"><span class="icon-cogs"></span></a>
                    </li>
                </ul>
            </div>
            <div class="head-panel nm">
                <div class="hp-info hp-simple pull-left hp-inline">
                                <span class="hp-main">Usage <span
                                        class="icon-angle-right"></span> {{instant_usage}} %</span>

                    <div class="hp-sm">
                        <div class="progress progress-small">
                            <div class="progress-bar" role="progressbar"
                                 aria-valuenow="89"
                                 aria-valuemin="0" aria-valuemax="100"
                                 style="width: {{instant_usage}}%;background-color:rgb({{(instant_usage*255)/100}},255,{{(instant_usage/255)*100}})"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-drop-shadow">
        <div class="head bg-dot20">
            <h2>Memory</h2>

            <div class="side pull-right">
                <ul class="buttons">
                    <li>
                        <a href="#"><span class="icon-cogs"></span></a>
                    </li>
                </ul>
            </div>
            <div class=head-subtitle>Kingston 2x8Gb DDR3 1866MHz</div>
            <div class="head-panel nm tac">
                <div class="sparkline">
                    <span sparkType="pie" sparkWidth="100" sparkHeight="100">5079,3768,7537</span>
                </div>
            </div>
            <div class="head-panel nm">
                <div class="hp-info hp-simple pull-left hp-inline">
                    <span class="hp-main"><span class=icon-circle></span> Allocated 5079 Mb [ 31% ]</span>
                </div>
                <div class="hp-info hp-simple pull-left hp-inline">
                    <span class="hp-main"> <span class="icon-circle text-info"> </span> In Cache 3768 Mb [ 23% ] </span>
                </div>
                <div class="hp-info hp-simple pull-left hp-inline">
                    <span class="hp-main"> <span
                            class="icon-circle text-primary"> </span> Aviable 7537 Mb [ 46% ] </span>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-drop-shadow">
        <div class="head bg-dot20">
            <h2>Volumes status </h2>

            <div class="side pull-right">
                <ul class=buttons>
                    <li>
                        <a href="#"> <span class=icon-cogs> </span></a>
                    </li>
                </ul>
            </div>
            <div class="head-subtitle">WD Caviar Blue 1TB</div>
            <div class="head-panel nm tac" style="line-height: 0px;">
                <div class="knob">
                    <input type="text" data-fgColor="#3F97FE" data-min="0" data-max="1024" data-width="100"
                           data-height="100" value="654" data-readOnly="true"/>
                </div>
            </div>
            <div class="head-panel nm">
                <div class="hp-info hp-simple pull-left hp-inline">
                    <span class="hp-main">Volume 1 [ 0.5 TB ] </span>
                    <span class="hp-sm">Used: 450.0 GB [ 90% ] </span>
                    <span class="hp-sm">Free: 50.0 GB [ 10% ] </span>
                </div>
                <div class="hp-info hp-simple pull-left hp-inline">
                    <span class="hp-main">Volume 2 [ 0.5 TB ] </span>
                    <span class="hp-sm">Used: 154.0 GB [ 30% ] </span>
                    <span class="hp-sm">Free: 346.0 GB [ 70% ] </span>
                </div>
            </div>
        </div>
    </div>
</div>