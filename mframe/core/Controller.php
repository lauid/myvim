<?php
class BaseController{
	#model
	public function model($model_class_name){
		$model_file_name = ROOT_PATH.'/model/'.$model_class_name.'.php';
		if(file_exists($model_file_name)){
			require_once $model_file_name;
			if(class_exists($model_class_name)){
				return new $model_class_name();	
				#$this->model = new $model_class_name();	
			}
		}
	}
	#view
	public function view($view_file, $data=[])
	{
		$view_file_name = ROOT_PATH.'/view/'.$view_file.'.php';
		if(!file_exists($view_file_name)) return FALSE;
		#把数组展开，键名做变量名，键值做变量值        
		extract($data);
		#引入view文件        
		require_once($view_file_name);
		return TRUE;
	}
	/*
	protected $view;
	protected $model;

	public function __construct(){
		$this->view = new BaseView();	
	}

	public function loadModel($model_class_name){
		$model_file_name = ROOT_PATH.'/model/'.$model_class_name.'.php';
		if(file_exists($model_file_name)){
			require_once $model_file_name;
			if(class_exists($model_class_name)){
				$this->model = new $model_class_name;	
			}
		}
	}
	 */

	public function redirect($toheader){
		if(empty($toheader)){
			header("location: /index/index/?info='route is no exist.'");
		}else header("location: ".$toheader);
	}

	public function isPost(){
		if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST')	
			return true;
		else return false;
	}
	public function getParam($param, $default){
		if(isset($_REQUEST[$param])){
			return $_REQUEST[$param];
		}else{
			return $default;
		}
	}
}
