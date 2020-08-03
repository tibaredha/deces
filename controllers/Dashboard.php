<?php
class Dashboard extends Controller { 
	
	private $views="Dashboard";
	
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: '.URL.'Login');
			exit;
		}
		$this->view->js = array($this->views.'/js/default.js?t='.time());
		$this->view->css = array($this->views.'/css/default.css?t='.time());
		
	}
	
	function Index() {
	    $this->view->title = $this->views.'/Dashboard';
		$this->view->msg = $this->views.'/Dashboard';
		$this->view->Nbrtostring = $this->model->Nbrtostring(Session::get('structure'));
		$this->view->Render($this->views.'/Index');
	}
	
   function Nouveau() {
	    $this->view->title = $this->views.'/Nouveau';
		$this->view->msg = $this->views.'/Nouveau';
		$this->view->Nbrtostring = $this->model->Nbrtostring(Session::get('structure'));
		$this->view->wilayaListview = $this->model->Wilaya();
		$this->view->Render($this->views.'/Nouveau');
	}
		
}