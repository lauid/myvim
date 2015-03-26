<?php
class Route{
	private $path;
	protected $controller;
	protected $view;
	public function __construct(){
		$this->path = $_SERVER['REQUEST_URI'];	
	}

	private static function autoload($class_name){
		$control = $class_name;
		$control_file_name = ROOT_PATH.'/controller/'.$control.'.php';

		if(file_exists($control_file_name)){
			require_once($control_file_name);	
			/*
			if(class_exists($control_class_name)){
				$control_obj = new $control_class_name;
				if(method_exists($control_class_name, $method)){
					$control_obj->$method();
					return 'OK_200';
				}else{
					return 'ERROR_400: '.'no method.'.$method;
				}
			}else{
				return 'ERROR_400: '.'no class.'.$control_class_name;
			}
			 */
		}else{
			return 'ERROR_400: '.' no file '. $control_file_name;
		}
	}
	public function run(){
		$paths = explode('/', trim($this->path, '/'));
		$control = array_shift($paths);
		$method = array_shift($paths);
		if($control == '' )$control = 'index';
		if($method == '' )$method= 'index';

		$control_class_name = $control.'Controller';
		$control_obj = new $control_class_name;
		if(method_exists($control_class_name, $method)){
			$control_obj->$method();
			return 'OK_200';
		}else{
			return 'ERROR_400: '.'no method.'.$method;
		}
	}
}

spl_autoload_register(array('Route', 'atutoload'));
