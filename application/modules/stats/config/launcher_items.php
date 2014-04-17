<?php

$config['launcher_items']['stats']['cpu_usage'] = array(
    "type"=>"widget",
    "generator" => "stats/widgets/usage_widget",
    "expectedW"=>2,
    "expectedH"=>1
);

$config['launcher_items']['stats']['some_icon'] = array(
    "type"=>"icon",
    "label" => "Settings",
    "image" => "http://3.bp.blogspot.com/_onTasmwBPdI/THLG8QZFcJI/AAAAAAAAABI/5-xif-JIeBc/s1600/brunocb-afro-tux-samourai.png",
    "url" => "stats/stats/settings"
);
