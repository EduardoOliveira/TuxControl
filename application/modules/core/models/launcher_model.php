<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Launcher_Model extends CI_Model
{

    public function getAllLauncherItems()
    {
        $launcher_items = array();

        $modules = TuxCore::get_modules();

        foreach ($modules as $module) {
            $conf = $this->load->config($module . "/launcher_items", false, true);
            if (is_array($conf))
                $launcher_items = array_merge($launcher_items,$conf);
        }
        return $launcher_items;
    }

    public function getActiveLaunchersItems()
    {
        $settings = $this->getActiveLaunchersItemsSettings();
        $items = $this->getAllLauncherItems();
        $activeItems = array();

        foreach ($settings as $active_item) {
            $current = @$items[$active_item['module']][$active_item['id']];
            if (is_array($current)) {
                if ($current['type'] == "widget") {
                    //@TODO: finish the generation of the widget and its js/css dependencies
                    $activeItems[] = array_merge($active_item, $current);
                } else {
                    $activeItems[] = array_merge($active_item, $current);
                }
            }
        }
        return $activeItems;
    }

    public function getActiveLaunchersItemsSettings()
    {
        return $this->load->config('core/active_launchers_settings');
    }

    public function saveLauncherSettings()
    {

    }
}