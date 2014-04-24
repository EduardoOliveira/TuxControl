<?php

$config['menu_paths']['stats']['title'] = array(
    "label" => "Stats",
    "icon" => "icon-bar-chart",
    "rank" => "",
    "path"=>"",
    "order"=>5
);
$config['menu_paths']['stats']['entry'][] = array(
    "label" => "Cpu",
    "path" => "stats/cpu/dashboard",
    "rank" => ""
);
$config['menu_paths']['stats']['entry'][] = array(
    "label" => "Memory",
    "path" => "stats/memory/dashboard",
    "rank" => ""
);
$config['menu_paths']['stats']['entry'][] = array(
    "label" => "Memory",
    "path" => "stats/temperature/dashboard",
    "rank" => ""
);