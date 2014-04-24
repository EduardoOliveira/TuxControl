<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CPU_Reading extends CI_Model {


	//Receives the data in the form of an array. Array keys MUST be collumn names.
	//Assumes that there was a insert on the hardware_reading table beforehand which gave us an id to be able to insert the data.
	function save(array $data)
	{
		$this -> db -> insert("cpu_reading", $data);
		return $this -> db -> insert_id();
	}

	function load(DateTime $end = null, DateInterval $interval = null, $metrics = null)
	{
		if($end === null)
		{
			$end = new DateTime("now");
		}
		if($interval === null)
		{
			$interval = new DateInterval("P7D");
		}
		if($metrics !== null)
		{
			foreach($metrics as $metric)
			{
				$this -> db -> select($metric);
			}
		}
		else
		{
			$this -> db -> select('temperature');
			$this -> db -> select('usage');
			$this -> db -> select('load');
		}
		$this -> db -> select('timestamp');
		$start = clone $end;
		//Get the starting date by substracting the interval and formatting it.
		$start = $start -> sub($interval) -> format("Y-m-d H:i:s");
		$this-> db ->where(array('hardware_reading.timestamp <= ' => $end -> format("Y-m-d H:i:s"),
			'hardware_reading.timestamp >= ' => $start ));
		$this-> db ->join('hardware_reading', 'cpu_reading.reading = hardware_reading.id' );
		$query = $this-> db -> get('cpu_reading');
		$result = $query -> result();
		return $result;
		//print_r($this -> db -> last_query());
	}


}

