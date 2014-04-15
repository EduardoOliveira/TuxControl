<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends MX_Controller
{

    function __construct(){
    }

    public function index()
    {
        $this->load->view("core/wrapper");
    }

    public function settings()
    {
        echo "dasd";
    }
}