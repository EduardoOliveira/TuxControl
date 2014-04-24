<?php

$config['settings_entries']['core']['title'] = array(
    "label" => "Core",
    "icon" => "icon-bar-chart",
    "rank" => "",
    "path" => "",
    "order" => 5
);

$config['settings_entries']['core']['entry'][] = array(
    "label" => "Modules",
    "path" => "stats/cpu/dashboard",
    "rank" => ""
);

$config['settings_entries']['core']['entry'][] = array(
    "label" => "Home",
    "rank" => "",
    "sub" => array(array(
        "label" => "Widgets",
        "path" => "stats/temperature/dashboard",
        "rank" => ""
    ), array(
        "label" => "Themes",
        "path" => "stats/temperature/dashboard",
        "rank" => ""
    ))
);

$config['settings_entries']['core']['entry'][] = array(
    "label" => "Memory",
    "path" => "stats/temperature/dashboard",
    "rank" => ""
);