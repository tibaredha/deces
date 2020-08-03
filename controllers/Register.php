<?php

class Register extends Controller {

	function __construct() {
		parent::__construct();
		// $this->affichage($url1);	code ascii =     |	Alt+ 0124   //$this->affichage($data);	
	}
	
	function index() {
	    $this->view->title = 'register';
		$this->view->msg = 'register';
		$this->view->wilayaListview = $this->model->Wilaya() ;
		$this->view->render('register/index');
	}
	
	function captchaVerif($var1,$var2) {
			
			if(empty($var1) || empty($var2) ) 
			{
				header('location: '.URL.'Register');	
			} 
			else 
			{
				if ($var1 == $var2)
				{
				return true ;
				}
				else 
				{
				header('location: '.URL.'Register');
				} 
			}			
		}
	
    function Registerrun()
	{
		$data = array();
		$data['wilaya']    = $_POST['comb_wilayas'];
		$data['structure'] = $_POST['comb_structure'];
		$data['Email']     = $_POST['Email'];  //manque verification email 
		$data['login']     = $_POST['login'];
		$data['password']  = $_POST['password'];
		$data['captcha']   = $_POST['captcha'];
		$data['captchax']  = $_POST['captchax'];
		if ($this->captchaVerif($_POST['captchax'],$_POST['captcha'])) 
		{
        // echo "verifier"	;		
			$this->model->runRegister($data);
		} 
		else 
		{
			// echo "non verifier"	;
			header('location: '.URL.'register');
		}    
	}
	// confirmation
	function confirmation($id) 
	{  
		$url1 = explode('/',$_GET['url']);		
		$this->model->userSingleList($url1) ;
	}
	// 1Mot de passe oublier
	function forget() 
	{
	    $this->view->title = 'forget';
		$this->view->msg = 'forget';
		$this->view->render('register/forget');
	}
	// 2Mot de passe oublier	
	function recuperer() 
	{
		if (isset($_POST['Email']))	
		{
			$_POST['Email'] = htmlspecialchars($_POST['Email']);
			if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['Email']))
			{
			    $data = array();
				$data['Email']    = $_POST['Email'];
				$this->model->userSingleList1($data) ;
				// echo $email = $_POST['Email'];
			}
			else
			{
				 header('location: ' . URL . 'register/forget');  
			}
		}
		else	
		{
		    header('location: ' . URL . 'register/forget');  
		}
	
	}
	// 3Mot de passe oublier
	function reset($id) 
	{
	    $url1 = explode('/',$_GET['url']);
		$this->view->title = 'reset';
		$this->view->msg   = 'reset';
		$this->view->id=$url1[2];
		$this->view->token=$url1[3];
		$this->view->render('register/reset');
		
	}
	// 4Mot de passe oublier	
	function recuperer1() 
	{
	    $data = array();
		$data['password']    = $_POST['password'];
	    $data['id']          = $_POST['id'];
	    $data['token']       = $_POST['token'];
		$this->model->userSingleList2($data) ;
		$this->affichage($data);	
	}
	

	
	
	
	
	
	
	
	
	
}