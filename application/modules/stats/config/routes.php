<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['api(:any)'] = "stats/api/$1";