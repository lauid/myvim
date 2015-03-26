<?php
class Route{
	private $path;
	public function __construct(){
		$this->path = $_SERVER['REQUEST_URI'];	
	}

	public function run(){
		$this->path = trim($this->path, '/');
		$paths = explode('/', $this->path);
		$control = array_shift($paths);
		$method = array_shift($paths);
		if($control == '' )$control = 'index';
		if($method == '' )$method= 'index';

		#controller/indexController.php
		$control_file_name = ROOT_PATH.'/controller/'.$control.'Controller.php';
		if(file_exists($control_file_name)){
			include_once($control_file_name);	
			$control_class_name = $control.'Controller';
			if(class_exists($control_class_name)){
				$control_obj = new $control_class_name;
				if(method_exists($control_class_name, $method)){
					$control_obj->$method();
					#$control_obj->loadModel($control.'Model');
					return 'OK_200';
				}else{
					return 'ERROR_400: '.'no method.'.$method;
				}
			}else{
				return 'ERROR_400: '.'no class.'.$control_class_name;
			}
		}else{
			return 'ERROR_400: '.'no file'. $control_file_name;
		}
	}
}
