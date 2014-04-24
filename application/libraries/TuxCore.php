<?php

class TuxCore
{

    private static $MODULES = array();
    private static $CONFIG;
    private static $CI;

    public static function load_global_config($conf_name)
    {
        if (!@empty(TuxCore::$CONFIG[$conf_name])) return TuxCore::$CONFIG[$conf_name];
        $cfg = array();

        foreach (TuxCore::get_modules() as $module) {
            $conf = TuxCore::$CI->load->config("$module/$conf_name", false, true);
            if (is_array($conf))
                $cfg = array_merge($cfg,$conf);
        }

        usort($cfg, function($a,$b){
            return $a['title']["order"] - $b['title']["order"];
        });

        return TuxCore::$CONFIG[$conf_name] = $cfg;
    }

    private static function get_modules()
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