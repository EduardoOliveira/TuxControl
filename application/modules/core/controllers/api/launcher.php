<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';

class Launcher extends REST_Controller
{

    function get_launcher_items_get()
    {
        $this->load->model("launcher_model");
        $launcherItems = $this->launcher_model->getActiveLaunchersItems();
        $this->response($launcherItems, 200);
    }


}