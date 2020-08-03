<?php
class Login extends Controller {
	
	private $views="Login";

	function __construct() {
        parent::__construct();
			
	}
	
	function Index() {
	    $this->view->title = $this->views.'Login';
		$this->view->msg = $this->views.'Login';
		$this->view->Render($this->views.'/Index');
	}
	
	function Run()
	{
	$this->view->title = $this->views.'Login';
	$this->view->msg = $this->views.'Login';
	$this->model->Run();
	}
	
	
	function Logout($id)
	{
	    $this->model->deletetoken($id);
	    Session::init();
		Session::destroy();
		header('location: '.URL.'');
		exit;
	}
	
}