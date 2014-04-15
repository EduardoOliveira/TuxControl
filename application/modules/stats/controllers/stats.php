<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends MX_Controller
{

    public function cpu_usage_widget()
    {
        $this->load->view("cpu_usage_widget");
    }

}