<?php

$menu_paths['stats']['title'] = array(
    "label" => "Stats",
    "icon" => "icon-off",
    "tank" => "",
    "path"=>""
);
$menu_paths['stats']['entry'][] = array(
    "label" => "Cpu",
    "path" => "stats/cpu/dashboard",
    "rank" => ""
);
$menu_paths['stats']['entry'][] = array(
    "label" => "Memory",
    "path" => "stats/memory/dashboard",
    "rank" => ""
);
$menu_paths['stats']['entry'][] = array(
    "label" => "Memory",
    "path" => "stats/temperature/dashboard",
    "rank" => ""
);