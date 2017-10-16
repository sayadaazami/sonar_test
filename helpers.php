<?php
	spl_autoload_register(function($class) {
		$file = 'app/' . str_replace('\\', '/', $class.'.php');
		if(!file_exists($file)){
		 throw new \Exception('class '.$class.' file not exists');
		}
		include_once $file;
	});

	if (!function_exists('dd')) {
	    function dd()
	    {
	        array_map(function($x) { 
	            print_r($x); 
	        }, func_get_args());
	        die;
	    }
	 }