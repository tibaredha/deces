<?php
class Index extends Controller {

     private $views="Index";

	function __construct() {
		parent::__construct();
	}
	
	function Index() {
		$this->view->title = $this->views.'/Index';
		$this->view->msg = 'Page : '.$this->views.'/Index';;
		$this->view->Render($this->views.'/Index');
	}
	
}