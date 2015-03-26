<?php
class indexController extends BaseController{
	public function __construct(){
		parent::__construct();
		$this->loadModel('indexModel');
	}
	function index(){
		if(isset($_GET['info'])){
			$info = trim($_GET['info']);
			if(!empty($info)){
				echo '__FILE: '.__FILE__.'<br/>__FUNC: '.__function__.'<br/>__LINE: '.__LINE__.'<br/>__INFO: '.$info;
			}else {
				echo 'this method is '.	__method__;
			}
		}else{
			echo 'this method is '.	__method__;
		}
		$this->view->show('/index/main', array('abc'=>1223));
	}
	function article(){
		$data = $this->model->fetch_array('select * from articles order by id asc');

		#$data = indexModel::first();
		$params['data'] = $data;
		$this->view->show('/index/main', $params);
	}

	function updateArticle(){
		$params = array();
		if($this->isPost()){
			$id = intval($_REQUEST['id']);
			$title = trim($_REQUEST['title']);	
			$content = trim($_REQUEST['content']);	
			$nowdate =date('Y-m-d H:i:s');
			$sql = "update articles set title='{$title}', content='{$content}', date2='{$nowdate}' where id='$id'";
			$this->model->query($sql);
			$this->redirect('/index/article');
		}
		if(isset($_REQUEST['id'])){
			$id = intval($_REQUEST['id']);
			$sql = "select * from articles where id='{$id}' limit 0,1;";
			$data = $this->model->fetch_array($sql);
			$params['data'] = ($data[0]);
		}
		$this->view->show('/index/add', $params);
		#$this->redirect('/index/addArticle/?id='.intval(trim($_REQUEST['id'])));
	}

	function delArticle(){
		$id = (int)trim($_GET['id']);
		$sql = "delete from articles where id='{$id}'";
		$this->model->query($sql);
		$this->redirect('/index/article');
	}

	public function addArticle(){
		var_dump($_REQUEST);
		var_dump($_SERVER['REQUEST_METHOD']);
		
		$params = array();
		if(isset($_REQUEST['id'])){
			$id = intval($_REQUEST['id']);
			$sql = "select * from articles where id='{$id}' limit 0,1;";
			$data = $this->model->fetch_array($sql);
			$params['data'] = ($data[0]);
			if(isset($_SERVER['REQUEST_METHOD'])){
				/*
				 */
			}
		}
		#if(isset($_REQUEST['title']) && isset($_REQUEST['content']) && !empty($_REQUEST)){
		if(!isset($_REQUEST['id']) && !empty($_REQUEST)){
			$title = trim($_REQUEST['title']);	
			$content = trim($_REQUEST['content']);	
			$nowdate =date('Y-m-d H:i:s');
			$sql = "insert articles set title='{$title}', content='{$content}', date1='{$nowdate}', date2='{$nowdate}'";
			$this->model->query($sql);

			#$this->redirect('/index/article');
			##重复提交问题
		}
		$this->view->show('/index/add', $params);
	}
}
