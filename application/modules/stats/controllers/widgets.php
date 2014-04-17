<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Widgets extends MX_Controller{


    public function usage_widget(){
        $rtn = array();

        $rtn['dependencies']['js']=array();
        $rtn['dependencies']['css']=array();
        $rtn['html'] = $this->load->view("stats/cpu_usage_widget");

        return $rtn;
    }

}