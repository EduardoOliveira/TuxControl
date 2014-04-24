<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends MX_Controller
{

    public function index()
    {
        $side_panel = $this->load->view("core/side_widgets",null,true);
        $main_panel = "";
        $this->load->view("core/wrapper", array("content_panels" => array($side_panel,$main_panel)));
    }

    public function settings()
    {
        $side_panel = $this->load->view("core/settings/settings_menu",null,true);
        $main_panel = $this->load->view("core/settings/settings",null,true);
        $this->load->view("core/wrapper", array("content_panels" => array($side_panel,$main_panel)));
    }
}