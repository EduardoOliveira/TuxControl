<?php

class TuxCore
{

    private static $MODULES = array();
    private static $MENU_PATHS = array();
    private static $CI;

    public static function menu_paths()
    {
        if (count(TuxCore::$MENU_PATHS) > 0) return TuxCore::$MENU_PATHS;

        $menu_paths = array();
        foreach (TuxCore::get_modules() as $module_name) {
            if (is_file(APPPATH . "/modules/" . $module_name . "/config/menu_paths.php")) {
                include_once(APPPATH . "/modules/" . $module_name . "/config/menu_paths.php");
            }
        }
        return TuxCore::$MENU_PATHS = $menu_paths;
    }

    public static function get_modules()
    {
        if (count(TuxCore::$MODULES) > 0) return TuxCore::$MODULES;
        $rtn = array();
        //@TODO: allow for multiple module locations
        if ($handle = opendir(APPPATH . "/modules")) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $rtn[] = $entry;
                }
            }
            closedir($handle);
        }
        return TuxCore::$MODULES = $rtn;
    }

    function __construct()
    {
        TuxCore::$CI = & get_instance();
    }
}

new TuxCore();