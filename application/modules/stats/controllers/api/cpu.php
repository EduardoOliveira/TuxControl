<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Cpu extends REST_Controller
{
	//if there is no hour:minute:second information consider the end of the day.
	const DEFAULT_PT = " 23:59:59";

	function instant_load_get()
	{
		$average['loadaverage'] = $this -> get_load();
		$this->response($average, 200);
	}

	function instant_temperature_get()
	{
		$this -> response( array("temperature" => $this -> get_temperature() ) , 200 );
	}

	function instant_usage_get()
	{
		$currentcpu['cpucurrent'] = $this -> get_usage();
		$this->response($currentcpu, 200);
	}

	function stats_cpu_get()
	{
		//Maybe the model should receive the strings and validate
		$end 	= $this->input->get('end');
		$offset = $this->input->get('offset');
		$metrics = $this->input->get('metrics');
		$endDate = null;
		$interval= null;
		if ( !empty($end) ){
			if ( strpos($end, ':') === FALSE )
				$end = $end.Cpu::DEFAULT_PT;
			$endDate = new DateTime($end);
		}
		if ( !empty($offset) )
			$interval = new DateInterval($offset); 
		$this -> load -> model("cpu_reading");
		$response = $this -> cpu_reading -> load($endDate, $interval, $metrics);
		if($response == -1)
			$this -> response( '', 400 );
		else
			$this -> response( $response , 200 );
	}


	function get_temperature()
	{
		exec("cat /sys/class/thermal/thermal_zone0/temp", $output);
		return $output;
	}

	function get_usage()
	{
		exec("top -bn 1 | awk 'NR>7{s+=$9} END {print s}'", $output);
		return $output[0];
	}

	function get_load()
	{
		exec('cat /proc/loadavg', $output);
        $output = explode(' ', $output[0]);
		return $output[2];
	}

	function cli_automation()
	{
		parent::cli_automation();
		$data['load'] = $this -> get_load();
        $data['usage_percentage'] = $this -> get_usage();
		$data['usage_percentage'] = $data['usage_percentage'][0];
		$data['temperature'] = $this -> get_temperature();
		$data['temperature'] = $data['temperature'][0];
		$this->load->model('cpu_reading');
		$this->load->model('hardware_reading');
		$data['reading'] = $this -> hardware_reading -> save();
		$this -> cpu_reading -> save($data);	
	}
}