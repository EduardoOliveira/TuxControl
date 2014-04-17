<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends MX_Controller
{

    function __construct(){
    }

    public function index()
    {
        $content['main_content'] = $this->load->view("core/launcher",array(),true);
        $this->load->view("core/wrapper",$content);
    }

    public function settings()
    {
        
    }
}