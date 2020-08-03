<?php
class Errors extends Controller {

    private $views="Error";
	
	function __construct() {
		parent::__construct();	
	}
	
	function Index() 
	{
		$this->view->title = $this->views.'/Error';
		$this->view->msg = 'This page doesnt exist';
		$this->view->Render($this->views.'/Index');
	}

}